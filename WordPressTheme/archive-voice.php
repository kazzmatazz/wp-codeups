<?php get_header(); ?>

  <main>
    <!-- メインビュー -->
    <div class="voice-mv sub-mv">
      <div class="sub-mv__inner">
        <div class="sub-mv__title">
          <h1 class="sub-mv__title-main">Voice</h1>
        </div>
      </div>
    </div>
    <!-- パンくず -->
    <?php  get_template_part('parts/breadcrumb'); ?>
    <!-- キャンペーン -->
    <section class="voice-page blog-list-layout fish-icon">
      <div class="voice-page__inner inner">
        <ul class="voice-page__list category-list">
          <li class="category-list__item js-tab-menu is-active">
            <a href="<?php echo esc_url(home_url('/voice/')); ?>">ALL</a>
          </li>
          <?php $terms = get_terms('voice_category'); ?>
          <?php foreach ($terms as $term) : ?>
            <li class="category-list__item js-tab-menu">
              <a href="<?php echo get_term_link($term->term_id); ?>"><?php echo esc_html($term->name); ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
        <ul class="voice-page__items voice-cards">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
                  <?php
                    $guset_group = get_field('guest_group');
                    $image = $guset_group['image'];
                    if ($image) :
                  ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php the_title(); ?>の画像">
                  <?php elseif (get_the_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>の画像">
                  <?php else : ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="noimage">
                  <?php endif; ?>
                </div>
              </div>
              <p class="voice-card__text"><?php the_field("guest_voice"); ?></p>
            </li>
          <?php endwhile; endif; ?>
        </ul>
      </div>
    </section>
    <!-- ページネーション -->
    <div class="wp-pagenavi wp-pagenavi-layout">
      <?php wp_pagenavi(); ?>
    </div>
    <!-- コンタクト -->
    <?php get_template_part('parts/contact'); ?>
  </main>

<?php get_footer(); ?>