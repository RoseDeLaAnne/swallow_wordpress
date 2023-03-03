<?php
/*
Template Name: type3
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
                <h1 class="page__title">Новости</h1>
                <div class="news__box-1">
                    <h2 class="news__item-name">Название новости</h2>
                    <p class="news__item-name">Краткое описание новости</p>
                    <div class="news__item">
                        <img src="../images/index__splash.jpg" alt="" class="news__item-img" />
                    </div>
            </main>
            <?php get_footer(); ?>
        </div>
</body>

</html>