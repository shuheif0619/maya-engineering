<!-- footer -->
<footer class="footer layout-footer">
  <!-- アーチ状の背景画像 -->
  <div class="footer__curve bg-curve" aria-hidden="true"></div>
  <div class="footer__inner inner">
    <div class="footer__flex">
      <div class="footer__info">
        <figure class="footer__logo">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/footer_logo.svg" alt="Maya Engineeringのロゴ"
            width="195" height="87" loading="lazy" decoding="async">
        </figure>
        <address class="footer__address">
          &#12306;<?php the_field('company_zip_code'); ?><br>
          <?php the_field('company_address'); ?><br>
          <?php the_field('company_building'); ?>
        </address>
      </div>
      <div class="footer__links">
        <div class="footer__nav-links nav">
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
          </ul>
          <ul class="footer__ex-links-list">
            <li class="footer__ex-links-item">
              <a class="footer__ex-link footer__ex-link--holdings" href="https://mayahd.jp/" target="_blank"
                rel="noopener noreferrer">
                mayaホールディングス
              </a>
            </li>
            <li class="footer__ex-links-item">
              <a class="footer__ex-link footer__ex-link--staffing" href="https://mayastaffing.com/" target="_blank"
                rel="noopener noreferrer">
                maya staffing
              </a>
            </li>
            <li class="footer__ex-links-item">
              <a class="footer__ex-link footer__ex-link--privacy" href="https://mayastaffing.com/privacy/"
                target="_blank" rel="noopener noreferrer">
                個人情報保護方針
              </a>
            </li>
            <li class="footer__ex-links-item">
              <a class="footer__ex-link footer__ex-link--secure-policy" href="https://mayastaffing.com/policy/"
                target="_blank" rel="noopener noreferrer">
                情報セキュリティ基本方針
              </a>
            </li>
          </ul>
        </div>
      </div>

      <ul class="footer__buttons">
        <li class="footer__button footer__button--contact">
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button button--navy button--contact">お問い合わせ</a>
        </li>

        <?php
        // マヤサーチのトップページへ遷移させる //
        $external_url = get_home_url(2, '/');
        ?>
        <!-- 指示によりいったん非表示。任意のタイミングでコメントアウトを外してください。 -->
        <!-- <li class="footer__button footer__button--search">
          <a href="<?php echo esc_url($external_url); ?>" class="button button--white button--search" target="_blank"
            rel="noopener noreferrer">
          </a>
        </li> -->

      </ul>
    </div>
    <div class="footer__copyright">
      <small>&copy;MAYA ENGINEERING, Inc.</small>
    </div>
  </div>
  <div class="footer__bg-wrapper">
    <div class="footer__bg-inner inner">
      <!-- 歯車のあしらい -->
      <div class="footer__bg bg-image bg-image--gear"></div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
