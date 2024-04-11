<?php get_header(); ?>

  <main>
    <!-- メインビュー -->
    <div class="price-mv sub-mv">
      <div class="sub-mv__inner">
        <div class="sub-mv__title">
          <h1 class="sub-mv__title-main">Price</h1>
        </div>
      </div>
    </div>
    <!-- パンくず -->
    <?php  get_template_part('parts/breadcrumb'); ?>

    <!-- プライス -->
    <section class="price-page blog-list-layout fish-icon">
      <div class="price-page__inner inner">
        <ul class="price-page__items">
          <li id="price1" class="price-page__item">
            <table class="price-page__table table">
              <thead class="table__head">
                <tr class="table__row">
                  <th colspan="2" class="table__header"><span>ライセンス講習</span></th>
                </tr>
              </thead>
              <tbody class="table__body">
                <?php
                  $license_option_groups = SCF::get_option_meta('price_option', 'license');
                  if ( !empty( $license_option_groups ) ) {
                      foreach ( $license_option_groups as $license_option ) {
                          $license_course = $license_option['license_course'];
                          $license_price = $license_option['license_price'];
                          echo '<tr class="table__row">';
                          echo '<td class="table__title">' . esc_html( $license_course ) . '</td>';
                          echo '<td class="table__price">' . esc_html( $license_price ) . '</td>';
                          echo '</tr>';
                    }
                  }
                ?>
              </tbody>
            </table>
          </li>
          <li id="price2" class="price-page__item">
            <table class="price-page__table table">
              <thead class="table__head">
                <tr class="table__row">
                  <th colspan="2" class="table__header"><span>体験ダイビング</span></th>
                </tr>
              </thead>
              <tbody class="table__body">
                <?php
                  $experience_option_groups = SCF::get_option_meta('price_option', 'experience');
                  if ( !empty( $experience_option_groups ) ) {
                      foreach ( $experience_option_groups as $experience_option ) {
                          $experience_course = $experience_option['experience_course'];
                          $experience_price = $experience_option['experience_price'];
                          echo '<tr class="table__row">';
                          echo '<td class="table__title">' . esc_html( $experience_course ) . '</td>';
                          echo '<td class="table__price">' . esc_html( $experience_price ) . '</td>';
                          echo '</tr>';
                    }
                  }
                ?>
              </tbody>
            </table>
          </li>
          <li id="price3" class="price-page__item">
            <table class="price-page__table table">
              <thead class="table__head">
                <tr class="table__row">
                  <th colspan="2" class="table__header"><span>ファンダイビング</span></th>
                </tr>
              </thead>
              <tbody class="table__body">
              <?php
                $fun_option_groups = SCF::get_option_meta('price_option', 'fun');
                if ( !empty( $fun_option_groups ) ) {
                    foreach ( $fun_option_groups as $fun_option ) {
                        $fun_course = $fun_option['fun_course'];
                        $fun_price = $fun_option['fun_price'];
                        echo '<tr class="table__row">';
                        echo '<td class="table__title">' . esc_html( $fun_course ) . '</td>';
                        echo '<td class="table__price">' . esc_html( $fun_price ) . '</td>';
                        echo '</tr>';
                    }
                  }
                ?>
              </tbody>
            </table>
          </li>
          <li id="price4" class="price-page__item">
            <table class="price-page__table table">
              <thead class="table__head">
                <tr class="table__row">
                  <th colspan="2" class="table__header"><span>スペシャルダイビング</span></th>
                </tr>
              </thead>
              <tbody class="table__body">
                <?php
                  $special_option_groups = SCF::get_option_meta('price_option', 'special');
                  if ( !empty( $special_option_groups ) ) {
                      foreach ( $special_option_groups as $special_option ) {
                          $special_course = $special_option['special_course'];
                          $special_price = $special_option['special_price'];
                          echo '<tr class="table__row">';
                          echo '<td class="table__title">' . esc_html( $special_course ) . '</td>';
                          echo '<td class="table__price">' . esc_html( $special_price ) . '</td>';
                          echo '</tr>';
                    }
                  }
                ?>
              </tbody>
            </table>
          </li>
        </ul>
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