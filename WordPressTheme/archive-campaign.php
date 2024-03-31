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
    <!-- キャンペーン -->
    <div class="campaign-page campaign-page-layout fish-icon">
      <div class="campaign-page__inner inner">
        <ul class="campaign-page__list category-list">
          <li class="category-list__item js-tab-menu is-active">
            <a href="#">ALL</a>
          </li>
          <?php $terms = get_terms('campaign_category'); ?>
          <?php foreach ($terms as $term) : ?>
            <li data-tab="<?php echo esc_attr($term->slug); ?>" class="category-list__item js-tab-menu">
              <a href="<?php echo get_term_link($term->term_id); ?>"><?php echo esc_html($term->name); ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
        <ul class="campaign-page__contents">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li class="campaign-page__content campaign-card">
              <div class="campaign-card__img">
                <?php if (get_the_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title() ?>の画像">
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
                    <p class="campaign-card__regular"><?php the_field("original_price"); ?></p>
                    <p class="campaign-card__row"><?php the_field("discounted_price"); ?></p>
                  </div>
                </div>
                <p class="campaign-card__text u-desktop">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                <div class="campaign-card__contents u-desktop">
                  <p class="campaign-card__date">2023/6/1-9/30</p>
                  <p class="campaign-card__reserve">ご予約・お問い合わせはコチラ</p>
                  <div class="campaign-card__button">
                    <a href="" class="button"><span>View more</span></a>
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
    <section class="top-contact top-contact-layout">
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
    </section>
  </main>

<?php get_footer(); ?>