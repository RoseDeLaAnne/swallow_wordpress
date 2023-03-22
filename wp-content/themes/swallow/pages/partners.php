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
                            $picture = get_field('image');
                            $link = get_field('link');
                            // output the fields
                            echo '<div class="partners__item">';
                            echo '<a href="'. $link .'" class="partners__item-link" target="_blank">';
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