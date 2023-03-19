<?php
/*
Template Name: purposes
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
                <div class="tasks">
                    <h1 class="h1">
                        <?php the_title(); ?>
                    </h1>
                    <?php the_content(); ?>
                    <!-- <div class="tasks__box-1">
                        <ul>
                            <li>
                                <p class="tasks__item-text">
                                    Список 1
                                </p>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </main>
        </div>
        <?php get_footer(); ?>
</body>

</html>