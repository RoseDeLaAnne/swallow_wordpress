<?php
/*
Template Name: type1
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
                <div class="tasks">
                    <h1>Заголовок</h1>
                    <div class="tasks__box-1">
                        <ul>
                            <li>
                                <p class="tasks__item-text">
                                    Список 1
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </main>
            <?php get_footer(); ?>
        </div>
</body>
</html>