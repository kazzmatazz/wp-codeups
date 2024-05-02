<?php get_header(); ?>
<?php
  if (!is_user_logged_in() && !is_robots()) {
    setPostViews(get_the_ID());
  }
?>

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
          <div class="blog-list__wrap blog-detail">
            <div class="blog-detail__heading">
              <time datetime="<?php the_time('c'); ?>" class="blog-detail__date"><?php the_time('Y.m.d'); ?></time>
              <h3 class="blog-detail__main"><?php the_title(); ?></h3>
            </div>
            <div class="blog-detail__img">
              <?php if (get_the_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>の画像">
              <?php else : ?>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="noimage">
              <?php endif; ?>
            </div>
            <div class="blog-detail__content">
              <?php if (have_posts()) :
                while (have_posts()) :
                  the_post(); ?>
              <?php the_content(); ?>
              <?php endwhile;
              endif; ?>
            </div>
            <!-- ページネーション -->
            <div class="wp-pagenavi wp-pagenavi-layout wp-pagenavi-layout--short">
              <?php
              $prev = get_previous_post();
              if (!empty($prev)) {
                $prev_url = esc_url(get_permalink($prev->ID));
              }

              $next = get_next_post();
              if (!empty($next)) {
                $next_url = esc_url(get_permalink($next->ID));
              }
              ?>
              <?php if (!empty($prev)) : ?>
              <a class="previouspostslink" rel="prev" href="<?php echo $prev_url; ?>"></a>
              <?php endif; ?>
              <?php if (!empty($next)) : ?>
              <a class="nextpostslink" rel="next" href="<?php echo $next_url; ?>"></a>
              <?php endif; ?>
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