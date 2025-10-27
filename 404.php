<?php get_header(); ?>

<main>
  <section class="error layout-sub-page">
    <div class="error__inner inner">
      <!-- 波状のあしらい -->
      <div class="error__bg bg-image bg-image--wave"></div>
      <div class="error__header">
        <h2 class="error__title section-title">
          <span class="section-title__jp">ページが見つかりません</span>
        </h2>
        <p class="error__text">お探しのページは存在しないか、移動した可能性があります。</p>
      </div>
      <div class="error__button">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="button button--navy button--forward">トップへ戻る</a>
      </div>
    </div>
  </section>
</main>
<?php get_footer('contact'); ?>
