<footer class="footer footer-layout <?php if(is_404()){ echo 'footer-layout--none'; } ?>">
    <div class="footer__inner inner">
      <div class="footer__title">
        <div class="footer__name"><img class="footer__logo" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/codeups-logo1.svg" alt="フッターロゴ"></div>
        <div class="footer__sns">
          <a href="" class="footer__sns-link"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facebook.svg" alt="フェイスブックロゴ"></a>
          <a href="" class="footer__sns-link"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/instagram.svg" alt="インスタグラムロゴ"></a>
        </div>
      </div>
      <div class="footer__menu">
        <div class="footer__menu-left">
          <div class="footer__menu-flex">
            <ul class="footer__menu-items">
              <li class="footer__menu-item menu">
                <a href="./campaign.html" class="menu__title">キャンペーン</a>
                <a href="./campaign.html?tab=campaign1" class="menu__link">ライセンス取得</a>
                <a href="./campaign.html?tab=campaign2" class="menu__link">貸切体験ダイビング</a>
                <a href="./campaign.html?tab=campaign3" class="menu__link">ナイトダイビング</a>
              </li>
              <li class="footer__menu-item menu">
                <a href="./about.html" class="menu__title">私たちについて</a>
              </li>
            </ul>
          </div>
          <div class="footer__menu-flex">
            <ul class="footer__menu-items">
              <li class="footer__menu-item menu">
                <a href="./information.html" class="menu__title">ダイビング情報</a>
                <a href="./information.html?tab=information1" class="menu__link">ライセンス講習</a>
                <a href="./information.html?tab=information2" class="menu__link">体験ダイビング</a>
                <a href="./information.html?tab=information3" class="menu__link">ファンダイビング</a>
              </li>
              <li class="footer__menu-item menu">
                <a href="./blog.html" class="menu__title">ブログ</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer__menu-right">
          <div class="footer__menu-flex">
            <ul class="footer__menu-items">
              <li class="footer__menu-item menu">
                <a href="./voice.html" class="menu__title">お客様の声</a>
              </li>
              <li class="footer__menu-item menu">
                <a href="./price.html" class="menu__title">料金一覧</a>
                <a href="./price.html#price1" class="menu__link">ライセンス講習</a>
                <a href="./price.html#price2" class="menu__link">体験ダイビング</a>
                <a href="./price.html#price3" class="menu__link">ファンダイビング</a>
              </li>
            </ul>
          </div>
          <div class="footer__menu-flex">
            <ul class="footer__menu-items">
              <li class="footer__menu-item menu">
                <a href="./faq.html" class="menu__title">よくある質問</a>
              </li>
              <li class="footer__menu-item menu">
                <a href="./privacy-policy.html" class="menu__title">プライバシー<br class="u-mobile">ポリシー</a>
              </li>
              <li class="footer__menu-item menu">
                <a href="./terms-of-service.html" class="menu__title">利用規約</a>
              </li>
              <li class="footer__menu-item menu">
                <a href="./contact.html" class="menu__title">お問い合わせ</a>
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