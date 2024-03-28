<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- <meta name="robots" content="noindex" /> -->
  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo"><a href="https://my-first-port.com/"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/codeups-logo1.svg" alt="ヘッダーロゴ"></a></h1>
      <nav class="header__nav u-desktop">
        <ul class="header__items">
          <li class="header__item">
            <a href="./campaign.html">Campaign<span>キャンペーン</span></a>
          </li>
          <li class="header__item">
            <a href="./about.html">About us<span>私たちについて</span></a>
          </li>
          <li class="header__item">
            <a href="./information.html">Information<span>ダイビング情報</span></a>
          </li>
          <li class="header__item">
            <a href="./blog.html">Blog<span>ブログ</span></a>
          </li>
          <li class="header__item">
            <a href="./voice.html">Voice<span>お客様の声</span></a>
          </li>
          <li class="header__item">
            <a href="./price.html">Price<span>料金一覧</span></a>
          </li>
          <li class="header__item">
            <a href="./faq.html">FAQ<span>よくある質問</span></a>
          </li>
          <li class="header__item">
            <a href="./contact.html">Contact<span>お問い合わせ</span></a>
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
              <a href="./campaign.html" class="menu__title">キャンペーン</a>
              <a href="./campaign.html#campaign1" class="menu__link">ライセンス取得</a>
              <a href="./campaign.html#campaign2" class="menu__link">貸切体験ダイビング</a>
              <a href="./campaign.html#campaign3" class="menu__link">ナイトダイビング</a>
            </li>
            <li class="drawer-menu__item menu">
              <a href="./about.html" class="menu__title">私たちについて</a>
            </li>
            <li class="drawer-menu__item menu">
              <a href="./information.html" class="menu__title">ダイビング情報</a>
              <a href="./information.html#information1" class="menu__link">ライセンス講習</a>
              <a href="./information.html#information2" class="menu__link">体験ダイビング</a>
              <a href="./information.html#information3" class="menu__link">ファンダイビング</a>
            </li>
            <li class="drawer-menu__item menu">
              <a href="./blog.html" class="menu__title">ブログ</a>
            </li>
          </ul>
        </div>
        <div class="drawer-menu__right">
          <ul class="drawer-menu__items">
            <li class="drawer-menu__item menu">
              <a href="./voice.html" class="menu__title">お客様の声</a>
            </li>
            <li class="drawer-menu__item menu">
              <a href="./price.html" class="menu__title">料金一覧</a>
              <a href="./price.html#price1" class="menu__link">ライセンス講習</a>
              <a href="./price.html#price2" class="menu__link">体験ダイビング</a>
              <a href="./price.html#price3" class="menu__link">ファンダイビング</a>
            </li>
            <li class="drawer-menu__item menu">
              <a href="./faq.html" class="menu__title">よくある質問</a>
            </li>
            <li class="drawer-menu__item menu">
              <a href="./privacy-policy.html" class="menu__title">プライバシー<br>ポリシー</a>
            </li>
            <li class="drawer-menu__item menu">
              <a href="./terms-of-service.html" class="menu__title">利用規約</a>
            </li>
            <li class="drawer-menu__item menu">
              <a href="./contact.html" class="menu__title">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>