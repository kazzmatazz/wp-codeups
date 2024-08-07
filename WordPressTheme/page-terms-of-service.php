<?php get_header(); ?>

  <main>
    <!-- メインビュー -->
    <div class="site-map-mv sub-mv">
      <div class="sub-mv__inner">
        <div class="sub-mv__title">
          <h1 class="sub-mv__title-main">Terms of Service</h1>
        </div>
      </div>
    </div>
    <!-- パンくず -->
    <?php get_template_part('parts/breadcrumb'); ?>
    <!-- 利用規約 -->
    <section class="terms-of-service policy blog-list-layout fish-icon">
      <div class="policy__inner inner">
        <div class="policy__contents">
          <h2 class="policy__heading">利用規約</h2>
          <div class="policy__content policy__content--terms">
            <?php if (have_posts()) :
              while (have_posts()) :
                the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile;
            endif; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- コンタクト -->
    <?php get_template_part('parts/contact'); ?>
  </main>

<?php get_footer(); ?>