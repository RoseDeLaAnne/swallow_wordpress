<?php
/*
Template Name: type3
Template Post Type: post, pages
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
<<<<<<< Updated upstream
                    <h2 class="news__item-name">Название новости</h2>
                    <p class="news__item-name">Краткое описание новости</p>
                    <div class="news__item">
                        <img src="../images/index__splash.jpg" alt="" class="news__item-img" />
                    </div>
            </main>
            <?php get_footer(); ?>
        </div>
=======
                    <?php
                    $posts = get_posts(
                        array(
                            'post_type' => 'post',
                            'posts_per_page' => -1, // to get all posts
                        )
                    );

                    $i = 0;
                    $j = 1;
                    foreach ($posts as $post):
                        $i++;
                        $fields = get_fields($post->ID);

                        if ($i % 10 == 1):
                            if ($j > 1) {
                                echo '<p><a href="#group-' . ($j - 1) . '">Back to previous group</a></p>';
                            }
                            echo '<div id="group-' . $j . '" class="group">';
                            $j++;
                        endif;

                        echo '<div class="field">';
                        echo '<h2>' . $fields['news_title'] . '</h2>';
                        echo '<p>' . $fields['news_description'] . '</p>';
                        echo '<img src="' . $fields['news_image']. '" alt="' . $fields['news_image'] . '">';
                        echo '</div>';

                        if ($i % 10 == 0 || $i == count($posts)):
                            if ($i != count($posts)) {
                                echo '<p><a href="#group-' . $j . '">Next group</a></p>';
                            }
                            echo '</div>';
                        endif;

                    endforeach;
                    ?>
                    <!-- <div class="news__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index__splash.jpg" alt=""
                            class="news__item-img" />
                        <div class="news__item-box-1">
                            <div class="news__item-box-11">
                                <h2 class="h2 news__item-name">Название новости</h2>
                                <p class="news__item-description">Краткое описание новости</p>
                            </div>
                            <button class="news__item-button button button_read-more">Читать далее</button>
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
                            <button class="news__item-button button button_read-more">Читать далее</button>
                        </div> -->
                </div>
        </div>
        </main>
    </div>
    <?php get_footer(); ?>
>>>>>>> Stashed changes
</body>

</html>