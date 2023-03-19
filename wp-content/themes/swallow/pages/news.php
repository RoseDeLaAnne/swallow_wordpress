<?php
/*
Template Name: news
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
        <div class="modal">
            <button class="modal__close-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="800" height="800" viewBox="0 0 24 24"
                    class="modal__close-button-icon">
                    <path fill="#fff" fill-rule="evenodd"
                        d="M19.207 6.207a1 1 0 0 0-1.414-1.414L12 10.586 6.207 4.793a1 1 0 0 0-1.414 1.414L10.586 12l-5.793 5.793a1 1 0 1 0 1.414 1.414L12 13.414l5.793 5.793a1 1 0 0 0 1.414-1.414L13.414 12l5.793-5.793z"
                        clip-rule="evenodd" />
                </svg>
            </button>

            <div class="modal__inner">
                <nav class="nav nav_adaptive">
                    <ul class="nav__box-1">
                        <li class="nav__item">
                            <a href="about-community" class="nav__item-link">О сообществе</a>
                            <ul class="nav-dropdown">
                                <li class="nav-dropdown__item">
                                    <a href="about-community" class="nav-dropdown__item-link">О сообществе</a>
                                </li>
                                <li class="nav-dropdown__item">
                                    <a href="team" class="nav-dropdown__item-link">Команда</a>
                                </li>
                                <li class="nav-dropdown__item">
                                    <a href="purposes" class="nav-dropdown__item-link">Цели</a>
                                </li>
                                <li class="nav-dropdown__item">
                                    <a href="tasks" class="nav-dropdown__item-link">Задачи</a>
                                </li>
                                <li class="nav-dropdown__item">
                                    <a href="statutory-documents" class="nav-dropdown__item-link">Уставные документы</a>
                                </li>
                                <li class="nav-dropdown__item">
                                    <a href="reports" class="nav-dropdown__item-link">Отчеты</a>
                                </li>
                                <li class="nav-dropdown__item">
                                    <a href="contacts" class="nav-dropdown__item-link">Контакты</a>
                                </li>
                                <li class="nav-dropdown__item">
                                    <a href="partners" class="nav-dropdown__item-link">Партнёры</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav__item">
                            <a href="news" class="nav__item-link">Материалы</a>
                            <ul class="nav-dropdown">
                                <li class="nav-dropdown__item">
                                    <a href="news" class="nav-dropdown__item-link">Новости</a>
                                </li>
                                <li class="nav-dropdown__item">
                                    <a href="articles" class="nav-dropdown__item-link">Статьи</a>
                                </li>
                                <li class="nav-dropdown__item">
                                    <a href="stories" class="nav-dropdown__item-link">Истории</a>
                                </li>
                                <li class="nav-dropdown__item">
                                    <a href="literature" class="nav-dropdown__item-link">Литература</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav__item">
                            <a href="club" class="nav__item-link">Программы и проекты</a>
                            <ul class="nav-dropdown">
                                <li class="nav-dropdown__item">
                                    <a href="club" class="nav-dropdown__item-link">Клуб приёмных родителей</a>
                                </li>
                                <li class="nav-dropdown__item">
                                    <a href="resource-groups" class="nav-dropdown__item-link">Ресурсные кружки "На
                                        равных"</a>
                                </li>
                                <li class="nav-dropdown__item">
                                    <a href="school" class="nav-dropdown__item-link">Школа осознанного родительства</a>
                                </li>
                                <li class="nav-dropdown__item">
                                    <a href="post-boarding-support" class="nav-dropdown__item-link">Постинтернатное
                                        сопровождение</a>
                                </li>
                                <li class="nav-dropdown__item">
                                    <a href="sos-help" class="nav-dropdown__item-link">Помощь в тяжелой жизненной
                                        ситуации</a>
                                </li>
                                <li class="nav-dropdown__item">
                                    <a href="consultation" class="nav-dropdown__item-link">Консультация специалистов</a>
                                </li>
                                <li class="nav-dropdown__item">
                                    <a href="to-future-parents" class="nav-dropdown__item-link">Будущим приёмным
                                        родителям</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav__item">
                            <a href="employee-offers" class="nav__item-link">Предложения о сотрудниках</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="page__box-1">
            <?php get_header(); ?>
            <main class="main container">
                <h1 class="page__title">
                    <?php the_title(); ?>
                </h1>
                <div class="news__box-1">
                    <?php
                    $posts_per_page = 5; // number of posts to show per page
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // get current page number
                    $args = array(
                        'post_type' => 'post',
                        // your custom post type
                        'posts_per_page' => $posts_per_page,
                        'paged' => $paged,

                        'meta_query' => array(
                            array(
                                'key' => '_wp_page_template',
                                'value' => 'pages/single-news.php', // template name as stored in the dB
                            )
                        )

                    );
                    $loop = new WP_Query($args);
                    if ($loop->have_posts()) {
                        while ($loop->have_posts()) {
                            $loop->the_post();
                            // get ACF fields
                            $post_id = get_the_ID(); // get the ID of the current post
                            $post_url = get_permalink($post_id); // get the URL of the current post

                            $name = get_field('news_title');
                            $description = get_field('news_description');
                            $picture = get_field('news_image');


                            // output the fields
                            echo '<div class="news__item">';
                            echo '<img class="news__item-image" src="' . $picture . '" alt="' . $name . '">';
                            echo '<div class="news__item-box-1">';
                            echo '<div class="news__item-box-11">';
                            echo '<h2 class="news__item-name">' . $name . '</h2>';
                            echo '<p class="news__item-description">' . $description . '</p>';
                            echo '<a href="' . esc_url($post_url) . '" class="news__item-button button button_read-more">Читать далее</a>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                        // add pagination links
                        $total_pages = $loop->max_num_pages;
                        if ($total_pages > 1) {
                            $current_page = max(1, get_query_var('paged'));
                            echo '<div class="pagination">';
                            echo paginate_links(
                                array(
                                    'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                                    'format' => 'news/page/%#%',
                                    'current' => $current_page,
                                    'total' => $total_pages,
                                    'prev_text' => '&laquo;',
                                    'next_text' => '&raquo;',
                                )
                            );
                            echo '</div>';
                        }
                        wp_reset_postdata(); // reset the query
                    } else {
                        echo '<p>No posts found</p>';
                    }
                    ?>
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

        <!-- <div class="news__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index__splash.jpg" alt=""
                            class="news__item-img" />
                        <div class="news__item-box-1">
                            <div class="news__item-box-11">
                                <h2 class="news__item-name">Название новости</h2>
                                <p class="news__item-description">Краткое описание новости</p>
                            </div>
                            <a href="#" class="news__item-button button button_read-more">Читать далее</a>
                        </div>
                    </div> -->
</body>

</html>