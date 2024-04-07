<?php get_header(); ?>

  <main>
    <!-- メインビュー -->
    <div class="contact-mv sub-mv">
      <div class="sub-mv__inner">
        <div class="sub-mv__title">
          <h1 class="sub-mv__title-main">Contact</h1>
        </div>
      </div>
    </div>
    <!-- パンくず -->
    <?php  get_template_part('parts/breadcrumb'); ?>
    <!-- コンタクト -->
    <div class="contact-page blog-list-layout fish-icon">
      <div class="contact-page__inner inner">
        <p class="contact-page__error">※必須項目が入力されていません。<br class="u-mobile">入力してください。</p>
        <div class="contact-page__form form">
          <?php echo do_shortcode('[contact-form-7 id="ef9a8fc" title="お問い合わせ"]'); ?>
        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>