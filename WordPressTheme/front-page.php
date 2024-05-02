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
            <?php
            $args = array(
              'post_type' => 'campaign',
              'post_status' => 'publish',
              'posts_per_page' => -1,
              'orderby' => 'post_date',
              'order' => 'DESC',
            );
            $the_blog_query = new WP_Query($args);
            if ($the_blog_query->have_posts()) :
              while ($the_blog_query->have_posts()) : $the_blog_query->the_post();
            ?>
            <div class="swiper-slide">
              <div class="top-campaign__content campaign-card">
                <div class="campaign-card__img">
                  <?php if (get_the_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>の画像">
                  <?php else : ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="noimage">
                  <?php endif; ?>
                </div>
                <div class="campaign-card__body">
                  <span class="campaign-card__category category">
                    <?php
                    $terms = get_the_terms($post->ID, 'campaign_category');
                    if ($terms) {
                      echo $terms[0]->name;
                    }
                    ?>
                  </span>
                  <h3 class="campaign-card__title"><?php the_title(); ?></h3>
                  <div class="campaign-card__wrap">
                    <p class="campaign-card__menu">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <?php
                      $price_group = get_field('campaign_price-group');
                      if ($price_group) :
                          $original_price = $price_group['original_price'];
                          $discounted_price = $price_group['discounted_price'];
                          if ($original_price) :
                              ?><p class="campaign-card__regular"><?php echo $original_price; ?></p><?php
                          endif;
                          if ($discounted_price) :
                              ?><p class="campaign-card__row"><?php echo $discounted_price; ?></p><?php
                          endif;
                      endif;
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
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
              <p class="top-about__text">ダイビングショップの魅力あふれる世界を写真でお届けします。透明度の高い海で色とりどりのサンゴや熱帯魚が輝く様子や、笑顔あふれるスタッフが準備を整える様子を捉えました。プロのガイドとともに未知の海を探索し、冒険心を刺激します。</p>
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
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>の画像">
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
          <?php
          $args = array(
            'post_type' => 'voice',
            'post_status' => 'publish',
            'posts_per_page' => 2,
            'orderby' => 'post_date',
            'order' => 'DESC',
          );
          $the_view_query = new WP_Query($args);
          if ($the_view_query->have_posts()) :
            while ($the_view_query->have_posts()) : $the_view_query->the_post();
          ?>
          <li class="voice-cards__item voice-card">
            <div class="voice-card__contents">
              <div class="voice-card__content">
                <div class="voice-card__meta">
                  <?php
                  $guset_group = get_field('guest_group');
                  if ($guset_group) :
                  $age = $guset_group['age'];
                  $type = $guset_group['type'];
                  ?>
                  <span class="voice-card__info"><?php echo $age,'(',$type,')'; ?></span>
                  <?php endif; ?>
                  <span class="voice-card__category category">
                    <?php
                      $terms = get_the_terms($post->ID, 'voice_category');
                      if ($terms) {
                        echo $terms[0]->name;
                      }
                    ?>
                  </span>
                </div>
                <h3 class="voice-card__title"><?php the_title(); ?></h3>
              </div>
              <div class="voice-card__img colorbox">
                <?php if (get_the_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>の画像">
                <?php else : ?>
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="noimage">
                <?php endif; ?>
              </div>
            </div>
            <?php
            if (get_field('guest_voice')) :
              $guest_voice = get_field('guest_voice');
              if (mb_strlen($guest_voice) > 120) {
                  $guest_voice = mb_substr($guest_voice, 0, 120) . "...";
              }
              ?>
              <p class="voice-card__text"><?php echo $guest_voice; ?></p>
            <?php endif; ?>
          </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
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
            <?php
              $license_option_groups = SCF::get_option_meta('price_option', 'license');
              $display = false;
              if (!empty($license_option_groups)) {
                  foreach ($license_option_groups as $license_option) {
                      $license_course = $license_option['license_course'];
                      $license_price = $license_option['license_price'];
                      if (!empty($license_course) && !empty($license_price)) {
                          $display = true;
                          break;
                      }
                  }
              }
              if ($display):
              ?>
              <li class="top-price__item">
                <h3 class="top-price__title">ライセンス講習</h3>
                <dl class="top-price__container">
                  <?php
                  foreach ($license_option_groups as $license_option) {
                      $license_course = $license_option['license_course'];
                      $license_price = $license_option['license_price'];
                      if (!empty($license_course) && !empty($license_price)) {
                          echo '<div class="top-price__info">';
                          echo '<dt class="top-price__menu">' . esc_html($license_course) . '</dt>';
                          echo '<dd class="top-price__price">' . esc_html($license_price) . '</dd>';
                          echo '</div>';
                      }
                  }
                  ?>
                </dl>
              </li>
            <?php endif; ?>
            <?php
              $experience_option_groups = SCF::get_option_meta('price_option', 'experience');
              $display = false;
              if (!empty($experience_option_groups)) {
                  foreach ($experience_option_groups as $experience_option) {
                      $experience_course = $experience_option['experience_course'];
                      $experience_price = $experience_option['experience_price'];
                      if (!empty($experience_course) && !empty($experience_price)) {
                          $display = true;
                          break;
                      }
                  }
              }
              if ($display):
              ?>
              <li class="top-price__item">
                <h3 class="top-price__title">体験ダイビング</h3>
                <dl class="top-price__container">
                  <?php
                  foreach ($experience_option_groups as $experience_option) {
                      $experience_course = $experience_option['experience_course'];
                      $experience_price = $experience_option['experience_price'];
                      if (!empty($experience_course) && !empty($experience_price)) {
                          echo '<div class="top-price__info">';
                          echo '<dt class="top-price__menu">' . esc_html($experience_course) . '</dt>';
                          echo '<dd class="top-price__price">' . esc_html($experience_price) . '</dd>';
                          echo '</div>';
                      }
                  }
                  ?>
                </dl>
              </li>
            <?php endif; ?>
            <?php
              $fun_option_groups = SCF::get_option_meta('price_option', 'fun');
              $display = false;
              if (!empty($fun_option_groups)) {
                  foreach ($fun_option_groups as $fun_option) {
                      $fun_course = $fun_option['fun_course'];
                      $fun_price = $fun_option['fun_price'];
                      if (!empty($fun_course) && !empty($fun_price)) {
                          $display = true;
                          break;
                      }
                  }
              }
              if ($display):
              ?>
              <li class="top-price__item">
                <h3 class="top-price__title">ファンダイビング</h3>
                <dl class="top-price__container">
                  <?php
                  foreach ($fun_option_groups as $fun_option) {
                      $fun_course = $fun_option['fun_course'];
                      $fun_price = $fun_option['fun_price'];
                      if (!empty($fun_course) && !empty($fun_price)) {
                          echo '<div class="top-price__info">';
                          echo '<dt class="top-price__menu">' . esc_html($fun_course) . '</dt>';
                          echo '<dd class="top-price__price">' . esc_html($fun_price) . '</dd>';
                          echo '</div>';
                      }
                  }
                  ?>
                </dl>
              </li>
            <?php endif; ?>
            <?php
              $special_option_groups = SCF::get_option_meta('price_option', 'special');
              $display = false;
              if (!empty($special_option_groups)) {
                  foreach ($special_option_groups as $special_option) {
                      $special_course = $special_option['special_course'];
                      $special_price = $special_option['special_price'];
                      if (!empty($special_course) && !empty($special_price)) {
                          $display = true;
                          break;
                      }
                  }
              }
              if ($display):
              ?>
              <li class="top-price__item">
                <h3 class="top-price__title">スペシャルダイビング</h3>
                <dl class="top-price__container">
                  <?php
                  foreach ($special_option_groups as $special_option) {
                      $special_course = $special_option['special_course'];
                      $special_price = $special_option['special_price'];
                      if (!empty($special_course) && !empty($special_price)) {
                          echo '<div class="top-price__info">';
                          echo '<dt class="top-price__menu">' . esc_html($special_course) . '</dt>';
                          echo '<dd class="top-price__price">' . esc_html($special_price) . '</dd>';
                          echo '</div>';
                      }
                  }
                  ?>
                </dl>
              </li>
            <?php endif; ?>
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