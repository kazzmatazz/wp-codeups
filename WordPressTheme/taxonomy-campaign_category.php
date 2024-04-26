<?php get_header(); ?>
  <main>
    <!-- メインビュー -->
    <div class="campaign-mv sub-mv">
      <div class="sub-mv__inner">
        <div class="sub-mv__title">
          <h1 class="sub-mv__title-main">Campaign</h1>
        </div>
      </div>
    </div>
    <!-- パンくず -->
    <?php  get_template_part('parts/breadcrumb'); ?>
    <!-- 下層ページ -->
    <div class="campaign-page campaign-page-layout fish-icon">
      <div class="campaign-page__inner inner">
        <ul class="campaign-page__list category-list">
          <li class="category-list__item js-tab-menu">
            <a href="<?php echo esc_url(home_url('/campaign/')); ?>">ALL</a>
          </li>
          <?php
          $term_id = get_queried_object_id(); // 現在のタームIDを取得
          $terms = get_terms('campaign_category', array('hide_empty' => 0)); // 空のタームも含めてすべてのタームを取得
          ?>
          <?php foreach ($terms as $term) : ?>
            <li data-tab="<?php echo esc_attr($term->slug); ?>" class="category-list__item js-tab-menu <?php if ($term->term_id == $term_id) { echo 'is-active'; } ?>">
              <a href="<?php echo get_term_link($term->term_id); ?>"><?php echo esc_html($term->name); ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
        <ul class="campaign-page__contents">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li class="campaign-page__content campaign-card">
            <div class="campaign-card__img">
              <?php if (get_the_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>の画像">
              <?php else : ?>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="noimage">
              <?php endif; ?>
            </div>
            <div class="campaign-card__body campaign-card__body--large">
              <span class="campaign-card__category category">
                <?php
                $terms = get_the_terms($post->ID, 'campaign_category');
                if ($terms) {
                  echo $terms[0]->name;
                }
                ?>
              </span>
              <h3 class="campaign-card__title campaign-card__title--large"><?php the_title(); ?></h3>
              <div class="campaign-card__wrap">
                <p class="campaign-card__menu">全部コミコミ(お一人様)</p>
                <div class="campaign-card__price">
                  <?php
                    $price_group = get_field('campaign_price-group');
                    ?>
                  <?php if ($price_group) : ?>
                  <?php
                    $original_price = $price_group['original_price'];
                    $discounted_price = $price_group['discounted_price'];
                    ?>
                  <p class="campaign-card__regular"><?php echo $original_price; ?></p>
                  <p class="campaign-card__row"><?php echo $discounted_price; ?></p>
                  <?php endif; ?>
                </div>
              </div>
              <p class="campaign-card__text u-desktop"><?php the_field("campaign_content"); ?></p>
              <div class="campaign-card__contents u-desktop">
                <?php
                  $campaign_date = get_field('campaign_date');
                  ?>
                <?php if ($campaign_date) : ?>
                <?php
                  $start_date = $campaign_date['start_date'];
                  $end_date = $campaign_date['end_date'];
                  ?>
                <p class="campaign-card__date"><?php echo $start_date . '-' . $end_date; ?></p>
                <?php endif; ?>
                <p class="campaign-card__reserve">ご予約・お問い合わせはコチラ</p>
                <div class="campaign-card__button">
                  <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button">
                    <span class="button__text">
                      Contact us
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <?php endwhile; endif; ?>
        </ul>
      </div>
    </div>
    <!-- ページネーション -->
    <div class="wp-pagenavi wp-pagenavi-layout">
        <?php wp_pagenavi(); ?>
    </div>
    <!-- コンタクト -->
    <?php get_template_part('parts/contact'); ?>
  </main>
<?php get_footer(); ?>