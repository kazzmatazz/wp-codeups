<?php get_header(); ?>

  <main>
    <!-- メインビュー -->
    <div class="blog-mv sub-mv">
      <div class="sub-mv__inner">
        <div class="sub-mv__title">
          <h1 class="sub-mv__title-main">Blog</h1>
        </div>
      </div>
    </div>
    <!-- パンくず -->
    <?php  get_template_part('parts/breadcrumb'); ?>
    <!-- リスト -->
    <section class="blog-list blog-list-layout fish-icon">
      <div class="blog-list__inner inner">
        <div class="blog-list__container blog-list__container--relative">
          <div class="blog-list__wrap">
            <ul class="blog-list__items blog-cards blog-cards--two">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
                      <time datetime="<?php the_time('Y-m-d'); ?>" class="blog-card__date"><?php the_time('Y/m/d'); ?></time>
                      <h3 class="blog-card__title"><?php the_title(); ?></h3>
                      <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                    </div>
                  </a>
                </li>
              <?php endwhile; endif; ?>
            </ul>
            <!-- ページネーション -->
            <div class="wp-pagenavi wp-pagenavi-layout">
              <?php wp_pagenavi(); ?>
            </div>
          </div>
          <aside class="blog-list__sidebar sidebar">
            <?php get_template_part('parts/sidebar'); ?>
          </aside>
        </div>
      </div>
    </section>
    <!-- コンタクト -->
    <div class="top-contact top-contact-layout">
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
    </div>
  </main>

<?php get_footer(); ?>