<?php
/*
Template Name: i-waiting
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
                <div class="im-waiting__box-1">
                    <?php
                    $posts_per_page = 5; // number of posts to show per page
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // get current page number
                    $args = array(
                        'post_type' => 'post',
                        // your custom post type
                        'meta_query' => array(
                            array(
                                'key' => '_wp_page_template',
                                'value' => 'pages/single-i-waiting.php',
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
                            $name = get_field('i-waiting_name');
                            $description = get_field('i-waiting_description');
                            $picture = get_field('i-waiting_image');
                            // output the fields
                            echo '<div class="im-waiting__item">';
                            echo '<img class="im-waiting__item-image" src="' . $picture . '" alt="' . $name . '">';
                            echo '<h2 class="im-waiting__item-name">' . $name . '</h2>';
                            echo '<p class="im-waiting__item-description">' . $description . '</p>';
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