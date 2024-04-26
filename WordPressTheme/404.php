<?php get_header(); ?>
<?php
$home = esc_url(home_url('/'));
?>

  <main>
    <div class="not-found-wrap not-found-wrap-layout">
      <!-- パンくず -->
      <?php  get_template_part('parts/breadcrumb'); ?>
      <!-- 404 -->
      <section class="not-found not-found-layout">
        <div class="not-found__inner inner">
          <div class="not-found__wrap">
            <h1 class="not-found__title">404</h1>
            <p class="not-found__text">申し訳ありません。<br>お探しのページが見つかりません。</p>
            <div class="not-found__button">
              <a href="<?php echo $home; ?>" class="button button--white">
              <span class="button__text">Page TOP</span>
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

<?php get_footer(); ?>