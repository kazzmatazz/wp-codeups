<?php get_header(); ?>

  <main>
    <!-- メインビュー -->
    <div class="top-mv">
      <div class="top-mv__inner">
        <div class="top-mv__slider swiper js-mv-swiper">
          <div class="swiper-wrapper">
              <?php
              // 'mv_image_group'から全てのグループデータを取得
              $mv_image_groups = SCF::get('mv_image_group');
              if (!empty($mv_image_groups)) {
                  foreach ($mv_image_groups as $mv_image_group) {
                      $pc_image_id = $mv_image_group['mv_pc_image'];
                      $sp_image_id = $mv_image_group['mv_sp_image'];
                      $alt_text = $mv_image_group['mv_text'];

                      $pc_image_url = wp_get_attachment_image_url($pc_image_id, 'full');
                      $sp_image_url = wp_get_attachment_image_url($sp_image_id, 'full');
                      ?>
                      <div class="swiper-slide">
                          <picture>
                              <source srcset="<?php echo esc_url($pc_image_url); ?>" media="(min-width: 768px)">
                              <img src="<?php echo esc_url($sp_image_url); ?>" alt="<?php echo esc_attr($alt_text); ?>">
                          </picture>
                      </div>
                      <?php
                  }
              }
              ?>
          </div>
          <div class="top-mv__title">
              <p class="top-mv__title-main">DIVING</p>
              <p class="top-mv__title-sub">into the ocean</p>
          </div>
        </div>
      </div>
    </div>
    <!-- キャンペーン -->
    <section class="top-campaign top-campaign-layout">
      <div class="top-campaign__inner inner">
        <div class="top-campaign__heading section-heading">
          <h2 class="section-heading__main">Campaign</h2>
          <p class="section-heading__sub">キャンペーン</p>
        </div>
        <div class="top-campaign__slider swiper js-campaign-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="top-campaign__content campaign-card">
                <div class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-campaign-img1.jpg" alt="海の中にいる小魚たち">
                </div>
                <div class="campaign-card__body">
                  <span class="campaign-card__category category">ライセンス講習</span>
                  <h3 class="campaign-card__title">ライセンス取得</h3>
                  <div class="campaign-card__wrap">
                    <p class="campaign-card__menu">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <p class="campaign-card__regular">¥56,000</p>
                      <p class="campaign-card__row">¥46,000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="top-campaign__content campaign-card">
                <div class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-campaign-img2.jpg" alt="島と船と海">
                </div>
                <div class="campaign-card__body">
                  <span class="campaign-card__category category">体験ダイビング</span>
                  <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                  <div class="campaign-card__wrap">
                    <p class="campaign-card__menu">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <p class="campaign-card__regular">¥24,000</p>
                      <p class="campaign-card__row">¥18,000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="top-campaign__content campaign-card">
                <div class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-campaign-img3.jpg" alt="海の中にいるクラゲたち">
                </div>
                <div class="campaign-card__body">
                  <span class="campaign-card__category category">体験ダイビング</span>
                  <h3 class="campaign-card__title">ナイトダイビング</h3>
                  <div class="campaign-card__wrap">
                    <p class="campaign-card__menu">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <p class="campaign-card__regular">¥10,000</p>
                      <p class="campaign-card__row">¥8,000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="top-campaign__content campaign-card">
                <div class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-campaign-img4.jpg" alt="海の上にいるダイバーたち">
                </div>
                <div class="campaign-card__body">
                  <span class="campaign-card__category category">ファンダイビング</span>
                  <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                  <div class="campaign-card__wrap">
                    <p class="campaign-card__menu">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <p class="campaign-card__regular">¥20,000</p>
                      <p class="campaign-card__row">¥16,000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ループ用スライド -->
            <div class="swiper-slide">
              <div class="top-campaign__content campaign-card">
                <div class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-campaign-img1.jpg" alt="海の中にいる小魚たち">
                </div>
                <div class="campaign-card__body">
                  <span class="campaign-card__category category">ライセンス講習</span>
                  <h3 class="campaign-card__title">ライセンス取得</h3>
                  <div class="campaign-card__wrap">
                    <p class="campaign-card__menu">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <p class="campaign-card__regular">¥56,000</p>
                      <p class="campaign-card__row">¥46,000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="top-campaign__content campaign-card">
                <div class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-campaign-img2.jpg" alt="島と船と海">
                </div>
                <div class="campaign-card__body">
                  <span class="campaign-card__category category">体験ダイビング</span>
                  <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                  <div class="campaign-card__wrap">
                    <p class="campaign-card__menu">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <p class="campaign-card__regular">¥24,000</p>
                      <p class="campaign-card__row">¥18,000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="top-campaign__content campaign-card">
                <div class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-campaign-img3.jpg" alt="海の中にいるクラゲたち">
                </div>
                <div class="campaign-card__body">
                  <span class="campaign-card__category category">体験ダイビング</span>
                  <h3 class="campaign-card__title">ナイトダイビング</h3>
                  <div class="campaign-card__wrap">
                    <p class="campaign-card__menu">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <p class="campaign-card__regular">¥10,000</p>
                      <p class="campaign-card__row">¥8,000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="top-campaign__content campaign-card">
                <div class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-campaign-img4.jpg" alt="海の上にいるダイバーたち">
                </div>
                <div class="campaign-card__body">
                  <span class="campaign-card__category category">ファンダイビング</span>
                  <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                  <div class="campaign-card__wrap">
                    <p class="campaign-card__menu">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <p class="campaign-card__regular">¥20,000</p>
                      <p class="campaign-card__row">¥16,000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-controller">
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <div class="top-campaign__button">
          <a href="" class="button"><span>View more</span></a>
        </div>
      </div>
    </section>
    <!-- アバウト -->
    <section class="top-about top-about-layout">
      <div class="top-about__inner inner">
        <div class="top-about__heading section-heading">
          <h2 class="section-heading__main">About us</h2>
          <p class="section-heading__sub">私たちについて</p>
        </div>
        <div class="top-about__container">
          <div class="top-about__images">
            <div class="top-about__img1">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-ocean-img1.jpg" alt="屋根の上にシーサーがいる">
            </div>
            <div class="top-about__img2">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-ocean-img2.jpg" alt="海の中にいる2匹の黄色い魚">
            </div>
          </div>
          <div class="top-about__content">
            <h3 class="top-about__title">Dive into<br>the Ocean</h3>
            <div class="top-about__body">
              <p class="top-about__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              <div class="top-about__button">
                <a href="" class="button"><span>View more</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- インフォメーション -->
    <section class="top-information top-information-layout">
      <div class="top-information__inner inner">
        <div class="top-information__heading section-heading">
          <h2 class="section-heading__main">Information</h2>
          <p class="section-heading__sub">ダイビング情報</p>
        </div>
        <div class="top-information__contents">
          <div class="top-information__img colorbox">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-ocean-img1.jpg" alt="海の中にいる珊瑚礁と魚たち">
          </div>
          <div class="top-information__body">
            <h3 class="top-information__title">ライセンス講習</h3>
            <p class="top-information__text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
            <div class="top-information__button">
              <a href="#" class="button"><span>View more</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ブログ -->
    <section class="top-blog top-blog-layout">
      <div class="top-blog__inner inner">
        <div class="top-blog__heading section-heading section-heading--white">
          <h2 class="section-heading__main">Blog</h2>
          <p class="section-heading__sub">ブログ</p>
        </div>
        <ul class="top-blog__items blog-cards">
          <li class="blog-cards__item blog-card">
            <a href="#" class="blog-card__link">
              <div class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-blog-img1.jpg" alt="サンゴ礁">
              </div>
              <div class="blog-card__body">
                <time datetime="2023-11-17" class="blog-card__date">2023/11/17</time>
                <h3 class="blog-card__title">ライセンス取得</h3>
                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </li>
          <li class="blog-cards__item blog-card">
            <a href="#" class="blog-card__link">
              <div class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-blog-img2.jpg" alt="ウミガメが泳いでいる様子">
              </div>
              <div class="blog-card__body">
                <time datetime="2023-11-17" class="blog-card__date">2023/11/17</time>
                <h3 class="blog-card__title">ウミガメと泳ぐ</h3>
                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </li>
          <li class="blog-cards__item blog-card">
            <a href="#" class="blog-card__link">
              <div class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-blog-img3.jpg" alt="クマノミ">
              </div>
              <div class="blog-card__body">
                <time datetime="2023-11-17" class="blog-card__date">2023/11/17</time>
                <h3 class="blog-card__title">カクレクマノミ</h3>
                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </li>
        </ul>
        <div class="top-blog__button">
          <a href="#" class="button"><span>View more</span></a>
        </div>
      </div>
    </section>
    <!-- ボイス -->
    <section class="top-voice top-voice-layout">
      <div class="top-voice__inner inner">
        <div class="top-voice__heading section-heading">
          <h2 class="section-heading__main">Voice</h2>
          <p class="section-heading__sub">お客様の声</p>
        </div>
        <ul class="top-voice__items voice-cards">
          <li class="voice-cards__item voice-card">
            <div class="voice-card__contents">
              <div class="voice-card__content">
                <div class="voice-card__meta">
                  <span class="voice-card__info">20代(女性)</span>
                  <span class="voice-card__category category">ライセンス講習</span>
                </div>
                <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
              </div>
              <div class="voice-card__img colorbox">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-voice-img1.jpg" alt="麦わら帽子をかぶった女性">
              </div>
            </div>
            <p class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</p>
          </li>
          <li class="voice-cards__item voice-card">
            <div class="voice-card__contents">
              <div class="voice-card__content">
                <div class="voice-card__meta">
                  <span class="voice-card__info">20代(男性)</span>
                  <span class="voice-card__category category">ファンダイビング</span>
                </div>
                <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
              </div>
              <div class="voice-card__img colorbox">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-voice-img2.jpg" alt="青い服を着た男性">
              </div>
            </div>
            <p class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</p>
          </li>
        </ul>
        <div class="top-voice__button">
          <a href="#" class="button"><span>View more</span></a>
        </div>
      </div>
    </section>
    <!-- プライス -->
    <section class="top-price top-price-layout">
      <div class="top-price__inner inner">
        <div class="top-price__heading section-heading">
          <h2 class="section-heading__main">Price</h2>
          <p class="section-heading__sub">料金一覧</p>
        </div>
        <div class="top-price__contents">
          <div class="top-price__img colorbox">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-price-img.jpg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-price-sp-img.jpg" alt="海を小魚が泳いでいる様子">
            </picture>
          </div>
          <ul class="top-price__items">
            <li class="top-price__item">
              <h3 class="top-price__title">ライセンス講習</h3>
              <dl class="top-price__container">
                <div class="top-price__info">
                  <dt class="top-price__menu">オープンウォーターダイバーコース</dt>
                  <dd class="top-price__price">¥50,000</dd>
                </div>
                <div class="top-price__info">
                  <dt class="top-price__menu">アドバンスドオープンウォーターコース</dt>
                  <dd class="top-price__price">¥60,000</dd>
                </div>
                <div class="top-price__info">
                  <dt class="top-price__menu">レスキュー＋EFRコース</dt>
                  <dd class="top-price__price">¥70,000</dd>
                </div>
              </dl>
            </li>
            <li class="top-price__item">
              <h3 class="top-price__title">体験ダイビング</h3>
              <dl class="top-price__container">
                <div class="top-price__info">
                  <dt class="top-price__menu">ビーチ体験ダイビング(半日)</dt>
                  <dd class="top-price__price">¥7,000</dd>
                </div>
                <div class="top-price__info">
                  <dt class="top-price__menu">ビーチ体験ダイビング(1日)</dt>
                  <dd class="top-price__price">¥14,000</dd>
                </div>
                <div class="top-price__info">
                  <dt class="top-price__menu">ボート体験ダイビング(半日)</dt>
                  <dd class="top-price__price">¥10,000</dd>
                </div>
                <div class="top-price__info">
                  <dt class="top-price__menu">ボート体験ダイビング(1日)</dt>
                  <dd class="top-price__price">¥18,000</dd>
                </div>
              </dl>
            </li>
            <li class="top-price__item">
              <h3 class="top-price__title">ファンダイビング</h3>
              <dl class="top-price__container">
                <div class="top-price__info">
                  <dt class="top-price__menu">ビーチダイビング(2ダイブ)</dt>
                  <dd class="top-price__price">¥14,000</dd>
                </div>
                <div class="top-price__info">
                  <dt class="top-price__menu">ボートダイビング(2ダイブ)</dt>
                  <dd class="top-price__price">¥18,000</dd>
                </div>
                <div class="top-price__info">
                  <dt class="top-price__menu">スペシャルダイビング(2ダイブ)</dt>
                  <dd class="top-price__price">¥24,000</dd>
                </div>
                <div class="top-price__info">
                  <dt class="top-price__menu">ナイトダイビング(1ダイブ)</dt>
                  <dd class="top-price__price">¥10,000</dd>
                </div>
              </dl>
            </li>
            <li class="top-price__item">
              <h3 class="top-price__title">スペシャルダイビング</h3>
              <dl class="top-price__container">
                <div class="top-price__info">
                  <dt class="top-price__menu">貸切ダイビング(2ダイブ)</dt>
                  <dd class="top-price__price">¥24,000</dd>
                </div>
                <div class="top-price__info">
                  <dt class="top-price__menu">1日ダイビング(3ダイブ)</dt>
                  <dd class="top-price__price">¥32,000</dd>
                </div>
              </dl>
            </li>
          </ul>
        </div>
        <div class="top-price__button">
          <a href="#" class="button"><span>View more</span></a>
        </div>
      </div>
    </section>
    <!-- コンタクト -->
    <section class="top-contact top-contact-layout">
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
    </section>
  </main>

<?php get_footer(); ?>