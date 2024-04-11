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
    <?php get_template_part('parts/contact'); ?>
  </main>

<?php get_footer(); ?>