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

<footer class="footer footer-layout <?php if(is_404()){ echo 'footer-layout--none'; } ?>">
    <div class="footer__inner inner">
      <div class="footer__title">
        <div class="footer__name"><img class="footer__logo" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/codeups-logo1.svg" alt="フッターロゴ"></div>
        <div class="footer__sns">
          <a href="https://ja-jp.facebook.com" class="footer__sns-link"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facebook.svg" alt="フェイスブックロゴ"></a>
          <a href="https://www.instagram.com" class="footer__sns-link"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/instagram.svg" alt="インスタグラムロゴ"></a>
        </div>
      </div>
      <div class="footer__menu">
        <div class="footer__menu-left">
          <div class="footer__menu-flex">
            <ul class="footer__menu-items">
              <li class="footer__menu-item menu">
                <a href="<?php echo $campaign; ?>" class="menu__title">キャンペーン</a>
                <a href="<?php echo $campaign_category; ?>fun" class="menu__link">ファンダイビング</a>
                <a href="<?php echo $campaign_category; ?>license" class="menu__link">ライセンス講習</a>
                <a href="<?php echo $campaign_category; ?>experience" class="menu__link">体験ダイビング</a>
              </li>
              <li class="footer__menu-item menu">
                <a href="<?php echo $about; ?>" class="menu__title">私たちについて</a>
              </li>
            </ul>
          </div>
          <div class="footer__menu-flex">
            <ul class="footer__menu-items">
              <li class="footer__menu-item menu">
                <a href="<?php echo $information; ?>" class="menu__title">ダイビング情報</a>
                <a href="<?php echo $information; ?>?tab=information1" class="menu__link">ライセンス講習</a>
                <a href="<?php echo $information; ?>?tab=information2" class="menu__link">体験ダイビング</a>
                <a href="<?php echo $information; ?>?tab=information3" class="menu__link">ファンダイビング</a>
              </li>
              <li class="footer__menu-item menu">
                <a href="<?php echo $blog; ?>" class="menu__title">ブログ</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer__menu-right">
          <div class="footer__menu-flex">
            <ul class="footer__menu-items">
              <li class="footer__menu-item menu">
                <a href="<?php echo $voice; ?>" class="menu__title">お客様の声</a>
                <a href="<?php echo $voice_category; ?>fun" class="menu__link">ファンダイビング</a>
                <a href="<?php echo $voice_category; ?>license" class="menu__link">ライセンス講習</a>
                <a href="<?php echo $voice_category; ?>experience" class="menu__link">体験ダイビング</a>
              </li>
              <li class="footer__menu-item menu">
                <a href="<?php echo $price; ?>" class="menu__title">料金一覧</a>
                <a href="<?php echo $price; ?>#price1" class="menu__link">ライセンス講習</a>
                <a href="<?php echo $price; ?>#price2" class="menu__link">体験ダイビング</a>
                <a href="<?php echo $price; ?>#price3" class="menu__link">ファンダイビング</a>
                <a href="<?php echo $price; ?>#price4" class="menu__link">スペシャルダイビング</a>
              </li>
            </ul>
          </div>
          <div class="footer__menu-flex">
            <ul class="footer__menu-items">
              <li class="footer__menu-item menu">
                <a href="<?php echo $faq; ?>" class="menu__title">よくある質問</a>
              </li>
              <li class="footer__menu-item menu">
                <a href="<?php echo $privacy; ?>" class="menu__title">プライバシー<br class="u-mobile">ポリシー</a>
              </li>
              <li class="footer__menu-item menu">
                <a href="<?php echo $terms; ?>" class="menu__title">利用規約</a>
              </li>
              <li class="footer__menu-item menu">
                <a href="<?php echo $sitemap; ?>" class="menu__title">サイトマップ</a>
              </li>
              <li class="footer__menu-item menu">
                <a href="<?php echo $contact; ?>" class="menu__title">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer__copy">
        <p>Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.</p>
      </div>
    </div>
  </footer>
  <div class="page-top js-page-top"></div>
  <?php wp_footer(); ?>
</body>
</html>