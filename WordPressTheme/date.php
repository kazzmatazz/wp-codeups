<?php get_header(); ?>

  <main>
    <!-- メインビュー -->
    <div class="blog-mv sub-mv">
      <div class="sub-mv__inner">
        <div class="sub-mv__title">
          <h1 class="sub-mv__title-main"><?php the_archive_title(); ?></h1>
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
                      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>の画像">
                      <?php else : ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="noimage">
                      <?php endif; ?>
                    </div>
                    <div class="blog-card__body">
                      <time datetime="<?php the_time('Y-m-d'); ?>" class="blog-card__date"><?php the_time('Y/m/d'); ?></time>
                      <h3 class="blog-card__title"><?php the_title(); ?></h3>
                      <p class="blog-card__text"><?php the_excerpt(); ?></p>
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
          <aside class="blog-list__sidebar">
            <?php get_sidebar(); ?>
          </aside>
        </div>
      </div>
    </section>
    <!-- コンタクト -->
    <?php get_template_part('parts/contact'); ?>
  </main>

<?php get_footer(); ?>