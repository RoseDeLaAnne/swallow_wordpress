<?php
/*
Template Name: type2
*/
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <?php wp_head(); ?>
    <title>Задачи</title>
</head>

<body>
    <div class="page">
        <div class="container">
            <?php get_header(); ?>
            <main class="main container">
                <div class="partners">
                    <h1>Партнеры</h1>
                    <div class="partners__box-1">
                        <div class="partners__item">
                            <img src="../icons/logo.svg" alt="" class="partners__img" />
                        </div>
                    </div>
                </div>
            </main>
            <?php get_footer(); ?>
        </div>
</body>

</html>