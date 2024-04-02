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
            <ul class="sidebar__items">
              <li class="sidebar__item">
                <h2 class="sidebar__heading">人気記事</h2>
                <div class="sidebar__contents">
                  <ul class="sidebar__popular-items">
                    <li class="sidebar__popular-item sidebar-popular">
                      <div class="sidebar-popular__img">
                        <img src="./assets/images/common/about-gallery-img4.jpg" alt="黄色の魚が泳いでいる様子">
                      </div>
                      <div class="sidebar-popular__body">
                        <time datetime="2023-11-17" class="sidebar-popular__date">2023/11/17</time>
                        <p class="sidebar-popular__text">ライセンス取得</p>
                      </div>
                    </li>
                    <li class="sidebar__popular-item sidebar-popular">
                      <div class="sidebar-popular__img">
                        <img src="./assets/images/common/top-blog-img2.jpg" alt="ウミガメが泳いでいる様子">
                      </div>
                      <div class="sidebar-popular__body">
                        <time datetime="2023-11-17" class="sidebar-popular__date">2023/11/17</time>
                        <p class="sidebar-popular__text">ウミガメと泳ぐ</p>
                      </div>
                    </li>
                    <li class="sidebar__popular-item sidebar-popular">
                      <div class="sidebar-popular__img">
                        <img src="./assets/images/common/top-blog-img3.jpg" alt="クマノミ">
                      </div>
                      <div class="sidebar-popular__body">
                        <time datetime="2023-11-17" class="sidebar-popular__date">2023/11/17</time>
                        <p class="sidebar-popular__text">カクレクマノミ</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="sidebar__item">
                <h2 class="sidebar__heading">口コミ</h2>
                <div class="sidebar__contents">
                  <ul class="sidebar__review-items">
                    <li class="sidebar__review-item sidebar-review">
                      <div class="sidebar-review__img">
                        <img src="./assets/images/common/sidebar-review-img.jpg" alt="笑顔の夫婦">
                      </div>
                      <div class="sidebar-review__body">
                        <span class="sidebar-review__category">30代(カップル)</span>
                        <p class="sidebar-review__text">ここにタイトルが入ります。ここにタイトル</p>
                      </div>
                    </li>
                    <div class="sidebar-review__button">
                      <a href="#" class="button"><span>View more</span></a>
                    </div>
                  </ul>
                </div>
              </li>
              <li class="sidebar__item">
                <h2 class="sidebar__heading">キャンペーン</h2>
                <div class="sidebar__contents">
                  <ul class="sidebar__campaign-items">
                    <li class="sidebar__campaign-item">
                      <div class="campaign-card">
                        <div class="campaign-card__img campaign-card__img--small">
                          <img src="./assets/images/common/top-campaign-img1.jpg" alt="海の中にいる小魚たち">
                        </div>
                        <div class="campaign-card__body campaign-card__body--small">
                          <h3 class="campaign-card__title campaign-card__title--center">ライセンス取得</h3>
                          <div class="campaign-card__wrap">
                            <p class="campaign-card__menu campaign-card__menu--small">全部コミコミ(お一人様)</p>
                            <div class="campaign-card__price">
                              <p class="campaign-card__regular campaign-card__regular--small">¥56,000</p>
                              <p class="campaign-card__row campaign-card__row--small">¥46,000</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="sidebar__campaign-item">
                      <div class="campaign-card">
                        <div class="campaign-card__img campaign-card__img--small">
                          <img src="./assets/images/common/top-campaign-img2.jpg" alt="島と船と海">
                        </div>
                        <div class="campaign-card__body campaign-card__body--small">
                          <h3 class="campaign-card__title campaign-card__title--center">貸切体験ダイビング</h3>
                          <div class="campaign-card__wrap">
                            <p class="campaign-card__menu campaign-card__menu--small">全部コミコミ(お一人様)</p>
                            <div class="campaign-card__price">
                              <p class="campaign-card__regular campaign-card__regular--small">¥24,000</p>
                              <p class="campaign-card__row campaign-card__row--small">¥18,000</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="sidebar__button">
                  <a href="#" class="button"><span>View more</span></a>
                </div>
              </li>
              <li class="sidebar__item">
                <h2 class="sidebar__heading">アーカイブ</h2>
                <div class="sidebar__contents">
                  <ul class="sidebar__archive-items">
                    <li class="sidebar__archive-item sidebar-archive">
                      <h4 class="sidebar-archive__year js-sidebar-archive">2023</h4>
                      <ul class="sidebar-archive__months">
                        <li class="sidebar-archive__month"><a href="#">3月</a></li>
                        <li class="sidebar-archive__month"><a href="#">2月</a></li>
                        <li class="sidebar-archive__month"><a href="#">1月</a></li>
                      </ul>
                    </li>
                    <li class="sidebar__archive-item sidebar-archive">
                      <h4 class="sidebar-archive__year js-sidebar-archive">2022</h4>
                      <ul class="sidebar-archive__months">
                        <li class="sidebar-archive__month"><a href="#">3月</a></li>
                        <li class="sidebar-archive__month"><a href="#">2月</a></li>
                        <li class="sidebar-archive__month"><a href="#">1月</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
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