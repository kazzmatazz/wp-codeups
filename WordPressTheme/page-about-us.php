<?php get_header(); ?>

  <main>
    <!-- メインビュー -->
    <div class="about-mv sub-mv">
      <div class="sub-mv__inner">
        <div class="sub-mv__title">
          <h1 class="sub-mv__title-main">About us</h1>
        </div>
      </div>
    </div>
    <!-- パンくず -->
    <?php  get_template_part('parts/breadcrumb'); ?>

    <!-- アバウト -->
    <section class="about-about about-about-layout">
      <div class="about-about__inner inner">
        <div class="about-about__container">
          <div class="about-about__images">
            <div class="about-about__img1 u-desktop">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-ocean-img1.jpg" alt="屋根の上にシーサーがいる">
            </div>
            <div class="about-about__img2">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-ocean-img2.jpg" alt="海の中にいる2匹の黄色い魚">
            </div>
          </div>
          <div class="about-about__content">
            <h3 class="about-about__title">Dive into<br>the Ocean</h3>
            <div class="about-about__body">
              <p class="about-about__text">ダイビングショップの魅力あふれる世界を写真でお届けします。透明度の高い海で色とりどりのサンゴや熱帯魚が輝く様子や、笑顔あふれるスタッフが準備を整える様子を捉えました。プロのガイドとともに未知の海を探索し、冒険心を刺激します。</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ギャラリー -->
    <?php
      $gallery_image_groups = SCF::get_option_meta('gallery','gallery_image_group');
      $display = false;
      if (!empty($gallery_image_groups)) {
          foreach ($gallery_image_groups as $image_group) {
              $image_url = wp_get_attachment_image_url($image_group['gallery_image'], 'full');
              if (!empty($image_url)) {
                  $display = true;
                  break;
              }
          }
      }
      if ($display):
      ?>
      <section class="about-gallery about-gallery-layout">
        <div class="about-gallery__inner inner">
            <div class="about-gallery__heading section-heading">
                <h2 class="section-heading__main">Gallery</h2>
                <p class="section-heading__sub">フォト</p>
            </div>
            <div class="about-gallery__images">
                <?php
                foreach ($gallery_image_groups as $image_group) {
                    $image_url = wp_get_attachment_image_url($image_group['gallery_image'], 'full');
                    if (!empty($image_url)) {
                        echo '<div class="about-gallery__image js-modal">';
                        echo '<img src="' . esc_url($image_url) . '" alt="ギャラリーの画像">';
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
      </section>
    <?php endif; ?>
    <div class="about-gallery__modal js-overlay"></div>
    <!-- コンタクト -->
    <?php get_template_part('parts/contact'); ?>
  </main>

<?php get_footer(); ?>