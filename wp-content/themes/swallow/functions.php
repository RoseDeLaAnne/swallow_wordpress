<?php

add_action( 'wp_enqueue_scripts', function() {
  wp_enqueue_style( 'config', get_template_directory_uri() . '/css/config.css' );
  wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts.css' );
  wp_enqueue_style( 'general', get_template_directory_uri() . '/css/general.css' );
  wp_enqueue_style( 'keyframes', get_template_directory_uri() . '/css/keyframes.css' );
  wp_enqueue_style( 'media', get_template_directory_uri() . '/css/media.css' );
  wp_enqueue_style( 'variables', get_template_directory_uri() . '/css/variables.css' );

  wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/footer.css' );
  wp_enqueue_style( 'header', get_template_directory_uri() . '/css/header.css' );

  wp_enqueue_style( 'blocks-nav', get_template_directory_uri() . '/css/blocks/nav.css' );
  wp_enqueue_style( 'blocks-index', get_template_directory_uri() . '/css/blocks/index.css' );
  wp_enqueue_style( 'blocks-logo', get_template_directory_uri() . '/css/blocks/logo.css' );
  wp_enqueue_style( 'blocks-button', get_template_directory_uri() . '/css/blocks/button.css' );
  wp_enqueue_style( 'blocks-ready-to-help', get_template_directory_uri() . '/css/blocks/ready-to-help.css' );

  wp_enqueue_style( 'index', get_template_directory_uri() . '/css/pages/index.css' );
  wp_enqueue_style( 'literature', get_template_directory_uri() . '/css/pages/literature.css' );
  wp_enqueue_style( 'news', get_template_directory_uri() . '/css/pages/news.css' );

  // wp_enqueue_scripts( 'general', get_template_directory_uri() . '/js/general.js', array('jquery'), 'null', true );
})

?>