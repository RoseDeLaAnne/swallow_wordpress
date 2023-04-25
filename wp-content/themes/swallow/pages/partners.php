<?php
/*
Template Name: partners
*/
?>
<!DOCTYPE html>
<html lang="ru" style="margin-top: 0px !important;">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head(); ?>

    <title>
        <?php the_title(); ?>
    </title>
</head>

<body>
    <div class="page">
        <div class="modal modal_nav">
            <button class="modal__close-button modal__close-button_nav">
                <svg xmlns="http://www.w3.org/2000/svg" width="800" height="800" viewBox="0 0 24 24"
                    class="modal__close-button-icon">
                    <path fill="#fff" fill-rule="evenodd"
                        d="M19.207 6.207a1 1 0 0 0-1.414-1.414L12 10.586 6.207 4.793a1 1 0 0 0-1.414 1.414L10.586 12l-5.793 5.793a1 1 0 1 0 1.414 1.414L12 13.414l5.793 5.793a1 1 0 0 0 1.414-1.414L13.414 12l5.793-5.793z"
                        clip-rule="evenodd" />
                </svg>
            </button>

            <div class="modal__inner">
                <nav class="nav nav_adaptive">
                    <ul class="nav__box-1">
                        <li class="nav__item">
                            <a href="about-community" class="nav__item-link">О сообществе</a>
                            <?php
                            $parent_page_slug = 'about-community'; // Replace with the slug of the parent page
                            $parent_page = get_page_by_path($parent_page_slug);
                            $args = array(
                                'child_of' => $parent_page->ID,
                                'sort_order' => 'asc',
                                'sort_column' => 'menu_order',
                            );
                            $pages = get_pages($args);
                            if ($pages) {
                                echo '<ul class="nav-dropdown">';
                                foreach ($pages as $page) {
                                    $link = get_page_link($page->ID);
                                    $title = $page->post_title;
                                    echo '<li class="nav-dropdown__item">';
                                    echo '<a href="' . $link . '" class="nav-dropdown__item-link">' . $title . '</a>';
                                    echo '</li>';
                                }
                                echo '</ul>';
                            }
                            ?>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__item-link">Материалы</a>
                            <?php
                            $parent_page_slug = 'materials'; // Replace with the slug of the parent page
                            $parent_page = get_page_by_path($parent_page_slug);
                            $args = array(
                                'child_of' => $parent_page->ID,
                                'sort_order' => 'asc',
                                'sort_column' => 'menu_order',
                            );
                            $pages = get_pages($args);
                            if ($pages) {
                                echo '<ul class="nav-dropdown">';
                                foreach ($pages as $page) {
                                    $link = get_page_link($page->ID);
                                    $title = $page->post_title;
                                    echo '<li class="nav-dropdown__item">';
                                    echo '<a href="' . $link . '" class="nav-dropdown__item-link">' . $title . '</a>';
                                    echo '</li>';
                                }
                                echo '</ul>';
                            }
                            ?>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__item-link">Программы и проекты</a>
                            <?php
                            $parent_page_slug = 'programs-and-projects'; // Replace with the slug of the parent page
                            $parent_page = get_page_by_path($parent_page_slug);
                            $args = array(
                                'child_of' => $parent_page->ID,
                                'sort_order' => 'asc',
                                'sort_column' => 'menu_order',
                            );
                            $pages = get_pages($args);
                            if ($pages) {
                                echo '<ul class="nav-dropdown">';
                                foreach ($pages as $page) {
                                    $link = get_page_link($page->ID);
                                    $title = $page->post_title;
                                    echo '<li class="nav-dropdown__item">';
                                    echo '<a href="' . $link . '" class="nav-dropdown__item-link">' . $title . '</a>';
                                    echo '</li>';
                                }
                                echo '</ul>';
                            }
                            ?>
                        </li>
                        <li class="nav__item">
                            <a href="cooperation-proposal" class="nav__item-link">Предложения о сотрудничестве</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="page__box-1">
            <?php get_header(); ?>
            <main class="main container">
                <h1 class="page__title">
                    <?php the_title(); ?>
                </h1>
                <div class="partners__box-1">
                    <?php
                    $posts_per_page = 5; // number of posts to show per page
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // get current page number
                    $args = array(
                        'post_type' => 'post',
                        // your custom post type
                    
                        'meta_query' => array(
                            array(
                                'key' => '_wp_page_template',
                                'value' => 'pages/partner.php',
                                // template name as stored in the dB
                            )
                        )
                    );
                    $loop = new WP_Query($args);
                    if ($loop->have_posts()) {
                        while ($loop->have_posts()) {
                            $loop->the_post();
                            // get ACF fields
                            $post_id = get_the_ID(); // get the ID of the current post
                            $post_url = get_permalink($post_id); // get the URL of the current post                  
                            $picture = get_field('partner_image');
                            $link = get_field('link');
                            // output the fields
                            echo '<div class="partners__item">';
                            echo '<a href="' . $link . '" class="partners__item-link" target="_blank">';
                            echo '<img class="partners__item-image" src="' . $picture . '" alt="' . $name . '">';
                            echo '</a>';
                            echo '</div>';
                        }
                    }
                    ?>


                </div>

            </main>
        </div>
        <?php get_footer(); ?>
</body>

</html>