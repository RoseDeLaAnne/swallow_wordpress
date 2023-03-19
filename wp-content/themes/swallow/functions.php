<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('config', get_template_directory_uri() . '/css/config.css');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/css/fonts.css');
    wp_enqueue_style('general', get_template_directory_uri() . '/css/general.css');
    wp_enqueue_style('keyframes', get_template_directory_uri() . '/css/keyframes.css');
    wp_enqueue_style('media', get_template_directory_uri() . '/css/media.css');
    wp_enqueue_style('variables', get_template_directory_uri() . '/css/variables.css');

    wp_enqueue_style('footer', get_template_directory_uri() . '/css/footer.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css');

    wp_enqueue_style('blocks-about-community', get_template_directory_uri() . '/css/blocks/about-community.css');
    wp_enqueue_style('blocks-about-team', get_template_directory_uri() . '/css/blocks/about-team.css');
    wp_enqueue_style('blocks-nav', get_template_directory_uri() . '/css/blocks/nav.css');
    wp_enqueue_style('blocks-index', get_template_directory_uri() . '/css/blocks/index.css');
    wp_enqueue_style('blocks-logo', get_template_directory_uri() . '/css/blocks/logo.css');
    wp_enqueue_style('blocks-button', get_template_directory_uri() . '/css/blocks/button.css');
    wp_enqueue_style('blocks-donate', get_template_directory_uri() . '/css/blocks/donate.css');
    wp_enqueue_style('blocks-ready-to-help', get_template_directory_uri() . '/css/blocks/ready-to-help.css');
    wp_enqueue_style('blocks-pagination', get_template_directory_uri() . '/css/blocks/pagination.css');
    wp_enqueue_style('blocks-partners', get_template_directory_uri() . '/css/blocks/partners.css');
    wp_enqueue_style('blocks-modal', get_template_directory_uri() . '/css/blocks/modal.css');

    wp_enqueue_style('article', get_template_directory_uri() . '/css/pages/article.css');
    wp_enqueue_style('articles', get_template_directory_uri() . '/css/pages/articles.css');
    wp_enqueue_style('index', get_template_directory_uri() . '/css/pages/index.css');
    wp_enqueue_style('literature', get_template_directory_uri() . '/css/pages/literature.css');
    wp_enqueue_style('news', get_template_directory_uri() . '/css/pages/news.css');
    wp_enqueue_style('single-news', get_template_directory_uri() . '/css/pages/single-news.css');
    wp_enqueue_style('stories', get_template_directory_uri() . '/css/pages/stories.css');
    wp_enqueue_style('story', get_template_directory_uri() . '/css/pages/story.css');

    wp_enqueue_script('modal', get_template_directory_uri() . '/js/modal.js', array('jquery'), '1.0.0', false);
})

    ?>