<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <?php wp_head(); ?>
</head>

<body>
  <header class="header layout-header">
    <div class="header__inner inner">
      <div class="header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" alt="LOGO" width="160"
            height="33" loading="lazy" decoding="async">
        </a>
      </div>
      <nav class="header__nav nav">
        <ul class="nav__items">
          <li class="nav__item">
            <a href="<?php echo esc_url(me_section_link('about')); ?>">
              <span class="nav__label">about&nbsp;<span class="nav__sub">us</span></span>
            </a>
          </li>
          <li class="nav__item">
            <a href="<?php echo esc_url(me_section_link('services')); ?>">
              <span class="nav__label">services</span>
            </a>
          </li>
          <li class="nav__item">
            <a href="<?php echo esc_url(me_section_link('message')); ?>">
              <span class="nav__label">message</span>
            </a>
          </li>
          <li class="nav__item">
            <a href="<?php echo esc_url(me_section_link('corporate')); ?>">
              <span class="nav__label">corporate</span>
            </a>
          </li>
          <li class="nav__item nav__item--contact">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>"
              class="button button--navy button--contact">お問い合わせ</a>
          </li>
        </ul>
      </nav>
      <!-- ハンバーガーメニュー -->
      <button class="header__hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <!-- ドロワーメニュー -->
      <div class="header__drawer js-drawer">
        <nav class="header__drawer-nav">
          <ul class="header__drawer-list">
            <li class="header__drawer-item">
              <a href="<?php echo esc_url(me_section_link('about')); ?>">
                <span class="nav__label">about&nbsp;<span class="nav__sub">us</span></span>
              </a>
            </li>
            <li class="header__drawer-item">
              <a href="<?php echo esc_url(me_section_link('services')); ?>">
                <span class="nav__label">services</span>
              </a>
            </li>
            <li class="header__drawer-item">
              <a href="<?php echo esc_url(me_section_link('message')); ?>">
                <span class="nav__label">message</span>
              </a>
            </li>
            <li class="header__drawer-item">
              <a href="<?php echo esc_url(me_section_link('corporate')); ?>">
                <span class="nav__label">corporate</span>
              </a>
            </li>
            <li class="header__drawer-item header__drawer-item--contact">
              <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                class="button button--navy button--contact">お問い合わせ</a>
            </li>
            <li class="header__drawer-item header__drawer-item--search">
              <!-- 検索サイトのURLを入力 -->
              <a href="" class="button button--white button--search">
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
