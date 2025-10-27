<?php get_header('contact'); ?>

<main>
  <section class="contact layout-sub-page">
    <div class="contact__inner inner">
      <!-- 波状のあしらい -->
      <div class="contact__header">
        <div class="contact__bg bg-image bg-image--wave"></div>
        <h2 class="contact__title section-title">
          <span class="section-title__jp"><?php the_title(); ?></span>
          <span class="section-title__en">contact</span>
        </h2>
        <p class="contact__text">弊社や各種サービスに関するお問い合わせは、<br>
          下記よりお願いいたします。
        </p>
      </div>
      <?php echo do_shortcode('[contact-form-7 id="2c3951b" title="コンタクトフォーム"]'); ?>
    </div>
  </section>
</main>
<?php get_footer('contact'); ?>