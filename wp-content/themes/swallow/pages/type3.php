<?php
/*
Template Name: type3
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
                <div class="news__box-1">
                    <div class="news__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index__splash.jpg" alt=""
                            class="news__item-img" />
                        <div class="news__item-box-1">
                            <div class="news__item-box-11">
                                <h2 class="h2 news__item-name">Название новости</h2>
                                <p class="news__item-description">Краткое описание новости</p>
                            </div>
                            <a href="#" class="news__item-button button button_read-more">Читать далее</a>
                        </div>
                    </div>
                    <div class="news__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index__splash.jpg" alt=""
                            class="news__item-img" />
                        <div class="news__item-box-1">
                            <div class="news__item-box-11">
                                <h2 class="news__item-name">Название новости</h2>
                                <p class="news__item-description">Краткое описание новости</p>
                            </div>
                            <a href="#" class="news__item-button button button_read-more">Читать далее</a>
                        </div>
                    </div>
                </div>

                <nav class="page-navigation">
                    <ul class="pagination">
                        <li class="pagination__item">
                            <a class="pagination__link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="pagination__item"><a class="pagination__link" href="?page=1">1</a></li>
                        <li class="pagination__item"><a class="pagination__link" href="?page=2">2</a></li>
                        <li class="pagination__item"><a class="pagination__link" href="?page=3">3</a></li>
                        <li class="pagination__item">
                            <a class="pagination__link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </main>
        </div>
        <?php get_footer(); ?>
</body>

</html>