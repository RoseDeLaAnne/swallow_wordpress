<?php
/*
Template Name: type4
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
                <div class="purposes">
                    <h1 class="articles__title">Заголовок : Статья или новость</h1>
                    <div class="community__box-1">
                        <img src="../images/test_escort.jpg" alt="" class="articlas__image" />
                        <p>
                            Текст статьи или новости
                        </p>
                    </div>
            </main>
            <?php get_footer(); ?>
        </div>
</body>

</html>