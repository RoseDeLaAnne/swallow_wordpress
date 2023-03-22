<?php
/*
Template Name: single-i-waiting

Template Post Type: post, pages
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
                <div class="team">
                    <div class="team__item">
                        <div class="team__item-box-1">
                        <img class="news__item-image" src="<?php the_field('i-waiting_image'); ?>" alt="">;
                            <h2 class="team__item-name"><?php the_field('i-waiting_name'); ?></h2>
                        </div>
                        <p class="team__item-description">
                            <?php the_field('i-waiting_description'); ?>
                        </p>
                    </div>
                </div>
            </main>
        </div>
        <?php get_footer(); ?>
</body>

</html>