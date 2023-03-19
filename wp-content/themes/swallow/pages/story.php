<?php
/*
Template Name: story

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
                <div class="story">
                    <h1 class="story__name">
                        <?php the_title(); ?>
                    </h1>
                    <img class="story__image" src="<?php the_field('image'); ?>" alt="">
                    <p class="story__description">
                        <?php the_content(); ?>
                    </p>
                </div>
            </main>
        </div>
        <?php get_footer(); ?>
</body>

</html>