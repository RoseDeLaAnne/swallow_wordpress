<?php
/*
Template Name: article

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
                <div class="article">
                    <h1 class="article__name">
                        <?php the_field('articles_title') ?>
                    </h1>
                    <img class="article__image" src="<?php the_field('articles_image'); ?>" alt="">
                    <p class="article__description">
                        <?php the_field('articles_description'); ?>
                    </p>
                </div>
            </main>
        </div>
        <?php get_footer(); ?>
</body>

</html>