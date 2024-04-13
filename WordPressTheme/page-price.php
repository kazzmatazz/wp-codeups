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
    <?php get_template_part('parts/contact'); ?>
  </main>

<?php get_footer(); ?>