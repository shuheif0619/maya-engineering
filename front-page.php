<?php get_header(); ?>
<main>
  <!-- ファーストビュー -->
  <section class="fv">
    <div class="fv__inner inner">
      <!-- 歯車のあしらい -->
      <div class="fv__bg-image bg-image bg-image--gear"></div>
      <div class="fv__slider-wrapper">
        <div class="fv__slider js-fv-slider">
          <div class="swiper-wrapper">
            <figure class="swiper-slide fv__slide fv__slide--bottom">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv01.webp" alt="2人の男性の写真" width="391"
                height="424" decoding="async">
            </figure>
            <figure class="swiper-slide fv__slide fv__slide--top">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv02.webp" alt="笑顔の女性の写真" width="391"
                height="424" decoding=" async">
            </figure>
            <figure class="swiper-slide fv__slide fv__slide--center">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv03.webp" alt="MAYA GROUPのロゴの写真"
                width="391" height="424" loading="lazy" decoding="async">
            </figure>
            <figure class="swiper-slide fv__slide fv__slide--top">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv04.webp" alt="PCを触る男性の写真" width="391"
                height="424" loading="lazy" decoding="async">
            </figure>
            <figure class="swiper-slide fv__slide fv__slide--bottom">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv05.webp" alt="オフィスビル入り口の写真"
                width="391" height="424" loading="lazy" decoding="async">
            </figure>
            <figure class="swiper-slide fv__slide fv__slide--top">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv06.webp" alt="携帯電話を持った男性の写真"
                width="391" height="424" loading="lazy" decoding="async">
            </figure>
            <figure class="swiper-slide fv__slide fv__slide--bottom">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv07.webp" alt="ミーティング中の男性の写真"
                width="391" height="424" loading="lazy" decoding="async">
            </figure>
            <figure class="swiper-slide fv__slide fv__slide--top">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv08.webp" alt="会社ミッションの写真" width="391"
                height="424" loading="lazy" decoding="async">
            </figure>
            <figure class="swiper-slide fv__slide fv__slide--bottom">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv01.webp" alt="2人の男性社員の写真" width="391"
                height="424" decoding="async">
            </figure>
            <figure class="swiper-slide fv__slide fv__slide--top">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv02.webp" alt="笑顔の女性社員の写真" width="391"
                height="424" decoding=" async">
            </figure>
            <figure class="swiper-slide fv__slide fv__slide--center">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv03.webp" alt="MAYA GROUPのロゴの写真"
                width="391" height="424" loading="lazy" decoding="async">
            </figure>
            <figure class="swiper-slide fv__slide fv__slide--top">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv04.webp" alt="PCを触る男性の写真" width="391"
                height="424" loading="lazy" decoding="async">
            </figure>
            <figure class="swiper-slide fv__slide fv__slide--bottom">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv05.webp" alt="オフィスビル入り口の写真"
                width="391" height="424" loading="lazy" decoding="async">
            </figure>
            <figure class="swiper-slide fv__slide fv__slide--top">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv06.webp" alt="携帯電話を持った男性の写真"
                width="391" height="424" loading="lazy" decoding="async">
            </figure>
            <figure class="swiper-slide fv__slide fv__slide--center">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv07.webp" alt="ミーティング中の男性の写真"
                width="391" height="424" loading="lazy" decoding="async">
            </figure>
            <figure class="swiper-slide fv__slide fv__slide--top">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv08.webp" alt="会社ミッションの写真" width="391"
                height="424" loading="lazy" decoding="async">
            </figure>
          </div>
        </div>
      </div>
      <div class="fv__content js-fadeIn">
        <div class="fv__catch">
          <p class="fv__lead">
            <span class="fv__message">実力が<span class="fv__punct">、</span></span><br>
            <span class="fv__message">もっと輝くステージ<span class="fv__punct">。</span></span>
          </p>
          <p class="fv__text">豊富な技術とノウハウを持つIT人材集団、<br>マヤエンジニアリング。</p>
        </div>
        <div class="fv__button">
          <a href="<?php echo esc_url(home_url('/contact/')); ?>"
            class="button button--white button--forward">お問い合わせはこちら</a>
        </div>
      </div>
    </div>
    <div class="fv__search js-fadeIn">
      <?php
      // マヤサーチのトップページへ遷移させる //
      $external_url = get_home_url(2, '/');
      ?>
      <!-- 指示によりいったん非表示。任意のタイミングでコメントアウトを外してください。 -->
      <!-- <a href="<?php echo esc_url($external_url); ?>" class="button button--fv-search" aria-label="ITお仕事検索：マヤサーチ"
        target="_blank" rel="noopener noreferrer">
      </a> -->
    </div>
  </section>

  <!-- リクルートセクション -->
  <section class="recruit layout-recruit" id="recruit">
    <div class="recruit__inner inner">
      <div class="recruit__wrapper">
        <div class="recruit__catch">
          <span>IT業界の働き方を広げる</span>
          <span>MAYAの両輪</span>
        </div>
      </div>
    </div>
    <div class="recruit__circles">
      <!-- 8の字状の円の画像 -->
      <div class="recruit__bg-circle" aria-hidden="true"></div>
      <div class="recruit__circle-flex">

        <div class="recruit__job-type recruit__job-type--left js-fadeIn">
          <figure class="recruit__job-image">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mayaengineering.svg"
              alt="MAYAエンジニアリングのアイコン" width="246" height="140" loading="lazy" decoding="async">
          </figure>
          <div class="recruit__job-labels">
            <span class="recruit__job-label">受託</span>
            <span class="recruit__job-label">自社在籍</span>
          </div>
          <p class="recruit__job-description">
            高度なIT技術と豊富な実務経験を活かした、自社在籍の受託部門です。大手通信キャリアで培った知見を基に、安定性と専門性を両立しながら、
            キャリアアップを目指せる環境です。
          </p>
        </div>
        <div class="recruit__job-type recruit__job-type--right js-fadeIn">
          <figure class="recruit__job-image">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mayastaffing.svg" alt="MAYAスタッフィングのアイコン"
              width="246" height="140" loading="lazy" decoding="async">
          </figure>
          <div class="recruit__job-labels">
            <span class="recruit__job-label">人材派遣</span>
          </div>
          <p class="recruit__job-description">
            大手通信キャリアを中心としたSES事業部門です。営業から構築、運用・保守まで一貫して担当できる、実力派のIT人材が活躍中。希望に沿った案件で、理想のキャリアを実現できます。
          </p>
        </div>
      </div>
    </div>
    <div class="recruit__inner inner">
      <!-- 波状の背景画像 -->
      <div class="recruit__bg bg-image bg-image--filter bg-image--recruit" aria-hidden="true"></div>
      <ul class="recruit__list-items">
        <li class="recruit__list-item media js-fadeIn">
          <div class="media__wrapper">
            <div class="media__header">
              <span class="media__title-sub">豊富な経験が生む技術の力</span>
              <h3 class="media__title-main">人材派遣(SES)</h3>
              <p class="media__description">
                通信インフラからシステム開発まで、確かな技術力を持つIT人材を派遣。大手通信キャリアで培った豊富なノウハウと、マルチスキルを活かした柔軟な対応力で、お客様のプロジェクトを成功に導きます。</p>
            </div>
            <div class="media__visual visual-stack">
              <figure class="visual-stack__main">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/recruit01.webp" alt="笑顔の女性の写真"
                  width="402" height="356" loading="lazy" decoding="async" />
              </figure>
            </div>
          </div>
        </li>
        <li class="recruit__list-item media js-fadeIn">
          <div class="media__wrapper">
            <div class="media__header">
              <span class="media__title-sub">確かな実績が生む確実な成果</span>
              <h3 class="media__title-main">自社請負</h3>
              <p class="media__description">
                自社IT人材の技術力で、設計から構築、運用まで一貫して対応。大手通信キャリアで培った経験とノウハウを活かし、高品質なITインフラ構築を実現します。プロジェクト全体を俯瞰できるマルチスキル人材が、お客様の業務課題を確実に解決します。
              </p>
            </div>
            <div class="media__visual visual-stack">
              <figure class="visual-stack__main">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/recruit02.webp"
                  alt="4人のスーツ姿の男女が笑顔でカメラを見ている写真" width="402" height="356" loading="lazy" decoding="async" />
              </figure>
              <figure class="visual-stack__sub">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/recruit03.webp"
                  alt="オフィスの明るい空間で打ち合わせをする3人の男性の写真" width="198" height="132" loading="lazy" decoding="async" />
              </figure>
            </div>
          </div>
        </li>
      </ul>
      <div class="recruit__content">
        <div class="recruit__flex js-fadeIn">
          <figure class="recruit__image">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/recruit_circle.webp"
              alt="採用の詳細のイラスト、人材派遣でノウハウを貯める・自社で請負い・社員育成を示す循環型の図" width="442" height="424" loading="lazy"
              decoding="async">
          </figure>
          <p class="recruit__text">
            大手通信キャリアへの「派遣でノウハウ」を貯め、培った技術力で「自社で請負」案件を獲得し、その経験を活かし「社員育成」を行う。<br class="u-desktop">
            確かな品質の技術提供だけでなく、企業の成長とIT人材、一人ひとりのキャリアアップも同時に実現しています。
          </p>
        </div>
        <div class="recruit__button">
          <!-- MAYA SEARCHのサイトのURLを入力-->
          <a href="#" class="button button--white button--forward">リクルーティングサイトへ</a>
        </div>
      </div>
      <!-- 歯車のあしらい -->
      <div class="recruit__bg bg-image bg-image--gear"></div>
    </div>
  </section>

  <!-- アバウトセクション -->
  <section class="about layout-about">
    <!-- アーチ状の背景 -->
    <div class="about__curve bg-curve" aria-hidden="true"></div>
    <span id="about" class="about__anchor" aria-hidden="true"></span>
    <div class="about__header">
      <h2 class="about__section-title section-title">
        <span class="section-title__jp">マヤエンジニアリング<br class="u-mobile">について</span>
        <span class="section-title__en">about&nbsp;<span>us</span></span>
      </h2>
    </div>
    <div class="about__bg-wrapper">
      <div class="about__inner inner">
        <ul class="about__list-items">
          <li class="about__list-item media">
            <!-- 波状のあしらい -->
            <div class="media__bg bg-image bg-image--about" aria-hidden="true"></div>
            <div class="media__wrapper js-fadeIn">
              <div class="media__header">
                <span class="media__title-sub">Point 01</span>
                <h3 class="media__title-main">「働く目的」を大切にした<br>働き方が可能。</h3>
                <p class="media__description">
                  安定を求める方、より高い収入を目指す方、自由な働き方を希望する方。人それぞれの働く目的は異なります。私たちは、正社員、派遣社員など、あなたの目的に最適な雇用形態を提供し、働き方の変更にも柔軟に対応します。
                </p>
              </div>
              <div class="media__visual visual-stack">
                <figure class="visual-stack__main">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about01.webp"
                    alt="笑顔の男性の写真。背景では同僚たちが仕事をしている" width="397" height="266" loading="lazy" decoding="async" />
                </figure>
                <figure class="visual-stack__sub">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about02.webp"
                    alt="ノートパソコンを抱えている女性の写真" width="220" height="173" loading="lazy" decoding="async" />
                </figure>
              </div>
            </div>
          </li>
          <li class="about__list-item media media--reverse">
            <div class="media__wrapper js-fadeIn">
              <!-- 波状のあしらい -->
              <div class="media__bg bg-image bg-image--about" aria-hidden="true"></div>
              <div class="media__header">
                <span class="media__title-sub">Point 02</span>
                <h3 class="media__title-main">実力に見合った評価と、<br>適正な報酬。</h3>
                <p class="media__description">
                  「大手企業レベルの仕事をこなしているのに、給与が見合っていない」。そんな違和感を抱えているIT人材の実力を、私たちは正当に評価し、実力と成果に応じた適正な報酬を実現しています。</p>
              </div>
              <div class="media__visual visual-stack">
                <figure class="visual-stack__main">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about03.webp"
                    alt="オフィスでメモを手に話をするスーツ姿の女性。対面には同僚が座っている" width="370" height="266" loading="lazy" decoding="async" />
                </figure>
                <figure class="visual-stack__sub visual-stack__sub--small">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about04.webp"
                    alt="自然光の差し込む室内でパソコンを操作する男性" width="143" height="173" loading="lazy" decoding="async" />
                </figure>
              </div>
            </div>
          </li>
          <li class="about__list-item media">
            <div class="media__wrapper js-fadeIn">
              <!-- 波状のあしらい -->
              <div class="media__bg bg-image bg-image--about" aria-hidden="true"></div>
              <div class="media__header">
                <span class="media__title-sub">Point 03</span>
                <h3 class="media__title-main">IT人材の一人ひとりが、<br>幅広い業務を担当。</h3>
                <p class="media__description">
                  営業から構築、運用・保守まで。一人のIT人材が持つ可能性は無限大です。私たちは、従来の分業制にとらわれず、幅広いスキルを持つマルチプレイヤーとして活躍できる環境を用意しています。</p>
              </div>
              <div class="media__visual visual-stack">
                <figure class="visual-stack__main">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about05.webp"
                    alt="ヘッドセットをつけた女性スタッフが笑顔で対応している写真" width="397" height="266" loading="lazy" decoding="async" />
                </figure>
                <figure class="visual-stack__sub">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about06.webp"
                    alt="サーバールームでノートパソコンを操作しながら配線を点検する男性の写真" width="220" height="173" loading="lazy" decoding="async" />
                </figure>
              </div>
            </div>
          </li>
          <li class="about__list-item media media--reverse">
            <div class="media__wrapper js-fadeIn">
              <!-- 波状のあしらい -->
              <div class="media__bg bg-image bg-image--about" aria-hidden="true"></div>
              <div class="media__header">
                <span class="media__title-sub">Point 04</span>
                <h3 class="media__title-main">経営陣も、<br class="u-desktop">IT人材として稼働。</h3>
                <p class="media__description">
                  経営層も、従業員と隔たりなくIT人材として稼働しています。経営判断と実務を両立し、従業員と同じ目線で課題解決に向き合い、スピーディーな意思決定と風通しのよい組織づくりを実現しています。</p>
              </div>
              <div class="media__visual visual-stack">
                <figure class="visual-stack__main">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about07.webp"
                    alt="デスクで真剣な表情でモニターを見るスーツ姿の男性の写真" width="370" height="266" loading="lazy" decoding="async" />
                </figure>
                <figure class="visual-stack__sub visual-stack__sub--large">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about08.webp"
                    alt="男女12人のオフィスでの集合写真" width="264" height="173" loading="lazy" decoding="async" />
                </figure>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- サービスセクション -->
  <section class="services layout-services">
    <div class="services__slider-wrapper">
      <div class="services__slider js-services-slider">
        <div class="swiper-wrapper">
          <figure class="swiper-slide services__slide">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/services_slider01.webp"
              alt="観葉植物のあるオフィスで笑顔の男性社員" width="608" height="493" loading="lazy" decoding="async">
          </figure>
          <figure class="swiper-slide services__slide">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/services_slider02.webp"
              alt="企業の受付ロビー。MAYA GROUPのロゴが壁に掲げられている写真" width="608" height="493" loading="lazy" decoding="async">
          </figure>
          <figure class="swiper-slide services__slide">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/services_slider03.webp"
              alt="オフィスでホワイトボードを使いながら説明する女性社員と、それを聞く男性社員の写真" width="608" height="493" loading="lazy" decoding="async">
          </figure>
          <figure class="swiper-slide services__slide">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/services_slider04.webp"
              alt="オフィスの壁面に掲げられたMAYA GROUPの理念やスローガンの写真" width="608" height="493" loading="lazy" decoding="async">
          </figure>
          <figure class="swiper-slide services__slide">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/services_slider05.webp"
              alt="オフィスの受付で並ぶ4人の社員。スーツ姿でカメラを見ている写真" width="608" height="493" loading="lazy" decoding="async">
          </figure>
          <figure class="swiper-slide services__slide">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/services_slider01.webp"
              alt="観葉植物のあるオフィスで笑顔の男性社員" width="608" height="493" loading="lazy" decoding="async">
          </figure>
          <figure class="swiper-slide services__slide">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/services_slider02.webp"
              alt="企業の受付ロビー。MAYA GROUPのロゴが壁に掲げられている写真" width="608" height="493" loading="lazy" decoding="async">
          </figure>
          <figure class="swiper-slide services__slide">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/services_slider03.webp"
              alt="オフィスでホワイトボードを使いながら説明する女性社員と、それを聞く男性社員の写真" width="608" height="493" loading="lazy" decoding="async">
          </figure>
          <figure class="swiper-slide services__slide">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/services_slider04.webp"
              alt="オフィスの壁面に掲げられたMAYA GROUPの理念やスローガンの写真" width="608" height="493" loading="lazy" decoding="async">
          </figure>
          <figure class="swiper-slide services__slide">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/services_slider05.webp"
              alt="オフィスの受付で並ぶ4人の社員。スーツ姿でカメラを見ている写真" width="608" height="493" loading="lazy" decoding="async">
          </figure>
        </div>
      </div>
    </div>

    <div class="services__bg-wrapper">
      <div class="services__inner inner">
        <span id="services" class="services__anchor" aria-hidden="true"></span>
        <div class="services__header">
          <h2 class="services__title section-title">
            <span class="section-title__jp">事業紹介</span>
            <span class="section-title__en">services</span>
          </h2>
          <p class="services__text">通信キャリアが提供するソリューションサービスの営業・構築・運用・保守を対応しています。</p>
        </div>
        <ul class="services__list-items">
          <li class="services__list-item  js-fadeIn">
            <!-- 背景画像 -->
            <div class="services__bg bg-image bg-image--filter bg-image--communication"></div>
            <article class="services__media media">
              <div class="media__wrapper">
                <div class="media__header">
                  <div class="media__title-sub">オフィスと人をつなぐ</div>
                  <h3 class="media__title-main">音声・映像<br>コミュニケーション</h3>
                  <p class="media__description">
                    ビジネスフォンやクラウドPBXによる内線システムから、コールセンターシステム、Web会議まで。企業の音声・映像コミュニケーション環境を構築し、多様な働き方に対応する、最適な環境づくりをサポートします。
                  </p>
                </div>
                <div class="media__visual visual-stack">
                  <figure class="visual-stack__main">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/services01.webp"
                      alt="モニターに映るデータを背景に、作業をする女性エンジニア" width="546" height="374" loading="lazy" decoding="async" />
                  </figure>
                  <figure class="visual-stack__sub">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/services02.webp"
                      alt="複数のモニターに映し出された情報や映像が並ぶデジタルウォール" width="246" height="165" loading="lazy" decoding="async" />
                  </figure>
                </div>
              </div>
              <div class="media__features js-fadeIn">
                <ul class="media__list-items">
                  <li class="media__list-item">
                    <div class="media__feature feature">
                      <figure class="feature__icon">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon_communication01.webp"
                          alt="受話器のアイコン" width="54" height="54" loading="lazy" decoding="async">
                      </figure>
                      <div class="feature__title">IP電話・固定電話・内線電話</div>
                      <p class="feature__text">
                        法人向け光IP電話、市外局番から始まる固定電話、内線システム、外線発着信ができるクラウドPBXなど
                      </p>
                    </div>
                  </li>
                  <li class="media__list-item">
                    <div class="media__feature feature">
                      <figure class="feature__icon">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon_communication02.webp"
                          alt="コールセンターやサポート対応を表すヘッドセットとチャットのアイコン" width="54" height="54" loading="lazy"
                          decoding="async">
                      </figure>
                      <div class="feature__title">コールセンター・IVR</div>
                      <p class="feature__text">
                        コールセンター内システム、在宅コールセンター設備、電話自動応答(IVR)サービス、AI電話サービスなど
                      </p>
                    </div>
                  </li>
                  <li class="media__list-item">
                    <div class="media__feature feature">
                      <figure class="feature__icon">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon_communication03.webp"
                          alt="通信機能を象徴する携帯電話のアイコン" width="54" height="54" loading="lazy" decoding="async">
                      </figure>
                      <div class="feature__title">音声・固定電話(FMC)</div>
                      <p class="feature__text">
                        着信転送、拠点新設、スマートフォン内線化、通話録音サービスなど
                      </p>
                    </div>
                  </li>
                  <li class="media__list-item">
                    <div class="media__feature feature">
                      <figure class="feature__icon">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon_communication04.webp"
                          alt="ビデオ会議やオンラインミーティングを表すカメラのアイコン" width="54" height="54" loading="lazy" decoding="async">
                      </figure>
                      <div class="feature__title">Web会議・電話会議</div>
                      <p class="feature__text">
                        Web会議環境、クラウド型会議サービス、電話会議環境（ボイスミーティング）、オンラインワークスペース、dXオンライン営業など
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </article>
          </li>

          <li class="services__list-item">
            <!-- 背景画像 -->
            <div class="services__bg bg-image bg-image--filter bg-image--network"></div>
            <article class="services__media media media--reverse">
              <div class="media__wrapper">
                <div class="media__header js-fadeIn">
                  <div class="media__title-sub">ビジネスを支える基盤</div>
                  <h3 class="media__title-main">ITネットワーク<br>インフラ構築</h3>
                  <p class="media__description">
                    社内LANやWANの設計から、クラウド環境の導入まで、企業のITインフラを包括的に構築。ルーターやスイッチの設置、SaaS導入支援、遠隔監視システムなど、強固なセキュリティも含め、事業規模に応じた最適なネットワーク環境を提供します。
                  </p>
                </div>
                <div class="media__visual visual-stack">
                  <figure class="visual-stack__main">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/services03.webp"
                      alt="サーバールームでノートパソコンを操作する男性エンジニア" width="546" height="374" loading="lazy" decoding="async" />
                  </figure>
                  <figure class="visual-stack__sub">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/services04.webp"
                      alt="サーバーラック内部のケーブルと基盤のクローズアップ" width="246" height="165" loading="lazy" decoding="async" />
                  </figure>
                </div>
              </div>
              <div class="media__features js-fadeIn">
                <ul class="media__list-items">
                  <li class="media__list-item">
                    <div class="media__feature feature">
                      <figure class="feature__icon">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon_network01.webp"
                          alt="受話器のアイコン" width="54" height="54" loading="lazy" decoding="async">
                      </figure>
                      <div class="feature__title">インターネット・Wi-Fi</div>
                      <p class="feature__text">
                        法人向け高速・高品質ネットワーク環境、Wi-Fi設備など
                      </p>
                    </div>
                  </li>
                  <li class="media__list-item">
                    <div class="media__feature feature">
                      <figure class="feature__icon">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon_network02.webp"
                          alt="受話器のアイコン" width="54" height="54" loading="lazy" decoding="async">
                      </figure>
                      <div class="feature__title">社内LAN・VPN</div>
                      <p class="feature__text">
                        社内LANソリューション、拠点間を結ぶインターネットVPNなど
                      </p>
                    </div>
                  </li>
                  <li class="media__list-item">
                    <div class="media__feature feature">
                      <figure class="feature__icon">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon_network03.webp"
                          alt="受話器のアイコン" width="54" height="54" loading="lazy" decoding="async">
                      </figure>
                      <div class="feature__title">クラウド・データセンターインターコネクト（IaaS）</div>
                      <p class="feature__text">
                        プラットフォームのクラウド移行、占有型・共有型のクラウド / サーバーシステム、データセンターサービス、クラウド接続ソリューションなど
                      </p>
                    </div>
                  </li>
                  <li class="media__list-item">
                    <div class="media__feature feature">
                      <figure class="feature__icon">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon_network04.webp"
                          alt="受話器のアイコン" width="54" height="54" loading="lazy" decoding="async">
                      </figure>
                      <div class="feature__title">グループウェア / メール・ストレージ&emsp;ホスティング（SaaS）</div>
                      <p class="feature__text">
                        クラウド型グループウェア、サイバー攻撃への対策に有効なセキュリティ環境構築など
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </article>
          </li>

          <li class="services__list-item">
            <!-- 背景画像 -->
            <div class="services__bg bg-image bg-image--filter bg-image--software"></div>
            <article class="services__media media">
              <div class="media__wrapper">
                <div class="media__header js-fadeIn">
                  <div class="media__title-sub">企業の成長を加速させる技術</div>
                  <h3 class="media__title-main">システム<br>ソフトウェア開発</h3>
                  <p class="media__description">
                    働き方改革からバックオフィス業務まで、企業のさまざまな課題に対応するシステムを開発。テレワーク環境の整備や業務効率化、社内コミュニケーションの活性化など、新しい働き方を実現するシステムを提供します。
                  </p>
                </div>
                <div class="media__visual visual-stack">
                  <figure class="visual-stack__main">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/services05.webp"
                      alt="オフィスでデータ分析を行う女性エンジニア。グラフやチャートを表示したモニターを見ながら業務に集中している" width="546" height="374" loading="lazy"
                      decoding="async" />
                  </figure>
                  <figure class="visual-stack__sub">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/services06.webp"
                      alt="タブレットを使って業務データを分析するビジネスパーソン。グラフやチャートを活用し生産性向上に取り組んでいる" width="246" height="165"
                      loading="lazy" decoding="async" />
                  </figure>
                </div>
              </div>
              <div class="media__features js-fadeIn">
                <ul class="media__list-items">
                  <li class="media__list-item">
                    <div class="media__feature feature">
                      <figure class="feature__icon">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon_software01.webp"
                          alt="受話器のアイコン" width="54" height="54" loading="lazy" decoding="async">
                      </figure>
                      <div class="feature__title">AI</div>
                      <p class="feature__text">
                        生成AIソリューション導入、AI無人対応、AI空調制御クラウドなど
                      </p>
                    </div>
                  </li>
                  <li class="media__list-item">
                    <div class="media__feature feature">
                      <figure class="feature__icon">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon_software02.webp"
                          alt="受話器のアイコン" width="54" height="54" loading="lazy" decoding="async">
                      </figure>
                      <div class="feature__title">業務支援</div>
                      <p class="feature__text">
                        働き方改革関連ソリューション、勤怠管理システム、業務報告 / 電子申請ソリューションなど
                      </p>
                    </div>
                  </li>
                  <li class="media__list-item">
                    <div class="media__feature feature">
                      <figure class="feature__icon">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon_software03.webp"
                          alt="受話器のアイコン" width="54" height="54" loading="lazy" decoding="async">
                      </figure>
                      <div class="feature__title">マーケティング</div>
                      <p class="feature__text">
                        デジタルマーケティング、プロモーション / 集客、リサーチ / 分析、Web電話帳 / 名刺管理ソリューションなど
                      </p>
                    </div>
                  </li>
                  <li class="media__list-item">
                    <div class="media__feature feature">
                      <figure class="feature__icon">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon_software04.webp"
                          alt="受話器のアイコン" width="54" height="54" loading="lazy" decoding="async">
                      </figure>
                      <div class="feature__title">災害対策・BCP</div>
                      <p class="feature__text">
                        衛星ブロードバンドインターネットサービス、無線 / 衛星電話サービスなど
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </article>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- メッセージセクション -->
  <section class="message layout-message">
    <!-- アーチ状の背景 -->
    <div class="message__curve bg-curve" aria-hidden="true"></div>
    <span id="message" class="message__anchor" aria-hidden="true"></span>
    <div class="message__inner inner">
      <?php if (have_posts()):
        while (have_posts()):
          the_post(); ?>
      <div class="message__header">
        <!-- 波状のあしらい -->
        <div class="message__bg bg-image bg-image--color-wave" aria-hidden="true"></div>
        <h2 class="message__title section-title ">
          <span class="section-title__jp">トップメッセージ</span>
          <span class="section-title__en">message</span>
        </h2>
      </div>
      <div class="message__wrapper">
        <?php $image = get_field('image_president'); ?>
        <?php if ($image): ?>
        <figure class="message__image">
          <?php echo wp_get_attachment_image(
                  $image['ID'],
                  'full',
                  false,
                  [
                    'loading'  => 'lazy',
                    'decoding' => 'async',
                    'width'    => 471,
                    'height'   => 508,
                    'alt'      => esc_attr($image['alt'] ?: '代表取締役社長の写真'),
                  ]
                ); ?>
        </figure>
        <?php endif; ?>
        <div class="message__content">
          <h3 class="message__sub-title">
            <span class="message__message">私たちが目指す<span class="message__punct">、</span></span><br>
            <span class="message__message">新しいエンジニアリングの形<span class="message__punct">。</span></span>
          </h3>
          <p class="message__text">
            私自身がIT人材として、数多くの現場で経験を重ねてきました。
            働く中で「こんな会社があったら」という思いを抱いたことが、マヤエンジニアリング創業の原点です。<br>
            <br>
            従来のSES企業では、大手企業レベルの仕事をこなしていても、その実力に見合った評価・給与を得られないことが少なくありません。また、キャリアパスも限定的でした。<br>
            <br>
            そこで私が目指したのは、IT人材の実力が正当に評価され、自らの「働く目的」をもっとも大切にしつつ、キャリアを築ける会社です。<br>
            <br>
            派遣社員として自由に案件を選びたい方、正社員として会社の成長に貢献したい方、ライフスタイルに合わせて働き方を変えたい方。それぞれの意思と働く目的を尊重し、一人ひとりにとって最適な働き方を提供しています。<br>
            <br>
            また、「業界の常識にとらわれず、IT人材が持つ本来の可能性を引き出し、働きを最大限に評価する。」という理念のもと、新しい企業の形を追求してきました。<br>
            <br>
            この理念は、お客様へのサービス提供においても大きな強みとなっています。当社のIT人材は、技術力だけでなく、ビジネス視点での課題把握や提案力も備えています。経営層を含めた全員がプレイヤーで居続けることにより、お客様の課題に対してより包括的なソリューションを提供することが可能です。<br>
            <br>
            大手通信キャリア様をはじめとする多くのお客様からいただいている信頼は、このような高い技術力とマルチな対応力を持つ社員たち一人ひとりの努力の結晶です。そして同時に、私たちを支えていただいているお客様のご期待とご支援の賜物でもあります。<br>
            <br>
            心より感謝申し上げます。これからも私たちは、技術者の可能性を最大限に活かし、お客様により良いサービスを提供できる企業であり続けます。そして、マヤエンジニアリングの理念に共感し、共に成長していける仲間との出会いを、心待ちにしています。
          </p>
          <p class="message__name">代表取締役社長&emsp;<?php the_field('name_president'); ?></p>
        </div>
      </div>
      <?php endwhile;
      endif; ?>
    </div>
  </section>

  <!-- コーポレートセクション -->
  <section class="corporate layout-corporate">
    <span id="corporate" class="corporate__anchor" aria-hidden="true"></span>
    <div class="corporate__inner inner">
      <?php if (have_posts()):
        while (have_posts()):
          the_post(); ?>
      <div class="corporate__header">
        <h2 class="corporate__title section-title">
          <span class="section-title__jp">会社概要</span>
          <span class="section-title__en">corporate</span>
        </h2>
      </div>
      <dl class="corporate__list-items">
        <div class="corporate__list-item">
          <dt>会社名</dt>
          <dd>株式会社MAYAエンジニアリング</dd>
        </div>
        <div class="corporate__list-item">
          <dt>本社所在地</dt>
          <dd>&#12306;<?php the_field('company_zip_code'); ?><br>
            <?php the_field('company_address'); ?><?php the_field('company_building'); ?>
          </dd>
        </div>
        <div class="corporate__list-item">
          <dt>設立</dt>
          <dd>1989年3月23日</dd>
        </div>
        <div class="corporate__list-item">
          <dt>株主変更に伴う商号変更</dt>
          <dd>2019年4月1日</dd>
        </div>
        <div class="corporate__list-item">
          <dt>代表者</dt>
          <dd> 代表取締役&emsp;<?php the_field('name_president'); ?>
          </dd>
        </div>
        <div class="corporate__list-item">
          <dt>資本金</dt>
          <dd>25,000,000円</dd>
        </div>
        <div class="corporate__list-item">
          <dt>事業内容</dt>
          <dd><?php the_field('business_details'); ?></dd>
        </div>
        <div class="corporate__list-item">
          <dt>会社資格</dt>
          <dd>
            <?php the_field('company_certifications'); ?>
          </dd>
        </div>
        <div class="corporate__list-item">
          <dt class="corporate__list-term">親会社</dt>
          <dd class="corporate__list-definition">
            <?php the_field('list_group_company'); ?>
          </dd>
        </div>
      </dl>
      <?php endwhile;
      endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>