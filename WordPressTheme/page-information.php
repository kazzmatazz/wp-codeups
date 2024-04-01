<?php get_header(); ?>

  <main>
    <!-- メインビュー -->
    <div class="information-mv sub-mv">
      <div class="sub-mv__inner">
        <div class="sub-mv__title">
          <h1 class="sub-mv__title-main">Information</h1>
        </div>
      </div>
    </div>
    <!-- パンくず -->
    <?php  get_template_part('parts/breadcrumb'); ?>
    <!-- ページ -->
    <section class="information-page information-page-layout">
      <div class="information-page__inner inner">
        <div class="information-page__contents">
          <ul class="information-page__menu tab-menu">
            <li data-tab="information1" class="tab-menu__item js-tab-menu is-active">ライセンス<br class="u-mobile">講習</li>
            <li data-tab="information2" class="tab-menu__item js-tab-menu">体験<br class="u-mobile">ダイビング</li>
            <li data-tab="information3" class="tab-menu__item js-tab-menu">ファン<br class="u-mobile">ダイビング</li>
          </ul>
          <ul class="information-page__content tab-content">
            <li class="tab-content__item js-tab-content is-active">
              <div class="tab-content__body">
                <h3 class="tab-content__title">ライセンス講習</h3>
                <p class="tab-content__text">泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！</p>
              </div>
              <div class="tab-content__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-page-img.jpg" alt="ダイビング講習を受けている様子">
              </div>
            </li>
            <li class="tab-content__item js-tab-content">
              <div class="tab-content__body">
                <h3 class="tab-content__title">体験ダイビング</h3>
                <p class="tab-content__text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
              </div>
              <div class="tab-content__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-gallery-img5.jpg" alt="数多くの白い魚が泳いでいる様子">
              </div>
            </li>
            <li class="tab-content__item js-tab-content">
              <div class="tab-content__body">
                <h3 class="tab-content__title">ファンダイビング</h3>
                <p class="tab-content__text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
              </div>
              <div class="tab-content__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-gallery-img3.jpg" alt="2匹の縞模様の魚が泳いでいる様子">
              </div>
            </li>
          </ul>
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