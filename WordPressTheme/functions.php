<?php
function my_theme_enqueue_scripts() {
  // Google Fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;500;700&display=swap', array(), null);

  // Swiper CSS
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), '10.0');

  // Theme stylesheet
  wp_enqueue_style('theme-style', get_theme_file_uri('/assets/css/style.css'), array(), filemtime(get_theme_file_path('/assets/css/style.css')));

  // jQuery (WordPress 内蔵の jQuery を利用)
  wp_enqueue_script('jquery');

  // Swiper JS
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array('jquery'), '10.0', true);

  // Custom JS files
  wp_enqueue_script('jquery-inview', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array('jquery'), filemtime(get_theme_file_path('/assets/js/jquery.inview.min.js')), true);
  wp_enqueue_script('theme-script', get_theme_file_uri('/assets/js/script.js'), array('jquery'), filemtime(get_theme_file_path('/assets/js/script.js')), true);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');