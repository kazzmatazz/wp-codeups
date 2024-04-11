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

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="<?php echo $home; ?>">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/codeups-logo1.svg" alt="ヘッダーロゴ">
        </a>
      </h1>
      <nav class="header__nav u-desktop">
        <ul class="header__items">
          <li class="header__item">
            <a href="<?php echo $campaign; ?>" >Campaign<span>キャンペーン</span></a>
          </li>
          <li class="header__item">
            <a href="<?php echo $about; ?>" >About us<span>私たちについて</span></a>
          </li>
          <li class="header__item">
            <a href="<?php echo $information; ?>" >Information<span>ダイビング情報</span></a>
          </li>
          <li class="header__item">
            <a href="<?php echo $blog; ?>" >Blog<span>ブログ</span></a>
          </li>
          <li class="header__item">
            <a href="<?php echo $voice; ?>" >Voice<span>お客様の声</span></a>
          </li>
          <li class="header__item">
            <a  href="<?php echo $price; ?>" >Price<span>料金一覧</span></a>
          </li>
          <li class="header__item">
            <a  href="<?php echo $faq; ?>" >FAQ<span>よくある質問</span></a>
          </li>
          <li class="header__item">
            <a href="<?php echo $contact; ?>" >Contact<span>お問い合わせ</span></a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="header__hamburger hamburger js-hamburger u-mobile">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="header__drawer-menu drawer-menu js-drawer">
      <div class="drawer-menu__inner">
        <div class="drawer-menu__left">
          <ul class="drawer-menu__items">
            <li class="drawer-menu__item menu">
              <a href="<?php echo $campaign; ?>" class="menu__title">キャンペーン</a>
              <a href="<?php echo $campaign_category; ?>fun" class="menu__link">ファンダイビング</a>
              <a href="<?php echo $campaign_category; ?>license" class="menu__link">ライセンス講習</a>
              <a href="<?php echo $campaign_category; ?>experience" class="menu__link">体験ダイビング</a>
            </li>
            <li class="drawer-menu__item menu">
              <a href="<?php echo $about; ?>" class="menu__title">私たちについて</a>
            </li>
            <li class="drawer-menu__item menu">
              <a href="<?php echo $information; ?>" class="menu__title">ダイビング情報</a>
              <a href="<?php echo $information; ?>?tab=information1" class="menu__link">ライセンス講習</a>
              <a href="<?php echo $information; ?>?tab=information2" class="menu__link">体験ダイビング</a>
              <a href="<?php echo $information; ?>?tab=information3" class="menu__link">ファンダイビング</a>
            </li>
            <li class="drawer-menu__item menu">
              <a href="<?php echo $blog; ?>" class="menu__title">ブログ</a>
            </li>
          </ul>
        </div>
        <div class="drawer-menu__right">
          <ul class="drawer-menu__items">
            <li class="drawer-menu__item menu">
              <a href="<?php echo $voice; ?>" class="menu__title">お客様の声</a>
              <a href="<?php echo $voice_category; ?>fun" class="menu__link">ファンダイビング</a>
              <a href="<?php echo $voice_category; ?>license" class="menu__link">ライセンス講習</a>
              <a href="<?php echo $voice_category; ?>experience" class="menu__link">体験ダイビング</a>
            </li>
            <li class="drawer-menu__item menu">
              <a href="<?php echo $price; ?>" class="menu__title">料金一覧</a>
              <a href="<?php echo $price; ?>#price1" class="menu__link">ライセンス講習</a>
              <a href="<?php echo $price; ?>#price2" class="menu__link">体験ダイビング</a>
              <a href="<?php echo $price; ?>#price3" class="menu__link">ファンダイビング</a>
              <a href="<?php echo $price; ?>#price4" class="menu__link">スペシャルダイビング</a>
            </li>
            <li class="drawer-menu__item menu">
              <a href="<?php echo $faq; ?>" class="menu__title">よくある質問</a>
            </li>
            <li class="drawer-menu__item menu">
              <a href="<?php echo $privacy; ?>" class="menu__title">プライバシー<br>ポリシー</a>
            </li>
            <li class="drawer-menu__item menu">
              <a href="<?php echo $terms; ?>" class="menu__title">利用規約</a>
            </li>
            <li class="drawer-menu__item menu">
              <a href="<?php echo $sitemap; ?>" class="menu__title">サイトマップ</a>
            </li>
            <li class="drawer-menu__item menu">
              <a href="<?php echo $contact; ?>" class="menu__title">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>