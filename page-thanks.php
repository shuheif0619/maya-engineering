<?php get_header('contact'); ?>

<main>
  <section class="contact layout-sub-page">
    <div class="contact__inner inner">
      <!-- 波状のあしらい -->
      <div class="contact__header">
        <div class="contact__bg bg-image bg-image--wave"></div>
        <h2 class="contact__title section-title">
          <span class="section-title__jp"><?php the_title(); ?></span>
          <span class="section-title__en">thanks</span>
        </h2>
        <p class="contact__text">この度はお問い合わせいただきまして誠にありがとうございます。<br>
          ご入力頂いたメールアドレス宛へ、ご確認メールをお送りしておりますのでご確認ください。<br>
          内容を確認次第、担当者より折返しご連絡させていただきます。今しばらくお待ちくださいませ。
        </p>
      </div>
      <div class="contact__button">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="button button--navy button--forward">トップへ戻る</a>
      </div>
    </div>
  </section>
</main>
<?php get_footer('contact'); ?>
