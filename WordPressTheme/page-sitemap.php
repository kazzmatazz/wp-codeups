<?php get_header(); ?>

  <main>
    <!-- メインビュー -->
    <div class="site-map-mv sub-mv">
      <div class="sub-mv__inner">
        <div class="sub-mv__title">
          <h1 class="sub-mv__title-main">Site MAP</h1>
        </div>
      </div>
    </div>
    <!-- パンくず -->
    <?php  get_template_part('parts/breadcrumb'); ?>
    <!-- サイトマップ -->
    <section class="site-map blog-list-layout fish-icon">
      <div class="site-map__inner inner">
        <div class="site-map__container">
          <div class="site-map__left">
            <ul class="site-map__items">
              <li class="site-map__item menu">
                <a href="#" class="menu__title menu__title--site">キャンペーン</a>
                <a href="#" class="menu__link menu__link--site">ライセンス取得</a>
                <a href="#" class="menu__link menu__link--site">貸切体験ダイビング</a>
                <a href="#" class="menu__link menu__link--site">ナイトダイビング</a>
              </li>
              <li class="site-map__item menu">
                <a href="#" class="menu__title menu__title--site">私たちについて</a>
              </li>
            </ul>
            <ul class="site-map__items">
              <li class="site-map__item menu">
                <a href="#" class="menu__title menu__title--site">ダイビング情報</a>
                <a href="#" class="menu__link menu__link--site">ライセンス講習</a>
                <a href="#" class="menu__link menu__link--site">体験ダイビング</a>
                <a href="#" class="menu__link menu__link--site">ファンダイビング</a>
              </li>
              <li class="site-map__item menu">
                <a href="#" class="menu__title menu__title--site">ブログ</a>
              </li>
            </ul>
          </div>
          <div class="site-map__right">
            <ul class="site-map__items">
              <li class="site-map__item menu">
                <a href="#" class="menu__title menu__title--site">お客様の声</a>
              </li>
              <li class="site-map__item menu">
                <a href="#" class="menu__title menu__title--site">料金一覧</a>
                <a href="#" class="menu__link menu__link--site">ライセンス講習</a>
                <a href="#" class="menu__link menu__link--site">体験ダイビング</a>
                <a href="#" class="menu__link menu__link--site">ファンダイビング</a>
              </li>
            </ul>
            <ul class="site-map__items">
              <li class="site-map__item menu">
                <a href="#" class="menu__title menu__title--site">よくある質問</a>
              </li>
              <li class="site-map__item menu">
                <a href="#" class="menu__title menu__title--site">プライバシー<br class="u-mobile">ポリシー</a>
              </li>
              <li class="site-map__item menu">
                <a href="#" class="menu__title menu__title--site">利用規約</a>
              </li>
              <li class="site-map__item menu">
                <a href="#" class="menu__title menu__title--site">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- コンタクト -->
    <div class="top-contact top-contact-layout">
      <div class="top-contact__inner inner">
        <div class="top-contact__container">
          <div class="top-contact__flex">
            <div class="top-contact__contents">
              <div class="top-contact__title">
                <img class="top-contact__logo" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/codeups-logo2.svg" alt="ロゴ">
              </div>
              <div class="top-contact__content">
                <div class="top-contact__info">
                  <p class="top-contact__info-text">沖縄県那覇市1-1</p>
                  <p class="top-contact__info-text">TEL:0120-000-0000</p>
                  <p class="top-contact__info-text">営業時間:8:30-19:00</p>
                  <p class="top-contact__info-text">定休日:毎週火曜日</p>
                </div>
                <div class="top-contact__map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.992189400534!2d127.68828337607235!3d26.22944332706094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e56bd0b4a42ff1%3A0x36812e0e598f7d6b!2z44CSOTAwLTAwMDUg5rKW57iE55yM6YKj6KaH5biC5aSp5LmF77yR5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1698563889471!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
            <div class="top-contact__contact">
              <div class="top-contact__heading section-heading section-heading--wide">
                <h2 class="section-heading__main">Contact</h2>
                <p class="section-heading__sub">お問い合わせ</p>
                <div class="top-contact__text">ご予約・お問い合わせはコチラ</div>
              </div>
              <div class="top-contact__button">
                <a href="#" class="button"><span>Contact us</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>