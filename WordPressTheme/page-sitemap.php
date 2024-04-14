<?php get_header(); ?>
<?php
$home = esc_url(home_url('/'));
$about = esc_url(home_url('/about-us/'));
$campaign = esc_url(home_url('/campaign/'));
$campaign_category = esc_url(home_url('/campaign_category/'));
$information = esc_url(home_url('/information/'));
$blog = esc_url(home_url('/blog/'));
$voice = esc_url(home_url('/voice/'));
$voice_category = esc_url(home_url('/voice_category/'));
$price = esc_url(home_url('/price/'));
$faq = esc_url(home_url('/faq/'));
$contact = esc_url(home_url('/contact/'));
$sitemap = esc_url(home_url('/sitemap/'));
$privacy = esc_url(home_url('/privacypolicy/'));
$terms = esc_url(home_url('/terms-of-service/'));
?>

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
                <a href="<?php echo $campaign; ?>" class="menu__title menu__title--site">キャンペーン</a>
                <a href="<?php echo $campaign_category; ?>fun" class="menu__link menu__link--site">ファンダイビング</a>
                <a href="<?php echo $campaign_category; ?>license" class="menu__link menu__link--site">ライセンス講習</a>
                <a href="<?php echo $campaign_category; ?>experience" class="menu__link menu__link--site">体験ダイビング</a>
              </li>
              <li class="site-map__item menu">
                <a href="<?php echo $about; ?>" class="menu__title menu__title--site">私たちについて</a>
              </li>
            </ul>
            <ul class="site-map__items">
              <li class="site-map__item menu">
                <a href="<?php echo $information; ?>" class="menu__title menu__title--site">ダイビング情報</a>
                <a href="<?php echo $information; ?>?tab=information1" class="menu__link menu__link--site">ライセンス講習</a>
                <a href="<?php echo $information; ?>?tab=information2" class="menu__link menu__link--site">体験ダイビング</a>
                <a href="<?php echo $information; ?>?tab=information3" class="menu__link menu__link--site">ファンダイビング</a>
              </li>
              <li class="site-map__item menu">
                <a href="<?php echo $blog; ?>" class="menu__title menu__title--site">ブログ</a>
              </li>
            </ul>
          </div>
          <div class="site-map__right">
            <ul class="site-map__items">
              <li class="site-map__item menu">
                <a href="<?php echo $voice; ?>" class="menu__title menu__title--site">お客様の声</a>
                <a href="<?php echo $voice_category; ?>fun" class="menu__link menu__link--site">ファンダイビング</a>
                <a href="<?php echo $voice_category; ?>license" class="menu__link menu__link--site">ライセンス講習</a>
                <a href="<?php echo $voice_category; ?>experience" class="menu__link menu__link--site">体験ダイビング</a>
              </li>
              <li class="site-map__item menu">
                <a href="<?php echo $price; ?>" class="menu__title menu__title--site">料金一覧</a>
                <a href="<?php echo $price; ?>#price1" class="menu__link menu__link--site">ライセンス講習</a>
                <a href="<?php echo $price; ?>#price2" class="menu__link menu__link--site">体験ダイビング</a>
                <a href="<?php echo $price; ?>#price3" class="menu__link menu__link--site">ファンダイビング</a>
                <a href="<?php echo $price; ?>#price4" class="menu__link menu__link--site">スペシャルダイビング</a>
              </li>
            </ul>
            <ul class="site-map__items">
              <li class="site-map__item menu">
                <a href="<?php echo $faq; ?>" class="menu__title menu__title--site">よくある質問</a>
              </li>
              <li class="site-map__item menu">
                <a href="<?php echo $privacy; ?>" class="menu__title menu__title--site">プライバシー<br class="u-mobile">ポリシー</a>
              </li>
              <li class="site-map__item menu">
                <a href="<?php echo $terms; ?>" class="menu__title menu__title--site">利用規約</a>
              </li>
              <li class="site-map__item menu">
                <a href="<?php echo $sitemap; ?>" class="menu__title menu__title--site">サイトマップ</a>
              </li>
              <li class="site-map__item menu">
                <a href="<?php echo $contact; ?>" class="menu__title menu__title--site">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- コンタクト -->
    <?php get_template_part('parts/contact'); ?>
  </main>

<?php get_footer(); ?>