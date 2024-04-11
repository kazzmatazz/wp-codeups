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
    <div class="top-mv">
      <div class="top-mv__inner">
        <div class="top-mv__slider swiper js-mv-swiper">
          <div class="swiper-wrapper">
              <?php
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
          <a href="<?php echo $campaign; ?>" class="button">
            <span class="button__text">
              View more
            </span>
          </a>
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
                <a href="<?php echo $about; ?>" class="button">
                  <span class="button__text">
                    View more
                  </span>
                </a>
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
              <a href="<?php echo $information; ?>" class="button">
                <span class="button__text">
                  View more
                </span>
              </a>
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
          <?php
          $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'orderby' => 'post_date',
            'order' => 'DESC',
          );
          $the_blog_query = new WP_Query($args);
          if ($the_blog_query->have_posts()) :
            while ($the_blog_query->have_posts()) : $the_blog_query->the_post();
          ?>
          <li class="blog-cards__item blog-card">
            <a href="<?php the_permalink(); ?>" class="blog-card__link">
              <div class="blog-card__img">
                <?php if (get_the_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title() ?>の画像">
                <?php else : ?>
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="noimage">
                <?php endif; ?>
              </div>
              <div class="blog-card__body">
                <time datetime="<?php the_time('c'); ?>" class="blog-card__date"><?php the_time('Y.m.d'); ?></time>
                <h3 class="blog-card__title"><?php the_title(); ?></h3>
                <p class="blog-card__text"><?php the_excerpt(); ?></p>
              </div>
            </a>
          </li>
          <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
        <div class="top-blog__button">
          <a href="<?php echo $blog; ?>" class="button">
            <span class="button__text">
              View more
            </span>
          </a>
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
          <a href="<?php echo $voice; ?>" class="button">
            <span class="button__text">
              View more
            </span>
          </a>
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
                <?php
                  $license_option_groups = SCF::get_option_meta('price_option', 'license');
                  if (!empty($license_option_groups)) {
                      foreach ($license_option_groups as $license_option) {
                          $license_course = $license_option['license_course'];
                          $license_price = $license_option['license_price'];
                          echo '<div class="top-price__info">';
                          echo '<dt class="top-price__menu">' . esc_html($license_course) . '</dt>';
                          echo '<dd class="top-price__price">' . esc_html($license_price) . '</dd>';
                          echo '</div>';
                    }
                  }
                ?>
              </dl>
            </li>
            <li class="top-price__item">
              <h3 class="top-price__title">体験ダイビング</h3>
              <dl class="top-price__container">
                <?php
                  $experience_option_groups = SCF::get_option_meta('price_option', 'experience');
                  if (!empty($experience_option_groups)) {
                      foreach ($experience_option_groups as $experience_option) {
                          $experience_course = $experience_option['experience_course'];
                          $experience_price = $experience_option['experience_price'];
                          echo '<div class="top-price__info">';
                          echo '<dt class="top-price__menu">' . esc_html($experience_course) . '</dt>';
                          echo '<dd class="top-price__price">' . esc_html($experience_price) . '</dd>';
                          echo '</div>';
                    }
                  }
                ?>
              </dl>
            </li>
            <li class="top-price__item">
              <h3 class="top-price__title">ファンダイビング</h3>
              <dl class="top-price__container">
                <?php
                  $fun_option_groups = SCF::get_option_meta('price_option', 'fun');
                  if (!empty($fun_option_groups)) {
                      foreach ($fun_option_groups as $fun_option) {
                          $fun_course = $fun_option['fun_course'];
                          $fun_price = $fun_option['fun_price'];
                          echo '<div class="top-price__info">';
                          echo '<dt class="top-price__menu">' . esc_html($fun_course) . '</dt>';
                          echo '<dd class="top-price__price">' . esc_html($fun_price) . '</dd>';
                          echo '</div>';
                    }
                  }
                ?>
              </dl>
            </li>
            <li class="top-price__item">
              <h3 class="top-price__title">スペシャルダイビング</h3>
              <dl class="top-price__container">
                <?php
                  $special_option_groups = SCF::get_option_meta('price_option', 'special');
                  if (!empty($special_option_groups)) {
                      foreach ($special_option_groups as $special_option) {
                          $special_course = $special_option['special_course'];
                          $special_price = $special_option['special_price'];
                          echo '<div class="top-price__info">';
                          echo '<dt class="top-price__menu">' . esc_html($special_course) . '</dt>';
                          echo '<dd class="top-price__price">' . esc_html($special_price) . '</dd>';
                          echo '</div>';
                    }
                  }
                ?>
              </dl>
            </li>
          </ul>
        </div>
        <div class="top-price__button">
          <a href="<?php echo $price; ?>" class="button">
            <span class="button__text">
              View more
            </span>
          </a>
        </div>
      </div>
    </section>
    <!-- コンタクト -->
    <?php get_template_part('parts/contact'); ?>
  </main>

<?php get_footer(); ?>