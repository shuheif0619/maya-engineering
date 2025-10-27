<?php

function my_theme_enqueue_assets()
{
    add_filter('stylesheet_directory_uri', function ($uri) {
        $uri = untrailingslashit($uri);
        if (substr($uri, -7) === '/assets') {
            $uri = dirname($uri);
        }
        return $uri;
    }, 1);

    add_filter('template_directory_uri', function ($uri) {
        $uri = untrailingslashit($uri);
        if (substr($uri, -7) === '/assets') {
            $uri = dirname($uri);
        }
        return $uri;
    }, 1);

    add_filter('theme_file_uri', function ($url) {
        while (strpos($url, '/assets/assets/') !== false) {
            $url = str_replace('/assets/assets/', '/assets/', $url);
        }
        return $url;
    }, 1, 1);

    $base_dir = untrailingslashit(get_stylesheet_directory());
    $base_uri = untrailingslashit(get_stylesheet_directory_uri());
    if (substr($base_dir, -7) === '/assets') {
        $base_dir = dirname($base_dir);
    }
    if (substr($base_uri, -7) === '/assets') {
        $base_uri = dirname($base_uri);
    }

    // ========= CSS =========
    // Google Font
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap',
        [],
        null
    );
    // Swiper CSS
    wp_enqueue_style(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css',
        [],
        null
    );
    // メインCSS
    $rel_css  = '/assets/css/style.css';
    $file_css = $base_dir . $rel_css;
    $url_css  = $base_uri . $rel_css;

    wp_enqueue_style(
        'theme-style',
        $url_css,
        ['swiper', 'google-fonts'],
        file_exists($file_css) ? filemtime($file_css) : null
    );

    // ========= JS =========
    // Swiper JS
    wp_enqueue_script(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js',
        [],
        null,
        true
    );
    wp_script_add_data('swiper', 'defer', true);

    wp_enqueue_script(
        'jquery-cdn',
        'https://code.jquery.com/jquery-3.7.1.min.js',
        [],
        null,
        true
    );
    wp_script_add_data('jquery-cdn', 'defer', true);
    wp_script_add_data('jquery-cdn', 'integrity', 'sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=');
    wp_script_add_data('jquery-cdn', 'crossorigin', 'anonymous');

    // inview
    $inview_rel = '/assets/js/inview/jquery.inview.min.js';
    $inview_abs = $base_dir . $inview_rel;
    if (! file_exists($inview_abs)) {
        $alt_rel = '/assets/js/inview/jquery.inview-master/jquery.inview.min.js';
        $alt_abs = $base_dir . $alt_rel;
        if (file_exists($alt_abs)) {
            $inview_rel = $alt_rel;
            $inview_abs = $alt_abs;
        } else {
            $inview_rel = '';
        }
    }
    if ($inview_rel) {
        wp_enqueue_script(
            'jquery-inview',
            $base_uri . $inview_rel,
            ['jquery-cdn'],
            filemtime($inview_abs),
            true
        );
        wp_script_add_data('jquery-inview', 'defer', true);
    }
    // メインJS
    $rel_js  = '/assets/js/script.js';
    $file_js = $base_dir . $rel_js;
    $url_js  = $base_uri . $rel_js;

    $deps = ['jquery-cdn', 'swiper'];
    if (wp_script_is('jquery-inview', 'enqueued')) {
        $deps[] = 'jquery-inview';
    }

    wp_enqueue_script(
        'theme-script',
        $url_js,
        $deps,
        file_exists($file_js) ? filemtime($file_js) : null,
        true
    );
    wp_script_add_data('theme-script', 'defer', true);
    wp_add_inline_script(
        'theme-script',  // ← ここを正しいハンドル名に修正
        'window.__THANKS_URL__ = "' . esc_url(home_url('/thanks/')) . '";',
        'before'
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets', 99);


function my_theme_head_misc_assets()
{
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";

    if (! (function_exists('has_site_icon') && has_site_icon())) {
        $ico_rel   = '/assets/images/favicons/favicon.ico';
        $apple_rel = '/assets/images/favicons/apple-icon.png';

        if (file_exists(get_stylesheet_directory() . $ico_rel)) {
            echo '<link rel="icon" href="' . esc_url(get_stylesheet_directory_uri() . $ico_rel) . '">' . "\n";
        }
        if (file_exists(get_stylesheet_directory() . $apple_rel)) {
            echo '<link rel="apple-touch-icon" sizes="180x180" href="' . esc_url(get_stylesheet_directory_uri() . $apple_rel) . '">' . "\n";
        }
    }

    $manifest_rel = '/assets/images/favicons/manifest.webmanifest';
    if (file_exists(get_stylesheet_directory() . $manifest_rel)) {
        echo '<link rel="manifest" href="' . esc_url(get_stylesheet_directory_uri() . $manifest_rel) . '">' . "\n";
    }
}
add_action('wp_head', 'my_theme_head_misc_assets', 5);


// ユーティリティ等
function me_section_link($hash)
{
    $id = ltrim((string)$hash, '#');
    return is_front_page() ? "#{$id}" : home_url("/#{$id}");
}

// Contact Form 7 調整
add_filter('wpcf7_autop_or_not', '__return_false');
add_filter('wpcf7_spinner_html', '__return_empty_string');

// テーマ機能
add_theme_support('title-tag');
add_action('wp_head', function () {
    if (! current_theme_supports('title-tag')) {
        echo '<title>' . esc_html(wp_get_document_title()) . '</title>' . "\n";
    }
}, 1);
add_theme_support('post-thumbnails');
add_post_type_support('page', 'thumbnail');

add_filter('wp_get_attachment_image_attributes', function ($attr, $attachment, $size) {
    if (!empty($attr['sizes'])) {
        $attr['sizes'] = preg_replace('/\s*auto\s*,\s*/i', '', $attr['sizes']);
        $attr['sizes'] = trim($attr['sizes']);
    }

    if (empty($attr['sizes'])) {
        $w = is_array($size) ? (int)$size[0] : (int) get_option('large_size_w', 1024);
        if ($w <= 0) {
            $w = 1024;
        }
        $attr['sizes'] = "(max-width: {$w}px) 100vw, {$w}px";
    }
    return $attr;
}, 10, 3);

add_filter('wp_calculate_image_sizes', function ($sizes, $size, $image_src, $image_meta, $attachment_id) {
    if (is_string($sizes)) {
        $sizes = preg_replace('/\s*auto\s*,\s*/i', '', $sizes);
        $sizes = trim($sizes);
    }
    if ($sizes === '') {
        $w = is_array($size) ? (int)$size[0] : 1024;
        if ($w <= 0) {
            $w = 1024;
        }
        $sizes = "(max-width: {$w}px) 100vw, {$w}px";
    }
    return $sizes;
}, 10, 5);

add_filter('wpcf7_form_novalidate', '__return_false');
add_filter('wpcf7_support_html5', '__return_true');


add_action('wp_head', function () {
    echo '<!-- blog_charset=' . esc_html(get_option('blog_charset')) . ' -->';
}, 0);