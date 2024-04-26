<?php
$campaign = esc_url(home_url('/campaign/'));
$voice = esc_url(home_url('/voice/'));
$contact = esc_url(home_url('/contact/'));
?>
<ul class="sidebar__items">
  <li class="sidebar__item">
    <h2 class="sidebar__heading">人気記事</h2>
    <div class="sidebar__contents">
      <div class="sidebar__popular-items">
        <?php
        $args = array(
          'post_type' => 'post',
          'meta_key' => 'post_views_count',
          'orderby' => 'meta_value_num',
          'posts_per_page' => 3,
          'order' => 'DESC',
        );
        $the_view_query = new WP_Query($args);
        if ($the_view_query->have_posts()) :
          while ($the_view_query->have_posts()) : $the_view_query->the_post();
        ?>
        <a href="<?php the_permalink(); ?>" class="sidebar__popular-item sidebar-popular">
          <div class="sidebar-popular__img">
            <?php if (get_the_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>の画像">
            <?php else : ?>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="noimage">
            <?php endif; ?>
          </div>
          <div class="sidebar-popular__body">
            <time datetime="<?php the_time('c'); ?>" class="sidebar-popular__date"><?php the_time('Y.m.d'); ?></time>
            <p class="sidebar-popular__text"><?php the_title(); ?></p>
          </div>
        </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
  </li>
  <li class="sidebar__item">
    <h2 class="sidebar__heading">口コミ</h2>
    <div class="sidebar__contents">
      <div class="sidebar__review-items">
        <?php
        $args = array(
          'post_type' => 'voice',
          'post_status' => 'publish',
          'posts_per_page' => 1,
          'orderby' => 'post_date',
          'order' => 'DESC',
        );
        $the_view_query = new WP_Query($args);
        if ($the_view_query->have_posts()) :
          while ($the_view_query->have_posts()) : $the_view_query->the_post();
        ?>
        <div class="sidebar__review-item sidebar-review">
          <div class="sidebar-review__img">
            <?php if (get_the_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>の画像">
            <?php else : ?>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="noimage">
            <?php endif; ?>
          </div>
          <div class="sidebar-review__body">
            <?php
            $guset_group = get_field('guest_group');
            if ($guset_group) :
            $age = $guset_group['age'];
            $type = $guset_group['type'];
            ?>
            <span class="sidebar-review__category"><?php echo $age,'(',$type,')'; ?></span>
            <?php endif; ?>
            <p class="sidebar-review__text"><?php the_title(); ?></p>
          </div>
        </div>
        <div class="sidebar-review__button">
          <a href="<?php echo $voice; ?>" class="button">
            <span class="button__text">
              View more
            </span>
          </a>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
  </li>
  <li class="sidebar__item">
    <h2 class="sidebar__heading">キャンペーン</h2>
    <div class="sidebar__contents">
      <ul class="sidebar__campaign-items">
        <?php
        $args = array(
          'post_type' => 'campaign',
          'post_status' => 'publish',
          'posts_per_page' => 2,
          'orderby' => 'post_date',
          'order' => 'DESC',
        );
        $the_view_query = new WP_Query($args);
        if ($the_view_query->have_posts()) :
          while ($the_view_query->have_posts()) : $the_view_query->the_post();
        ?>
        <li class="sidebar__campaign-item">
          <div class="campaign-card">
            <div class="campaign-card__img campaign-card__img--small">
              <?php if (get_the_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>の画像">
              <?php else : ?>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="noimage">
              <?php endif; ?>
            </div>
            <div class="campaign-card__body campaign-card__body--small">
              <h3 class="campaign-card__title campaign-card__title--center"><?php the_title(); ?></h3>
              <div class="campaign-card__wrap">
                <p class="campaign-card__menu campaign-card__menu--small">全部コミコミ(お一人様)</p>
                <div class="campaign-card__price">
                  <?php
                    $price_group = get_field('campaign_price-group');
                    ?>
                  <?php if ($price_group) : ?>
                  <?php
                    $original_price = $price_group['original_price'];
                    $discounted_price = $price_group['discounted_price'];
                    ?>
                  <p class="campaign-card__regular campaign-card__regular--small"><?php echo $original_price; ?></p>
                  <p class="campaign-card__row campaign-card__row--small"><?php echo $discounted_price; ?></p>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </ul>
    </div>
    <div class="sidebar__button">
      <a href="<?php echo $campaign; ?>" class="button">
        <span class="button__text">
          View more
        </span>
      </a>
    </div>
  </li>
  <li class="sidebar__item">
    <h2 class="sidebar__heading">アーカイブ</h2>
    <div class="sidebar__contents">
      <ul class="sidebar__archive-items">
        <?php
          $year_prev = null;
          $months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,
                                        YEAR( post_date ) AS year,
                                        COUNT( id ) as post_count FROM $wpdb->posts
                                        WHERE post_status = 'publish' and post_date <= now( )
                                        and post_type = 'post'
                                        GROUP BY month , year
                                        ORDER BY post_date DESC");

          foreach ($months as $month) :
            $year_current = $month->year;
            if ($year_current != $year_prev) {
                if ($year_prev != null) { ?>
                    </ul>
                  </li>
                <?php } ?>
                <li class="sidebar__archive-item sidebar-archive">
                  <h4 class="sidebar-archive__year js-sidebar-archive"><?php echo $month->year; ?>年</h4>
                  <ul class="sidebar-archive__months">
                <?php } ?>
                <li class="sidebar-archive__month">
                  <a href="<?php bloginfo('url'); ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)); ?>">
                    <?php echo date("n", mktime(0, 0, 0, $month->month, 1, $month->year)); ?>月
                  </a>
                </li>
            <?php $year_prev = $year_current;
              endforeach;
              if ($year_prev != null) { ?>
            </ul>
            </li>
        <?php } ?>
      </ul>
    </div>
  </li>
</ul>