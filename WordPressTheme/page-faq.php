<?php get_header(); ?>

  <main>
    <!-- メインビュー -->
    <div class="faq-mv sub-mv">
      <div class="sub-mv__inner">
        <div class="sub-mv__title">
          <h1 class="sub-mv__title-main">FAQ</h1>
        </div>
      </div>
    </div>
    <!-- パンくず -->
    <?php  get_template_part('parts/breadcrumb'); ?>
    <!-- FAQ -->
    <section class="faq-page blog-list-layout fish-icon">
      <div class="faq-page__inner inner">
        <div class="faq-page__accordion accordion js-accordion">
          <ul class="accordion__items">
            <?php
              $faq_option_groups = SCF::get_option_meta('faq', 'faq_group');
              if ( !empty( $faq_option_groups ) ) {
                  foreach ( $faq_option_groups as $faq_option ) {
                      $faq_question = $faq_option['faq_question'];
                      $faq_answer = $faq_option['faq_answer'];
                      echo '<li class="accordion__item js-accordion-item">';
                      echo '<div class="accordion__title js-accordion-title is-open">';
                      echo '<h3 class="accordion__title-text">' . esc_html( $faq_question ) . '</h3>';
                      echo '</div>';
                      echo '<div class="accordion__content js-accordion-content">';
                      echo '<p class="accordion__text">' . esc_html( $faq_answer ) . '</p>';
                      echo '</div>';
                      echo '</li>';
                }
              }
            ?>
          </ul>
        </div>
      </div>
    </section>
    <!-- コンタクト -->
    <?php get_template_part('parts/contact'); ?>
  </main>

<?php get_footer(); ?>