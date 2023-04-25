<?php
/*
Template Name: club
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
        <div class="modal modal_nav">
            <button class="modal__close-button modal__close-button_nav">
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
                            <?php
                            $parent_page_slug = 'about-community'; // Replace with the slug of the parent page
                            $parent_page = get_page_by_path($parent_page_slug);
                            $args = array(
                                'child_of' => $parent_page->ID,
                                'sort_order' => 'asc',
                                'sort_column' => 'menu_order',
                            );
                            $pages = get_pages($args);
                            if ($pages) {
                                echo '<ul class="nav-dropdown">';
                                foreach ($pages as $page) {
                                    $link = get_page_link($page->ID);
                                    $title = $page->post_title;
                                    echo '<li class="nav-dropdown__item">';
                                    echo '<a href="' . $link . '" class="nav-dropdown__item-link">' . $title . '</a>';
                                    echo '</li>';
                                }
                                echo '</ul>';
                            }
                            ?>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__item-link">Материалы</a>
                            <?php
                            $parent_page_slug = 'materials'; // Replace with the slug of the parent page
                            $parent_page = get_page_by_path($parent_page_slug);
                            $args = array(
                                'child_of' => $parent_page->ID,
                                'sort_order' => 'asc',
                                'sort_column' => 'menu_order',
                            );
                            $pages = get_pages($args);
                            if ($pages) {
                                echo '<ul class="nav-dropdown">';
                                foreach ($pages as $page) {
                                    $link = get_page_link($page->ID);
                                    $title = $page->post_title;
                                    echo '<li class="nav-dropdown__item">';
                                    echo '<a href="' . $link . '" class="nav-dropdown__item-link">' . $title . '</a>';
                                    echo '</li>';
                                }
                                echo '</ul>';
                            }
                            ?>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__item-link">Программы и проекты</a>
                            <?php
                            $parent_page_slug = 'programs-and-projects'; // Replace with the slug of the parent page
                            $parent_page = get_page_by_path($parent_page_slug);
                            $args = array(
                                'child_of' => $parent_page->ID,
                                'sort_order' => 'asc',
                                'sort_column' => 'menu_order',
                            );
                            $pages = get_pages($args);
                            if ($pages) {
                                echo '<ul class="nav-dropdown">';
                                foreach ($pages as $page) {
                                    $link = get_page_link($page->ID);
                                    $title = $page->post_title;
                                    echo '<li class="nav-dropdown__item">';
                                    echo '<a href="' . $link . '" class="nav-dropdown__item-link">' . $title . '</a>';
                                    echo '</li>';
                                }
                                echo '</ul>';
                            }
                            ?>
                        </li>
                        <li class="nav__item">
                            <a href="cooperation-proposal" class="nav__item-link">Предложения о сотрудничестве</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="page__box-1">
            <?php get_header(); ?>
            <main class="main container">

            </main>
        </div>
        <?php get_footer(); ?>
        <button class="button button_floating-ready-to-help">
            <svg class="svg_ready-to-help" width="68px" height="68px" viewBox="0 0 48 48" >
                <path d="M297.776 47.561C276.72 27.721 240.64 23.193 208 55.833c-32.592-32.608-68.72-28.112-89.776-8.288-24.528 23.088-24.96 61.712-1.312 85.36L208 224.009l91.088-91.088c23.648-23.648 23.216-62.272-1.312-85.36zm-10 74.032L208 201.385l-79.776-79.776c-17.312-17.328-16.976-45.504.976-62.4 7.648-7.232 17.888-11.2 28.832-11.2 22.912 0 33.216 13.696 49.968 30.448 16.304-16.304 26.8-30.448 49.968-30.448 10.944 0 21.184 3.968 28.848 11.184 17.904 16.864 18.32 45.04.96 62.4zM388.656 48.009c-14.096 0-25.792 10.56-27.2 24.576l-10.128 100.016c-4.88 1.04-9.36 3.408-12.832 6.88l-80.816 75.232c-11.12 10.128-17.568 24.576-17.68 39.68v89.616h96v-42.176c0-6.512 2.736-12.848 7.696-17.552l60.72-61.28c7.472-7.552 11.584-17.552 11.584-28.16V75.353c0-15.072-12.272-27.344-27.344-27.344zM400 234.841c0 6.368-2.464 12.368-6.96 16.912l-60.528 61.088c-7.952 7.52-12.512 18.08-12.512 28.992v26.176h-64v-73.52c.08-10.608 4.608-20.768 12.528-27.968l81.072-75.504c2.176-2.176 5.152-3.248 8.304-2.928 1.744.16 4.256.784 6.4 2.928a10.364 10.364 0 0 1 3.056 7.36c0 2.768-1.104 5.392-2.784 7.088l-62.416 56.608 10.752 11.84 62.704-56.88c4.992-4.992 7.744-11.616 7.744-18.672 0-7.056-2.736-13.68-7.728-18.656a25.528 25.528 0 0 0-8.368-5.648l10.096-99.84a11.326 11.326 0 0 1 11.296-10.208c6.256 0 11.344 5.088 11.344 11.344v159.488zM158.32 254.713l-80.816-75.232c-3.472-3.472-7.952-5.856-12.832-6.88L54.544 72.585c-1.408-14.016-13.104-24.576-27.2-24.576C12.272 48.009 0 60.281 0 75.353v159.488c0 10.608 4.112 20.608 11.584 28.144l60.72 61.28c4.96 4.704 7.696 11.056 7.696 17.568v42.176h96v-89.616c-.096-15.104-6.56-29.536-17.68-39.68zM160 368.009H96v-26.176c0-10.896-4.56-21.472-12.512-28.992L22.96 251.753c-4.496-4.544-6.96-10.544-6.96-16.912V75.353c0-6.256 5.088-11.344 11.344-11.344 5.84 0 10.704 4.384 11.296 10.176l10.096 99.84a26.032 26.032 0 0 0-8.368 5.648c-4.976 4.976-7.728 11.6-7.728 18.656 0 7.056 2.752 13.68 7.744 18.672l62.704 56.88 10.752-11.84-62.416-56.608c-1.696-1.696-2.784-4.304-2.784-7.088s1.088-5.392 3.056-7.36c2.128-2.144 4.656-2.768 6.4-2.928 3.168-.304 6.128.752 8.304 2.928l81.072 75.504c7.92 7.2 12.448 17.36 12.528 27.968v73.552z" fill="#ffffff" 
                class="svg_ready-to-help-scale"/>
            </svg>
        </button>

        <div class="modal modal_donate">
            <button class="modal__close-button modal__close-button_donate">
                <svg xmlns="http://www.w3.org/2000/svg" width="800" height="800" viewBox="0 0 24 24"
                    class="modal__close-button-icon">
                    <path fill="#fff" fill-rule="evenodd"
                        d="M19.207 6.207a1 1 0 0 0-1.414-1.414L12 10.586 6.207 4.793a1 1 0 0 0-1.414 1.414L10.586 12l-5.793 5.793a1 1 0 1 0 1.414 1.414L12 13.414l5.793 5.793a1 1 0 0 0 1.414-1.414L13.414 12l5.793-5.793z"
                        clip-rule="evenodd" />
                </svg>
            </button>

            <div class="modal__inner">
                <div class="donate">
                    <div class="donate__box-for-banks">
                        <div class="donate__box-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="410.667" height="410.667" version="1.0"
                            viewBox="0 0 308 308" class="qr-code" fill="#fff">
                            <path
                                d="M26 3.9c-8.2 2.7-14.7 8-18.7 15.4-2.5 4.5-2.5 19.9 0 24.4 7.8 14.3 23.9 19.9 37.9 13C71.1 44 63.5 5.5 34.7 3.5c-3.4-.3-7.3-.1-8.7.4zm14.8 8.6c16.6 7 16.6 31 0 38C25.7 56.7 9.2 42.8 13 27c2.9-12.2 16.4-19.2 27.8-14.5z" />
                            <path
                                d="M29.4 20.1c-7.5 2.1-10.7 11.3-6.2 17.9 8.6 12.7 27.8.4 19.8-12.7-2.9-4.8-8-6.8-13.6-5.2zM78 7v4h-8v49h8V11h8V3h-8v4zM94 11v8h8v8h17v9h-17v8h-8v-8h-8v24h8v-8h8v8h8v-8h8v-4c0-4 0-4 3.9-4 4 0 4 0 4.3-4.3.3-4.2.3-4.2 4.6-4.5l4.3-.3-.3-7.7-.3-7.7-12.2-.3-12.3-.3V3H94v8z" />
                            <path
                                d="M119 7v4h16v8h8v33h-8v8h-9v-4c0-3.9-.1-4-3.5-4s-3.5.1-3.5 4v4h-4c-4 0-4 0-4 3.9 0 4 0 4-4.2 4.3l-4.3.3-.3 12.2-.3 12.3H86v16H62v8h-8v8h8.1l-.3 4.2c-.3 4.2-.4 4.3-4 4.6-3.6.3-3.8.5-3.8 3.8v3.4h24v-3.4c0-3.4-.1-3.5-4.2-3.8l-4.3-.3-.3-8.3-.3-8.2H78v8h8v-16h8v-8h8v16h8v-8h9v8h-8v8h8v4c0 3.9.1 4 3.5 4h3.5v-24h9v8h24v-16h8v-8h-24v16h-8V92h4c3.9 0 4-.1 4-3.5V85h-16v8h-17V76h9v4c0 3.9.1 4 3.5 4h3.4l.3-7.8.3-7.7 4.3-.3 4.2-.3V76h8v8h8v-8h16v-8h-8V52h-8V27h8v7.9c0 9.1 0 9.1 10.8 9.1h6.2v8.1l3.8-.3c3.5-.3 3.7-.5 4-4.3l.3-4 19.9.3 20 .3V36h-40v-8h-8v8h-9v-9h8V11h-3.5c-3.4 0-3.5.1-3.5 4v4h-9V3h-8v8h-16V3h-16v4zm32 53v8h-16v-8h8v-8h8v8z" />
                            <path
                                d="M176 7v4h8v16h8v-8h8v-8h8v16h8V11h8V3h-48v4zM233 11v8h8V3h-8v8zM269.2 4.4c-20.4 6.7-26.7 32.1-11.7 47.1 5.6 5.6 11.6 7.9 20 7.9 11.5 0 20.6-5.7 25.7-16.3 3.1-6.5 3.2-16.9 0-23.2-6.4-13-21.1-19.7-34-15.5zm15.9 8c10.5 4.4 15.7 17.1 11 27.1-7.9 17-31 16.2-38-1.3-2.1-5.1-1-13.5 2.5-18.4 5.4-7.7 16.1-10.9 24.5-7.4z" />
                            <path
                                d="M274.5 19.7c-6.1 1.6-10.4 9-8.5 14.8 3.1 9.3 14.3 11.7 20.4 4.4 5.2-6.1 2.6-15.3-5-18.5-3.5-1.5-3.7-1.5-6.9-.7zM233 40v4h-8v8h8v8h8V36h-8v4zM168 56c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4z" />
                            <path
                                d="M184 56c0 4 0 4-4 4h-3.9l-.3 8.2-.3 8.3-3.7.3-3.8.3V92h3.4c3.3 0 3.5-.2 3.8-3.8.3-3.6.4-3.7 4.6-4l4.2-.3V68h8v17h-4c-3.9 0-4 .1-4 3.5V92h24v-3.5c0-3.4-.1-3.5-4-3.5h-4v-9.1l8.3.3 8.2.3.3 7.7.3 7.8h6.9V76h9v17h-8v8h8v8h8v-8h8v8h8v8h-8v9h-8v8.1l-4.2-.3-4.3-.3-.3-8.3-.3-8.2h-3.4c-3.3 0-3.4.1-3.7 4.2-.3 4.2-.4 4.3-4 4.6-3.6.3-3.8.5-3.8 3.7s.2 3.4 3.8 3.7c3.6.3 3.7.4 4 4.5l.3 4.3H217v23.9l-4.2.3-4.3.3-.3 7.7-.3 7.8h8.1v-8h9v33h3.5c3.4 0 3.5-.1 3.5-3.9 0-4 0-4 4.3-4.3 4.1-.3 4.2-.4 4.5-4 .3-3.7.3-3.7-4-4l-4.3-.3-.3-16.3-.2-16.2h-4c-4 0-4 0-4-4v-4h9v8h8v8h16v16h8v-8h8v-8h-8v-16h-16v-9h8v-8h8v-24h8v-8h-16.1l.3-4.3.3-4.2 7.8-.3 7.7-.3V85h-24v8h-8V76h8v-8h-17v-8h-8v-4c0-3.9-.1-4-3.5-4H217v16h-9V52h-8v8h-8v-8h-8v4zM21 71.9V76h8.1l-.3-3.8c-.3-3.5-.5-3.7-4-4l-3.8-.3v4zM45.7 68.7c-.4.3-.7 2.1-.7 4V76h17v4c0 3.9.1 4 3.4 4s3.5-.2 3.8-3.8l.3-3.7 8.3-.3 8.2-.3V68H66.2c-10.9 0-20.2.3-20.5.7z" />
                            <path
                                d="M257 72v4h33v8h8.1l-.3-7.8-.3-7.7-20.2-.3L257 68v4zM5 89v12h8v16H5v8h8v8h8v-8h8v9h-8v16h-9v-4c0-3.9-.1-4-3.5-4H5v24h3.5c3.4 0 3.5-.1 3.5-4v-4h9v24h8v-8h8v16h8v-16h16v-8h-8v-8h8v-8h-8v-8h-8v8h-8v-9h4c3.9 0 4-.1 4-3.5s-.1-3.5-4-3.5h-4v-9h8v-24h3.9c4 0 4 0 4.3-4.3.3-4.1.4-4.2 4.1-4.5 3.5-.3 3.7-.5 3.7-3.8V85H45v16h-8v-8H21V77H5v12zm32 16v4h-8v8h-8v-16h16v4zm0 53v8h-8v-16h8v8z" />
                            <path
                                d="M37 80.5c0 3.4.1 3.5 4 3.5s4-.1 4-3.5-.1-3.5-4-3.5-4 .1-4 3.5zM78 88.5c0 3.4.1 3.5 4 3.5s4-.1 4-3.5-.1-3.5-4-3.5-4 .1-4 3.5zM298 89v4h-8v8h8v8h8V85h-8v4zM70 97.1v4l3.8-.3c3.5-.3 3.7-.5 4-4.1l.3-3.7H70v4.1zM208 97v4h-8v8h-8v-8h-16v8h16v25h-16v16h-8v8h16v8h-8v25h-9v-8h-8v-8h-8v8h-8v16h8v8h8v8h-16v-8h-8v-15.9l-4.2-.3c-4.2-.3-4.3-.4-4.6-4.1-.3-3.5-.5-3.7-3.8-3.7H119v24h-8v8H86v-8h-8v-8h-8v8h8v8h8v8h8v16h8v-16h16v-8h8v-8h9v16h33v4c0 3.9.1 4 3.5 4s3.5-.1 3.5-4v-4h17v8h8v17h-16v8h-9v-8h-8v-8h-16.1l.3 3.7c.3 3.6.5 3.8 4 4.1 3.5.3 3.7.5 4 4 .3 3.6.4 3.7 4.6 4 4.2.3 4.2.3 4.2 4.3v3.9h16v16h8v-8h8v-24h8v-17h8v-8h-8v-16h8v-16h-16v32h-8v-32h-8v-17h16v-8h-8v-25h24v-3.5c0-3.4-.1-3.5-4-3.5h-4v-8h-8v-9h8v-16h8v-8h-8v4zm-49 97.5v4.5h-8v-9h8v4.5zm17 8.5v4h-9v-8h9v4zm16 57v4h-8v-8h8v4zM274 97c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4zM54 105c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4zM282 105c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4z" />
                            <path
                                d="M168 117v8h7v-16h-7v8zM217 113c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4zM274 121c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4zM45 129.5c0 3.4.1 3.5 4 3.5s4-.1 4-3.5-.1-3.5-4-3.5-4 .1-4 3.5zM86 129.5v3.5h24v-7H86v3.5zM298 133.5v7.5h8v-15h-8v7.5zM111 137.5c0 3.3.2 3.5 3.5 3.5s3.5-.2 3.5-3.5-.2-3.5-3.5-3.5-3.5.2-3.5 3.5zM127 137.5c0 3.4.1 3.5 4 3.5s4-.1 4-3.5-.1-3.5-4-3.5-4 .1-4 3.5zM159 138v4h-8v8h-32v8h-8v24h3.5c3.4 0 3.5-.1 3.5-4v-4h9v8h16v-3.5c0-3.4-.1-3.5-3.9-3.5-4 0-4 0-4.3-4.3-.3-4.2-.3-4.2-4.5-4.5-4.3-.3-4.3-.3-4.3-4.3V158h17v16h8v-8h16v-8h-16v-8h16v-16h-8v4zM265.2 141.7l.3 7.8 4.3.3c4.2.3 4.2.3 4.2 4.3 0 3.8.1 3.9 3.5 3.9h3.5v-16h-8v-8h-8.1l.3 7.7zM78 146v4h-8v8h8v8h-8v8h24v-8h8v-8h-8v-8h8v-8H78v4zm16 16v4h-8v-8h8v4zM298 158v8h-16v8h8v8h8v9h-8v8h-8v8h8v8h16v-40h-8v-9h8v-16h-8v8zM62 162c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4zM5 182.5v7.5h7v-15H5v7.5zM61.8 178.7c-.3 3.6-.5 3.8-4 4.1-3.6.3-3.8.5-3.8 3.8v3.4h24v-3.4c0-3.4-.1-3.5-4.2-3.8-4.2-.3-4.3-.4-4.6-4.1-.3-3.5-.5-3.7-3.7-3.7s-3.4.2-3.7 3.7zM241 178.5c0 3.4.1 3.5 4 3.5s4-.1 4-3.5-.1-3.5-4-3.5-4 .1-4 3.5zM274 178.5c0 3.3.2 3.5 3.5 3.5s3.5-.2 3.5-3.5-.2-3.5-3.5-3.5-3.5.2-3.5 3.5zM94 186.5c0 3.4.1 3.5 4 3.5s4-.1 4-3.5-.1-3.5-4-3.5-4 .1-4 3.5zM192 186.5c0 3.4.1 3.5 4 3.5s4-.1 4-3.5-.1-3.5-4-3.5-4 .1-4 3.5zM13 195v4H5v8h8v8H5v8h24v16h16v-3.5c0-3.4-.1-3.5-4-3.5h-4v-9h8v-8h8v-8h-8v-8H29v-8H13v4zm16 16v4h8v-8h8v8h-8v8h-8v-8h-4c-3.6 0-4-.3-4-2.4 0-1.3-.3-3.1-.6-4-.5-1.3.2-1.6 4-1.6H29v4zM45.2 194.7c.3 3.6.5 3.8 4.1 4.1l3.7.3V191h-8.1l.3 3.7zM102 199v8h8v-16h-8v8zM249 195v4h8v16h-8v8h-8v9h-16v8h-8v16h16v8h-8v8h-8v25h3.4c3.4 0 3.5-.1 3.8-4.3.3-4.2.3-4.2 4.3-4.2s4 0 4.3 4.3l.3 4.2H225v8.1l7.8-.3 7.7-.3.3-3.7c.3-3.5.5-3.7 4-4 3.6-.3 3.7-.4 4-4.6l.3-4.2H265v-16h9v4c0 3.9.1 4 3.5 4s3.5-.1 3.5-4v-4h8v-8h9v8h8v-24h-16v8h-8v8h-9v-8h8v-16h-8v-8h-16v-17h8v-24h-16v4zm16 56.5V264h-24v-25h24v12.5zm-8 25v4.5h-16v-9h16v4.5z" />
                            <path
                                d="M249 252v4h8v-8h-8v4zM274 195c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4zM54 203c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4zM62 211c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4zM54 219c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4zM70 218.9v4.1h8v8h8.1l-.3-3.8c-.3-3.5-.5-3.7-4-4-3.5-.3-3.7-.5-4-4-.3-3.5-.5-3.7-4-4l-3.8-.3v4zM217 219v4h15v-8h-15v4zM62 227c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4zM127 226.9v4.1h8.1l-.3-3.8c-.3-3.5-.5-3.7-4-4l-3.8-.3v4zM274 227c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4zM290 231v8h16.1l-.3-7.8-.3-7.7-7.7-.3-7.8-.3v8.1zM5 235.5v3.5h16v-7H5v3.5zM54 235.5c0 3.3.2 3.5 3.5 3.5s3.5-.2 3.5-3.5-.2-3.5-3.5-3.5-3.5.2-3.5 3.5zM70 248v16h8v8h8v25h-8v8h16v-17h3.9c4 0 4 0 4.3 4.3.3 4.2.3 4.2 4.6 4.5 4.2.3 4.2.3 4.2 4.3 0 3.8.1 3.9 3.5 3.9s3.5-.1 3.5-4v-3.9l8.3-.3 8.2-.3.3-4.3c.3-4.2.3-4.2 4.3-4.2h3.9v-16h16v-8h-8v-16h-8v8h-4c-4 0-4 0-4-3.9 0-4 0-4-4.2-4.3l-4.3-.3-.3-7.8-.3-7.7H111v24h24v25.1l-4.2-.3-4.3-.3-.3-8.3-.3-8.3-11.7.3-11.7.3-.3 3.7-.3 3.8H119v17h-9v-8H94v-9h-8v-8h8v-8h8v-8h-8v8h-8v8h-8v-15.9l3.8-.3c3.5-.3 3.7-.5 4-4.1l.3-3.7H78v-8h-8v16zM143 235.5c0 3.4.1 3.5 4 3.5s4-.1 4-3.5-.1-3.5-4-3.5-4 .1-4 3.5zM23.9 249.6C13.3 252.8 5 264.2 5 275.6c0 16.7 11.8 28.8 28.1 28.8 26.2 0 37.8-32.6 17.7-49.8-7.1-6.1-17.3-8-26.9-5zm17.7 8.3c14.4 6.6 15.8 26.2 2.5 35.6-3.7 2.6-5.1 3-11 3-5.7 0-7.4-.4-11-2.8-13.5-8.9-12.6-28.1 1.8-35.7 4.6-2.5 12.4-2.5 17.7-.1z" />
                            <path
                                d="M28.5 265.4c-4.3 1.9-6.6 4.9-7.2 9.4-1.3 9.8 8.7 16.3 17.8 11.6 3.1-1.6 5.9-6.6 5.9-10.6 0-3.6-3.7-8.8-7.5-10.4-4.2-1.7-5.1-1.7-9 0zM208 260v4h8v-8h-8v4zM290 284.4V297h8v8h8v-24h-3.9c-4 0-4 0-4.3-4.3-.3-4.1-.4-4.2-4-4.5l-3.8-.3v12.5zM70 284.5c0 3.4.1 3.5 4 3.5s4-.1 4-3.5-.1-3.5-4-3.5-4 .1-4 3.5zM151 284.5v3.5h24v-7h-24v3.5zM192 284.5c0 3.4.1 3.5 4 3.5s4-.1 4-3.5-.1-3.5-4-3.5-4 .1-4 3.5zM176 293v4h-25v8l16.3-.2 16.2-.3.3-7.8.3-7.7H176v4zM265.2 296.7l.3 7.8 11.8.3 11.7.3V297h-8v-8h-16.1l.3 7.7zM135 301v4h8v-8h-8v4zM192 301v4h24v-8h-24v4z" />
                        </svg>
                        <p class="donate__text"><span>Для перевода, пожалуйста нажмите на кнопку ниже</span><a href="https://platiqr.ru/?uuid=1000447576" class="banks-button_adaptive-sber">Пожертвовать через Сбербанк</a></p>
                    </div>
                    <div class="donate__box-1">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="984" height="984" viewBox="0 0 984 984" class="qr-code"><rect width="984" height="984" fill="#ffffff" x="0" y="0"/><g fill="#000000">
<g transform="translate(264,48) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,48) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,48) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,48) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,48) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,48) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,48) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,48) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,48) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,48) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,48) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,72) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,72) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,72) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,72) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,72) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,72) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,72) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,72) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,72) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,96) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,96) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,96) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,96) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,96) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,96) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,96) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,96) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,96) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,96) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,144) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,144) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,144) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,144) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,144) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,144) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,144) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,144) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,144) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,192) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,192) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,192) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,192) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,192) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,192) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,192) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,192) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,192) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,192) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,192) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,216) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,216) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,216) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,216) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,216) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,216) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,216) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(48,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(96,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(144,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(168,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(192,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(168,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(216,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(48,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(96,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(192,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(48,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(168,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(744,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(144,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(168,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(192,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(744,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(168,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(216,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(744,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(96,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(144,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(192,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(216,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(96,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(168,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(216,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(96,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(192,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(216,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(744,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(144,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(72,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(96,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(192,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(48,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(144,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(48,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(144,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(192,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(216,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(168,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(72,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(96,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(144,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(168,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(192,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(744,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(216,600) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,600) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,600) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,600) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,600) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,600) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,600) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,600) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,600) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(48,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(144,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(168,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(192,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(744,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(48,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(72,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(96,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(144,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(168,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(216,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(48,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(144,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(192,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(744,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(48,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(96,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(168,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(48,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(144,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(192,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(744,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(744,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(744,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(744,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(48,48)"><g transform="scale(12)"><path d="M0,0v14h14V0H0z M12,12H2V2h10V12z"/></g></g>
<g transform="translate(768,48)"><g transform="scale(12)"><path d="M0,0v14h14V0H0z M12,12H2V2h10V12z"/></g></g>
<g transform="translate(48,768)"><g transform="scale(12)"><path d="M0,0v14h14V0H0z M12,12H2V2h10V12z"/></g></g>
<g transform="translate(96,96)"><g transform="scale(12)"><rect width="6" height="6"/></g></g>
<g transform="translate(816,96)"><g transform="scale(12)"><rect width="6" height="6"/></g></g>
<g transform="translate(96,816)"><g transform="scale(12)"><rect width="6" height="6"/></g></g>
</g></svg>
                        <p class="donate__text"><span>Для перевода, пожалуйста нажмите на кнопку ниже</span><a href="https://qr.nspk.ru/BS1A0026DREIOF469P8BNTCDD0LVOE0T?type=01&bank=100000000008&crc=8919" class="banks-button_adaptive-alpha">Пожертвовать через Альфа Банк</a></p>
                    </div>
                    </div>
                    <div class="donate__box-1" id="donate-sber">
                        <svg viewBox="0 0 103 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="sber-logo"><title>СберБанк</title><defs><linearGradient x1="59.0074847%" y1="96.2929688%" x2="38.7857471%" y2="-0.146354167%" id="linearGradient-1"><stop stop-color="#F2E913" offset="14.44%"/><stop stop-color="#E7E518" offset="30.37%"/><stop stop-color="#CADB26" offset="58.23%"/><stop stop-color="#A3CD39" offset="89.1%"/></linearGradient><linearGradient x1="8.68515625%" y1="58.3771408%" x2="94.6151042%" y2="38.6562394%" id="linearGradient-2"><stop stop-color="#0FA8E0" offset="5.92%"/><stop stop-color="#0099F9" offset="53.85%"/><stop stop-color="#0291EB" offset="92.34%"/></linearGradient><linearGradient x1="-1.7890625%" y1="56.9810291%" x2="95.3828125%" y2="43.7548231%" id="linearGradient-3"><stop stop-color="#A3CD39" offset="12.26%"/><stop stop-color="#86C339" offset="28.46%"/><stop stop-color="#21A038" offset="86.93%"/></linearGradient><linearGradient x1="-7.53573668%" y1="40.2466885%" x2="92.4727273%" y2="58.1809607%" id="linearGradient-4"><stop stop-color="#0291EB" offset="5.66%"/><stop stop-color="#0C8ACB" offset="79%"/></linearGradient><linearGradient x1="7.91196809%" y1="39.8389621%" x2="100.269415%" y2="62.3435198%" id="linearGradient-5"><stop stop-color="#F2E913" offset="13.24%"/><stop stop-color="#EBE716" offset="29.77%"/><stop stop-color="#D9E01F" offset="53.06%"/><stop stop-color="#BBD62D" offset="80.23%"/><stop stop-color="#A3CD39" offset="98.29%"/></linearGradient><linearGradient x1="36.1894427%" y1="103.758511%" x2="60.5224873%" y2="7.31835106%" id="linearGradient-6"><stop stop-color="#A3CD39" offset="6.98%"/><stop stop-color="#81C55F" offset="25.99%"/><stop stop-color="#0FA8E0" offset="92.16%"/></linearGradient></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="SB_RUS_RGB" fill-rule="nonzero"><polygon id="Path" fill="#21A038" points="46.0543807 4.86213592 48.2015106 3.2776699 41.0132931 3.2776699 41.0132931 12.768932 48.2015106 12.768932 48.2015106 11.184466 43.0670695 11.184466 43.0670695 8.76116505 47.4546828 8.76116505 47.4546828 7.17669903 43.0670695 7.17669903 43.0670695 4.86213592"/><path d="M35.5832326,6.97475728 L33.0938066,6.97475728 L33.0938066,4.86213592 L37.0768882,4.86213592 L39.2240181,3.2776699 L31.0400302,3.2776699 L31.0400302,12.768932 L35.3187311,12.768932 C37.7148036,12.768932 39.0995468,11.6815534 39.0995468,9.78640777 C39.0995468,7.96893204 37.8548338,6.97475728 35.5832326,6.97475728 Z M35.2409366,11.184466 L33.0938066,11.184466 L33.0938066,8.5592233 L35.2409366,8.5592233 C36.5478852,8.5592233 37.1546828,8.99417476 37.1546828,9.87961165 C37.1546828,10.7650485 36.5012085,11.184466 35.2409366,11.184466 Z" id="Shape" fill="#21A038"/><path d="M54.0205438,3.2776699 L50.1152568,3.2776699 L50.1152568,12.768932 L52.1690332,12.768932 L52.1690332,10.0815534 L54.0361027,10.0815534 C56.5255287,10.0815534 58.0814199,8.77669903 58.0814199,6.67961165 C58.0814199,4.58252427 56.5255287,3.2776699 54.0205438,3.2776699 Z M53.9738671,8.49708738 L52.1534743,8.49708738 L52.1534743,4.86213592 L53.9738671,4.86213592 C55.2963746,4.86213592 56.0120846,5.51456311 56.0120846,6.67961165 C56.0120846,7.84466019 55.2963746,8.49708738 53.9738671,8.49708738 Z" id="Shape" fill="#21A038"/><path d="M27.523716,10.7184466 C26.9791541,11.0135922 26.3723565,11.168932 25.75,11.168932 C23.8984894,11.168932 22.560423,9.84854369 22.560423,8.03106796 C22.560423,6.21359223 23.8984894,4.89320388 25.75,4.89320388 C26.4190332,4.8776699 27.0725076,5.09514563 27.6170695,5.48349515 L29.0951662,4.3961165 L29.0951662,4.3961165 L29.0018127,4.30291262 C28.1460725,3.54174757 26.994713,3.15339806 25.6877644,3.15339806 C24.2719033,3.15339806 22.9805136,3.63495146 22.0469789,4.50485437 C21.1134441,5.40582524 20.5844411,6.66407767 20.6155589,7.96893204 C20.6,9.28932039 21.1134441,10.5631068 22.0469789,11.4951456 C23.0271903,12.4116505 24.334139,12.9242718 25.6722054,12.8932039 C27.1503021,12.8932039 28.4416918,12.3805825 29.3129909,11.4485437 L27.9904834,10.4699029 L27.523716,10.7184466 Z" id="Path" fill="#21A038"/><path d="M82.7734139,3.29320388 L82.7734139,12.784466 L84.8271903,12.784466 L84.8271903,8.90097087 L89.1992447,8.90097087 L89.1992447,12.784466 L91.2530211,12.784466 L91.2530211,3.29320388 L89.1992447,3.29320388 L89.1992447,7.19223301 L84.8271903,7.19223301 L84.8271903,3.29320388 L82.7734139,3.29320388 Z M79.2415408,12.784466 L81.4042296,12.784466 L77.3900302,3.29320388 L75.305136,3.29320388 L71.213142,12.784466 L73.2824773,12.784466 L74.1070997,10.8737864 L78.4635952,10.8737864 L79.2415408,12.784466 Z M74.7294562,9.28932039 L76.3164653,5.48349515 L77.8101208,9.28932039 L74.7294562,9.28932039 Z M95.8584592,8.94757282 L97.13429,8.94757282 L100.27719,12.768932 L102.922205,12.768932 L98.7212991,7.86019417 L102.393202,3.2776699 L100.043807,3.2776699 L96.9942598,7.34757282 L95.8584592,7.34757282 L95.8584592,3.2776699 L93.8046828,3.2776699 L93.8046828,12.768932 L95.8584592,12.768932 L95.8584592,8.94757282 Z M64.4294562,6.99029126 L64.4294562,4.8776699 L69.797281,4.8776699 L69.797281,3.29320388 L62.3756798,3.29320388 L62.3756798,12.784466 L66.6543807,12.784466 C69.0504532,12.784466 70.4351964,11.6970874 70.4351964,9.80194175 C70.4351964,7.98446602 69.1904834,6.99029126 66.9188822,6.99029126 L64.4294562,6.99029126 L64.4294562,6.99029126 Z M64.4294562,11.2 L64.4294562,8.57475728 L66.5765861,8.57475728 C67.8835347,8.57475728 68.4903323,9.00970874 68.4903323,9.89514563 C68.4903323,10.7805825 67.8524169,11.215534 66.5765861,11.215534 L64.4294562,11.215534 L64.4294562,11.2 Z" id="Shape" fill="#21A038"/><g id="Group"><path d="M14.1897281,3.21553398 C14.563142,3.69708738 14.8743202,4.22524272 15.1388218,4.78446602 L7.95060423,10.0815534 L4.93217523,8.18640777 L4.93217523,5.9184466 L7.93504532,7.79805825 L14.1897281,3.21553398 Z" id="Path" fill="#21A038"/><g transform="translate(0.000000, 0.155340)" id="Path"><path d="M1.86706949,7.87572816 C1.86706949,7.76699029 1.86706949,7.67378641 1.8826284,7.56504854 L0.0622356495,7.47184466 C0.0622356495,7.5961165 0.0466767372,7.73592233 0.0466767372,7.86019417 C0.0466767372,10.0349515 0.933534743,12.007767 2.36495468,13.4368932 L3.65634441,12.1475728 C2.55166163,11.0601942 1.86706949,9.55339806 1.86706949,7.87572816 Z" fill="url(#linearGradient-1)"/><path d="M7.93504532,1.81747573 C8.0439577,1.81747573 8.13731118,1.81747573 8.24622356,1.83300971 L8.33957704,0.0155339806 C8.21510574,0.0155339806 8.07507553,-2.20751141e-15 7.95060423,-2.20751141e-15 C5.7723565,-2.20751141e-15 3.79637462,0.885436893 2.36495468,2.31456311 L3.65634441,3.6038835 C4.74546828,2.50097087 6.27024169,1.81747573 7.93504532,1.81747573 Z" fill="url(#linearGradient-2)"/><path d="M7.93504532,13.9339806 C7.82613293,13.9339806 7.73277946,13.9339806 7.62386707,13.9184466 L7.5305136,15.7359223 C7.65498489,15.7359223 7.79501511,15.7514563 7.9194864,15.7514563 C10.0977341,15.7514563 12.073716,14.8660194 13.505136,13.4368932 L12.2137462,12.1475728 C11.1246224,13.2660194 9.61540785,13.9339806 7.93504532,13.9339806 Z" fill="url(#linearGradient-3)"/></g><g id="Path"><path d="M11.358006,3.02912621 L12.8983384,1.89514563 C11.544713,0.80776699 9.81767372,0.139805825 7.93504532,0.139805825 L7.93504532,0.139805825 L7.93504532,1.95728155 C9.21087613,1.97281553 10.3933535,2.36116505 11.358006,3.02912621 Z" fill="url(#linearGradient-4)"/><path d="M15.8389728,8.03106796 C15.8389728,7.54951456 15.7922961,7.08349515 15.7145015,6.61747573 L14.0185801,7.87572816 C14.0185801,7.9223301 14.0185801,7.98446602 14.0185801,8.03106796 C14.0185801,9.81747573 13.2406344,11.4174757 12.0114804,12.5203883 L13.2406344,13.8718447 C14.8276435,12.4427184 15.8389728,10.3456311 15.8389728,8.03106796 Z" fill="#21A038"/><path d="M7.93504532,14.0893204 C6.14577039,14.0893204 4.54320242,13.3126214 3.43851964,12.0854369 L2.08489426,13.3126214 C3.53187311,14.9126214 5.61676737,15.9067961 7.93504532,15.9067961 L7.93504532,14.0893204 L7.93504532,14.0893204 Z" fill="url(#linearGradient-5)"/><path d="M3.87416918,3.54174757 L2.64501511,2.19029126 C1.04244713,3.63495146 0.0466767372,5.71650485 0.0466767372,8.03106796 L1.86706949,8.03106796 C1.86706949,6.26019417 2.64501511,4.64466019 3.87416918,3.54174757 Z" fill="url(#linearGradient-6)"/></g></g></g></g></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="410.667" height="410.667" version="1.0"
                            viewBox="0 0 308 308" class="qr-code" fill="#fff">
                            <path
                                d="M26 3.9c-8.2 2.7-14.7 8-18.7 15.4-2.5 4.5-2.5 19.9 0 24.4 7.8 14.3 23.9 19.9 37.9 13C71.1 44 63.5 5.5 34.7 3.5c-3.4-.3-7.3-.1-8.7.4zm14.8 8.6c16.6 7 16.6 31 0 38C25.7 56.7 9.2 42.8 13 27c2.9-12.2 16.4-19.2 27.8-14.5z" />
                            <path
                                d="M29.4 20.1c-7.5 2.1-10.7 11.3-6.2 17.9 8.6 12.7 27.8.4 19.8-12.7-2.9-4.8-8-6.8-13.6-5.2zM78 7v4h-8v49h8V11h8V3h-8v4zM94 11v8h8v8h17v9h-17v8h-8v-8h-8v24h8v-8h8v8h8v-8h8v-4c0-4 0-4 3.9-4 4 0 4 0 4.3-4.3.3-4.2.3-4.2 4.6-4.5l4.3-.3-.3-7.7-.3-7.7-12.2-.3-12.3-.3V3H94v8z" />
                            <path
                                d="M119 7v4h16v8h8v33h-8v8h-9v-4c0-3.9-.1-4-3.5-4s-3.5.1-3.5 4v4h-4c-4 0-4 0-4 3.9 0 4 0 4-4.2 4.3l-4.3.3-.3 12.2-.3 12.3H86v16H62v8h-8v8h8.1l-.3 4.2c-.3 4.2-.4 4.3-4 4.6-3.6.3-3.8.5-3.8 3.8v3.4h24v-3.4c0-3.4-.1-3.5-4.2-3.8l-4.3-.3-.3-8.3-.3-8.2H78v8h8v-16h8v-8h8v16h8v-8h9v8h-8v8h8v4c0 3.9.1 4 3.5 4h3.5v-24h9v8h24v-16h8v-8h-24v16h-8V92h4c3.9 0 4-.1 4-3.5V85h-16v8h-17V76h9v4c0 3.9.1 4 3.5 4h3.4l.3-7.8.3-7.7 4.3-.3 4.2-.3V76h8v8h8v-8h16v-8h-8V52h-8V27h8v7.9c0 9.1 0 9.1 10.8 9.1h6.2v8.1l3.8-.3c3.5-.3 3.7-.5 4-4.3l.3-4 19.9.3 20 .3V36h-40v-8h-8v8h-9v-9h8V11h-3.5c-3.4 0-3.5.1-3.5 4v4h-9V3h-8v8h-16V3h-16v4zm32 53v8h-16v-8h8v-8h8v8z" />
                            <path
                                d="M176 7v4h8v16h8v-8h8v-8h8v16h8V11h8V3h-48v4zM233 11v8h8V3h-8v8zM269.2 4.4c-20.4 6.7-26.7 32.1-11.7 47.1 5.6 5.6 11.6 7.9 20 7.9 11.5 0 20.6-5.7 25.7-16.3 3.1-6.5 3.2-16.9 0-23.2-6.4-13-21.1-19.7-34-15.5zm15.9 8c10.5 4.4 15.7 17.1 11 27.1-7.9 17-31 16.2-38-1.3-2.1-5.1-1-13.5 2.5-18.4 5.4-7.7 16.1-10.9 24.5-7.4z" />
                            <path
                                d="M274.5 19.7c-6.1 1.6-10.4 9-8.5 14.8 3.1 9.3 14.3 11.7 20.4 4.4 5.2-6.1 2.6-15.3-5-18.5-3.5-1.5-3.7-1.5-6.9-.7zM233 40v4h-8v8h8v8h8V36h-8v4zM168 56c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4z" />
                            <path
                                d="M184 56c0 4 0 4-4 4h-3.9l-.3 8.2-.3 8.3-3.7.3-3.8.3V92h3.4c3.3 0 3.5-.2 3.8-3.8.3-3.6.4-3.7 4.6-4l4.2-.3V68h8v17h-4c-3.9 0-4 .1-4 3.5V92h24v-3.5c0-3.4-.1-3.5-4-3.5h-4v-9.1l8.3.3 8.2.3.3 7.7.3 7.8h6.9V76h9v17h-8v8h8v8h8v-8h8v8h8v8h-8v9h-8v8.1l-4.2-.3-4.3-.3-.3-8.3-.3-8.2h-3.4c-3.3 0-3.4.1-3.7 4.2-.3 4.2-.4 4.3-4 4.6-3.6.3-3.8.5-3.8 3.7s.2 3.4 3.8 3.7c3.6.3 3.7.4 4 4.5l.3 4.3H217v23.9l-4.2.3-4.3.3-.3 7.7-.3 7.8h8.1v-8h9v33h3.5c3.4 0 3.5-.1 3.5-3.9 0-4 0-4 4.3-4.3 4.1-.3 4.2-.4 4.5-4 .3-3.7.3-3.7-4-4l-4.3-.3-.3-16.3-.2-16.2h-4c-4 0-4 0-4-4v-4h9v8h8v8h16v16h8v-8h8v-8h-8v-16h-16v-9h8v-8h8v-24h8v-8h-16.1l.3-4.3.3-4.2 7.8-.3 7.7-.3V85h-24v8h-8V76h8v-8h-17v-8h-8v-4c0-3.9-.1-4-3.5-4H217v16h-9V52h-8v8h-8v-8h-8v4zM21 71.9V76h8.1l-.3-3.8c-.3-3.5-.5-3.7-4-4l-3.8-.3v4zM45.7 68.7c-.4.3-.7 2.1-.7 4V76h17v4c0 3.9.1 4 3.4 4s3.5-.2 3.8-3.8l.3-3.7 8.3-.3 8.2-.3V68H66.2c-10.9 0-20.2.3-20.5.7z" />
                            <path
                                d="M257 72v4h33v8h8.1l-.3-7.8-.3-7.7-20.2-.3L257 68v4zM5 89v12h8v16H5v8h8v8h8v-8h8v9h-8v16h-9v-4c0-3.9-.1-4-3.5-4H5v24h3.5c3.4 0 3.5-.1 3.5-4v-4h9v24h8v-8h8v16h8v-16h16v-8h-8v-8h8v-8h-8v-8h-8v8h-8v-9h4c3.9 0 4-.1 4-3.5s-.1-3.5-4-3.5h-4v-9h8v-24h3.9c4 0 4 0 4.3-4.3.3-4.1.4-4.2 4.1-4.5 3.5-.3 3.7-.5 3.7-3.8V85H45v16h-8v-8H21V77H5v12zm32 16v4h-8v8h-8v-16h16v4zm0 53v8h-8v-16h8v8z" />
                            <path
                                d="M37 80.5c0 3.4.1 3.5 4 3.5s4-.1 4-3.5-.1-3.5-4-3.5-4 .1-4 3.5zM78 88.5c0 3.4.1 3.5 4 3.5s4-.1 4-3.5-.1-3.5-4-3.5-4 .1-4 3.5zM298 89v4h-8v8h8v8h8V85h-8v4zM70 97.1v4l3.8-.3c3.5-.3 3.7-.5 4-4.1l.3-3.7H70v4.1zM208 97v4h-8v8h-8v-8h-16v8h16v25h-16v16h-8v8h16v8h-8v25h-9v-8h-8v-8h-8v8h-8v16h8v8h8v8h-16v-8h-8v-15.9l-4.2-.3c-4.2-.3-4.3-.4-4.6-4.1-.3-3.5-.5-3.7-3.8-3.7H119v24h-8v8H86v-8h-8v-8h-8v8h8v8h8v8h8v16h8v-16h16v-8h8v-8h9v16h33v4c0 3.9.1 4 3.5 4s3.5-.1 3.5-4v-4h17v8h8v17h-16v8h-9v-8h-8v-8h-16.1l.3 3.7c.3 3.6.5 3.8 4 4.1 3.5.3 3.7.5 4 4 .3 3.6.4 3.7 4.6 4 4.2.3 4.2.3 4.2 4.3v3.9h16v16h8v-8h8v-24h8v-17h8v-8h-8v-16h8v-16h-16v32h-8v-32h-8v-17h16v-8h-8v-25h24v-3.5c0-3.4-.1-3.5-4-3.5h-4v-8h-8v-9h8v-16h8v-8h-8v4zm-49 97.5v4.5h-8v-9h8v4.5zm17 8.5v4h-9v-8h9v4zm16 57v4h-8v-8h8v4zM274 97c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4zM54 105c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4zM282 105c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4z" />
                            <path
                                d="M168 117v8h7v-16h-7v8zM217 113c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4zM274 121c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4zM45 129.5c0 3.4.1 3.5 4 3.5s4-.1 4-3.5-.1-3.5-4-3.5-4 .1-4 3.5zM86 129.5v3.5h24v-7H86v3.5zM298 133.5v7.5h8v-15h-8v7.5zM111 137.5c0 3.3.2 3.5 3.5 3.5s3.5-.2 3.5-3.5-.2-3.5-3.5-3.5-3.5.2-3.5 3.5zM127 137.5c0 3.4.1 3.5 4 3.5s4-.1 4-3.5-.1-3.5-4-3.5-4 .1-4 3.5zM159 138v4h-8v8h-32v8h-8v24h3.5c3.4 0 3.5-.1 3.5-4v-4h9v8h16v-3.5c0-3.4-.1-3.5-3.9-3.5-4 0-4 0-4.3-4.3-.3-4.2-.3-4.2-4.5-4.5-4.3-.3-4.3-.3-4.3-4.3V158h17v16h8v-8h16v-8h-16v-8h16v-16h-8v4zM265.2 141.7l.3 7.8 4.3.3c4.2.3 4.2.3 4.2 4.3 0 3.8.1 3.9 3.5 3.9h3.5v-16h-8v-8h-8.1l.3 7.7zM78 146v4h-8v8h8v8h-8v8h24v-8h8v-8h-8v-8h8v-8H78v4zm16 16v4h-8v-8h8v4zM298 158v8h-16v8h8v8h8v9h-8v8h-8v8h8v8h16v-40h-8v-9h8v-16h-8v8zM62 162c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4zM5 182.5v7.5h7v-15H5v7.5zM61.8 178.7c-.3 3.6-.5 3.8-4 4.1-3.6.3-3.8.5-3.8 3.8v3.4h24v-3.4c0-3.4-.1-3.5-4.2-3.8-4.2-.3-4.3-.4-4.6-4.1-.3-3.5-.5-3.7-3.7-3.7s-3.4.2-3.7 3.7zM241 178.5c0 3.4.1 3.5 4 3.5s4-.1 4-3.5-.1-3.5-4-3.5-4 .1-4 3.5zM274 178.5c0 3.3.2 3.5 3.5 3.5s3.5-.2 3.5-3.5-.2-3.5-3.5-3.5-3.5.2-3.5 3.5zM94 186.5c0 3.4.1 3.5 4 3.5s4-.1 4-3.5-.1-3.5-4-3.5-4 .1-4 3.5zM192 186.5c0 3.4.1 3.5 4 3.5s4-.1 4-3.5-.1-3.5-4-3.5-4 .1-4 3.5zM13 195v4H5v8h8v8H5v8h24v16h16v-3.5c0-3.4-.1-3.5-4-3.5h-4v-9h8v-8h8v-8h-8v-8H29v-8H13v4zm16 16v4h8v-8h8v8h-8v8h-8v-8h-4c-3.6 0-4-.3-4-2.4 0-1.3-.3-3.1-.6-4-.5-1.3.2-1.6 4-1.6H29v4zM45.2 194.7c.3 3.6.5 3.8 4.1 4.1l3.7.3V191h-8.1l.3 3.7zM102 199v8h8v-16h-8v8zM249 195v4h8v16h-8v8h-8v9h-16v8h-8v16h16v8h-8v8h-8v25h3.4c3.4 0 3.5-.1 3.8-4.3.3-4.2.3-4.2 4.3-4.2s4 0 4.3 4.3l.3 4.2H225v8.1l7.8-.3 7.7-.3.3-3.7c.3-3.5.5-3.7 4-4 3.6-.3 3.7-.4 4-4.6l.3-4.2H265v-16h9v4c0 3.9.1 4 3.5 4s3.5-.1 3.5-4v-4h8v-8h9v8h8v-24h-16v8h-8v8h-9v-8h8v-16h-8v-8h-16v-17h8v-24h-16v4zm16 56.5V264h-24v-25h24v12.5zm-8 25v4.5h-16v-9h16v4.5z" />
                            <path
                                d="M249 252v4h8v-8h-8v4zM274 195c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4zM54 203c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4zM62 211c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4zM54 219c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4zM70 218.9v4.1h8v8h8.1l-.3-3.8c-.3-3.5-.5-3.7-4-4-3.5-.3-3.7-.5-4-4-.3-3.5-.5-3.7-4-4l-3.8-.3v4zM217 219v4h15v-8h-15v4zM62 227c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4zM127 226.9v4.1h8.1l-.3-3.8c-.3-3.5-.5-3.7-4-4l-3.8-.3v4zM274 227c0 3.9.1 4 3.5 4s3.5-.1 3.5-4-.1-4-3.5-4-3.5.1-3.5 4zM290 231v8h16.1l-.3-7.8-.3-7.7-7.7-.3-7.8-.3v8.1zM5 235.5v3.5h16v-7H5v3.5zM54 235.5c0 3.3.2 3.5 3.5 3.5s3.5-.2 3.5-3.5-.2-3.5-3.5-3.5-3.5.2-3.5 3.5zM70 248v16h8v8h8v25h-8v8h16v-17h3.9c4 0 4 0 4.3 4.3.3 4.2.3 4.2 4.6 4.5 4.2.3 4.2.3 4.2 4.3 0 3.8.1 3.9 3.5 3.9s3.5-.1 3.5-4v-3.9l8.3-.3 8.2-.3.3-4.3c.3-4.2.3-4.2 4.3-4.2h3.9v-16h16v-8h-8v-16h-8v8h-4c-4 0-4 0-4-3.9 0-4 0-4-4.2-4.3l-4.3-.3-.3-7.8-.3-7.7H111v24h24v25.1l-4.2-.3-4.3-.3-.3-8.3-.3-8.3-11.7.3-11.7.3-.3 3.7-.3 3.8H119v17h-9v-8H94v-9h-8v-8h8v-8h8v-8h-8v8h-8v8h-8v-15.9l3.8-.3c3.5-.3 3.7-.5 4-4.1l.3-3.7H78v-8h-8v16zM143 235.5c0 3.4.1 3.5 4 3.5s4-.1 4-3.5-.1-3.5-4-3.5-4 .1-4 3.5zM23.9 249.6C13.3 252.8 5 264.2 5 275.6c0 16.7 11.8 28.8 28.1 28.8 26.2 0 37.8-32.6 17.7-49.8-7.1-6.1-17.3-8-26.9-5zm17.7 8.3c14.4 6.6 15.8 26.2 2.5 35.6-3.7 2.6-5.1 3-11 3-5.7 0-7.4-.4-11-2.8-13.5-8.9-12.6-28.1 1.8-35.7 4.6-2.5 12.4-2.5 17.7-.1z" />
                            <path
                                d="M28.5 265.4c-4.3 1.9-6.6 4.9-7.2 9.4-1.3 9.8 8.7 16.3 17.8 11.6 3.1-1.6 5.9-6.6 5.9-10.6 0-3.6-3.7-8.8-7.5-10.4-4.2-1.7-5.1-1.7-9 0zM208 260v4h8v-8h-8v4zM290 284.4V297h8v8h8v-24h-3.9c-4 0-4 0-4.3-4.3-.3-4.1-.4-4.2-4-4.5l-3.8-.3v12.5zM70 284.5c0 3.4.1 3.5 4 3.5s4-.1 4-3.5-.1-3.5-4-3.5-4 .1-4 3.5zM151 284.5v3.5h24v-7h-24v3.5zM192 284.5c0 3.4.1 3.5 4 3.5s4-.1 4-3.5-.1-3.5-4-3.5-4 .1-4 3.5zM176 293v4h-25v8l16.3-.2 16.2-.3.3-7.8.3-7.7H176v4zM265.2 296.7l.3 7.8 11.8.3 11.7.3V297h-8v-8h-16.1l.3 7.7zM135 301v4h8v-8h-8v4zM192 301v4h24v-8h-24v4z" />
                        </svg>
                        <p class="donate__text">Если Вы не можете отсканировать QR-код, пожалуйста перейдите по данной ссылке - <a href="https://platiqr.ru/?uuid=1000447576">https://platiqr.ru/?uuid=1000447576</a></p>
                    </div>
                    <div class="donate__box-2" id="donate-form">
                        <h1 class="donate__title">Пожертвовать</h1>
                        <form action="sendEmail.php" method="POST" class="donate-form">
                            <input type="text" class="donate-form__name" placeholder="Ваше имя (обязательно)">
                            <input type="text" class="donate-form__email" placeholder="E-mail (обязательно)">
                            <input type="text" class="donate-form__phone-number" placeholder="Телефон">

                            <input type="text" class="donate-form__sum" placeholder="Сумма (обязательно)">
                            
                            <select class="select">
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    // your custom post type
                                    'meta_query' => array(
                                        array(
                                            'key' => '_wp_page_template',
                                            'value' => 'pages/reason.php',
                                            // template name as stored in the dB
                                        )
                                    )
                                );
                                $loop = new WP_Query($args);
                                if ($loop->have_posts()) {
                                    while ($loop->have_posts()) {
                                        $loop->the_post();
                                        // get ACF fields
                                        $name = get_field('reason_title');
                                        // output the fields
                                        echo '<option value="' . $name . '">' . $name . '</option>';
                                    }
                                }
                                ?>
                            </select>

                            <button class="button button_donate">Помочь детям</button>
                        </form>
                    </div>
                    <div class="donate__box-1" id="donate-alpha">
                    
<svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="2000pt" height="707pt" viewBox="0 0 2000 707" style="" preserveAspectRatio="xMidYMid meet" class="alfa-logo">
<g fill="#EC3425FD" stroke="#EC3425FD">
<path d="M 224.477 3.963 C 224.837 4.546 222.436 4.906 218.400 4.875 C 214.137 4.842 211.451 5.270 210.964 6.058 C 210.528 6.763 209.444 7.000 208.431 6.612 C 207.457 6.238 206.358 6.420 205.990 7.016 C 205.622 7.612 204.348 8.173 203.160 8.263 C 201.972 8.352 201.000 8.766 201.000 9.181 C 201.000 9.597 200.325 9.678 199.500 9.362 C 198.675 9.045 198.000 9.311 198.000 9.952 C 198.000 10.593 197.578 10.857 197.061 10.538 C 196.545 10.219 195.659 10.755 195.092 11.729 C 194.525 12.703 194.047 13.145 194.030 12.711 C 194.014 12.277 193.015 12.840 191.811 13.961 C 190.608 15.082 189.006 16.000 188.252 16.000 C 187.499 16.000 187.131 16.403 187.435 16.895 C 187.960 17.744 186.699 18.593 184.500 18.873 C 183.950 18.943 183.500 19.517 183.500 20.149 C 183.500 20.781 182.679 21.586 181.676 21.938 C 180.673 22.290 179.885 23.011 179.926 23.539 C 179.967 24.068 179.550 24.556 179.000 24.625 C 178.450 24.694 178.338 24.821 178.750 24.908 C 179.163 24.995 178.577 25.839 177.448 26.783 C 176.319 27.727 175.419 28.795 175.448 29.155 C 175.477 29.515 174.259 31.203 172.742 32.905 C 171.226 34.607 170.326 36.014 170.742 36.030 C 171.159 36.047 170.703 36.525 169.729 37.092 C 168.755 37.659 168.219 38.545 168.538 39.061 C 168.857 39.578 168.615 40.000 168.000 40.000 C 167.385 40.000 167.160 40.450 167.500 41.000 C 167.840 41.550 167.615 42.000 167.000 42.000 C 166.385 42.000 166.160 42.450 166.500 43.000 C 166.840 43.550 166.615 44.000 166.000 44.000 C 165.385 44.000 165.138 44.414 165.450 44.919 C 165.763 45.425 165.452 46.438 164.759 47.169 C 164.067 47.901 163.356 49.400 163.181 50.500 C 163.005 51.600 162.132 53.063 161.240 53.750 C 160.348 54.438 160.019 55.000 160.509 55.000 C 160.999 55.000 160.895 55.505 160.278 56.122 C 159.661 56.739 159.423 57.938 159.748 58.786 C 160.137 59.798 159.938 60.080 159.170 59.605 C 158.381 59.117 158.000 59.815 158.000 61.750 C 158.000 63.327 157.339 65.491 156.532 66.559 C 155.724 67.626 155.049 69.539 155.032 70.809 C 155.011 72.295 154.588 72.864 153.845 72.405 C 153.130 71.962 152.962 72.130 153.405 72.845 C 153.797 73.480 153.767 74.563 153.338 75.250 C 152.909 75.938 152.419 77.400 152.250 78.500 C 152.081 79.600 151.502 80.651 150.965 80.835 C 150.427 81.020 150.236 81.573 150.540 82.065 C 150.844 82.556 150.530 83.980 149.842 85.229 C 149.155 86.478 148.547 87.950 148.492 88.500 C 148.436 89.050 147.853 90.767 147.195 92.315 C 146.538 93.863 146.000 95.551 146.000 96.065 C 146.000 96.579 145.550 97.000 145.000 97.000 C 144.450 97.000 144.000 98.377 144.000 100.059 C 144.000 102.117 143.622 102.884 142.845 102.405 C 142.130 101.962 141.962 102.130 142.405 102.845 C 142.797 103.480 142.767 104.563 142.338 105.250 C 141.909 105.938 141.421 107.380 141.254 108.457 C 141.086 109.533 140.472 110.708 139.889 111.068 C 139.306 111.429 138.950 111.898 139.097 112.112 C 139.244 112.325 139.008 113.625 138.574 115.000 C 138.139 116.375 137.832 117.838 137.892 118.250 C 137.951 118.663 137.523 119.000 136.941 119.000 C 136.359 119.000 136.110 119.370 136.390 119.822 C 136.669 120.274 136.325 121.748 135.624 123.098 C 134.924 124.448 134.555 126.166 134.805 126.915 C 135.079 127.737 134.810 128.001 134.130 127.580 C 133.384 127.119 133.000 127.922 133.000 129.941 C 133.000 131.623 132.550 133.000 132.000 133.000 C 131.450 133.000 131.053 133.338 131.118 133.750 C 131.184 134.163 131.150 134.725 131.044 135.000 C 130.938 135.275 130.647 136.625 130.397 138.000 C 130.147 139.375 129.530 140.642 129.027 140.815 C 128.524 140.988 128.360 141.775 128.663 142.565 C 128.966 143.354 128.689 144.000 128.048 144.000 C 127.407 144.000 127.160 144.450 127.500 145.000 C 127.840 145.550 127.593 146.000 126.952 146.000 C 126.311 146.000 126.045 146.675 126.362 147.500 C 126.678 148.325 126.501 149.000 125.969 149.000 C 125.436 149.000 125.053 149.338 125.118 149.750 C 125.184 150.163 125.127 150.838 124.993 151.250 C 124.461 152.890 124.245 154.089 124.125 156.059 C 124.056 157.191 123.550 157.840 123.000 157.500 C 122.417 157.139 122.000 158.156 122.000 159.941 C 122.000 161.623 121.564 163.000 121.031 163.000 C 120.499 163.000 120.322 163.675 120.638 164.500 C 120.955 165.325 120.689 166.000 120.048 166.000 C 119.407 166.000 119.160 166.450 119.500 167.000 C 119.840 167.550 119.615 168.000 119.000 168.000 C 118.385 168.000 118.142 168.420 118.459 168.934 C 119.113 169.992 116.117 178.176 114.733 179.112 C 114.236 179.448 113.897 180.123 113.979 180.612 C 114.317 182.616 112.842 188.000 111.955 188.000 C 111.430 188.000 111.074 188.338 111.164 188.750 C 111.408 189.863 109.842 195.348 108.952 196.500 C 108.527 197.050 107.864 199.188 107.478 201.250 C 107.093 203.313 106.377 205.000 105.889 205.000 C 105.400 205.000 105.000 205.900 105.000 207.000 C 105.000 208.100 104.523 209.000 103.941 209.000 C 103.359 209.000 103.160 209.450 103.500 210.000 C 103.840 210.550 103.767 211.563 103.338 212.250 C 102.909 212.938 102.421 214.380 102.254 215.457 C 102.086 216.533 101.472 217.708 100.889 218.068 C 100.306 218.429 99.917 219.024 100.024 219.390 C 100.131 219.757 99.896 221.057 99.501 222.279 C 99.106 223.500 98.832 224.838 98.892 225.250 C 98.951 225.663 98.523 226.000 97.941 226.000 C 97.359 226.000 97.110 226.370 97.390 226.822 C 97.669 227.274 97.289 228.817 96.545 230.251 C 95.801 231.685 95.449 233.115 95.763 233.429 C 96.077 233.743 95.808 234.000 95.167 234.000 C 94.525 234.000 94.000 235.264 94.000 236.809 C 94.000 238.354 93.339 240.491 92.532 241.559 C 91.724 242.626 91.049 244.513 91.032 245.750 C 91.014 246.988 90.564 248.000 90.031 248.000 C 89.499 248.000 89.350 248.749 89.701 249.664 C 90.128 250.775 89.955 251.090 89.181 250.612 C 88.442 250.155 88.224 250.421 88.580 251.347 C 88.886 252.145 88.648 253.099 88.052 253.468 C 87.455 253.837 87.208 254.528 87.503 255.005 C 87.797 255.481 87.203 257.363 86.182 259.185 C 85.160 261.008 84.535 263.125 84.792 263.889 C 85.076 264.733 84.816 265.004 84.130 264.580 C 83.384 264.119 83.000 264.922 83.000 266.941 C 83.000 268.623 82.550 270.000 82.000 270.000 C 81.450 270.000 81.053 270.338 81.118 270.750 C 81.184 271.163 81.150 271.725 81.044 272.000 C 80.938 272.275 80.647 273.625 80.397 275.000 C 80.147 276.375 79.553 277.634 79.077 277.798 C 78.602 277.962 78.441 278.969 78.720 280.036 C 79.039 281.256 78.617 282.210 77.584 282.606 C 76.472 283.033 76.146 283.886 76.577 285.244 C 77.000 286.576 76.842 287.021 76.107 286.566 C 75.408 286.134 75.000 286.825 75.000 288.441 C 75.000 289.848 74.520 291.000 73.933 291.000 C 73.299 291.000 73.140 291.864 73.540 293.125 C 73.994 294.555 73.852 295.027 73.107 294.566 C 72.390 294.123 72.000 294.959 72.000 296.941 C 72.000 298.623 71.564 300.000 71.031 300.000 C 70.499 300.000 70.322 300.675 70.638 301.500 C 70.955 302.325 70.689 303.000 70.048 303.000 C 69.407 303.000 69.160 303.450 69.500 304.000 C 69.840 304.550 69.615 305.000 69.000 305.000 C 68.385 305.000 68.151 305.435 68.479 305.966 C 68.807 306.497 68.178 308.691 67.081 310.842 C 65.983 312.993 65.366 315.033 65.710 315.376 C 66.053 315.719 65.808 316.000 65.167 316.000 C 64.525 316.000 64.091 316.338 64.202 316.750 C 64.647 318.398 62.848 325.000 61.955 325.000 C 61.430 325.000 61.000 326.098 61.000 327.441 C 61.000 328.784 60.543 330.165 59.984 330.510 C 59.425 330.856 59.226 331.557 59.543 332.069 C 59.859 332.581 59.737 333.000 59.272 333.000 C 58.806 333.000 58.357 333.912 58.273 335.026 C 58.189 336.141 57.418 338.460 56.560 340.180 C 55.702 341.900 55.000 344.165 55.000 345.213 C 55.000 346.398 54.564 346.848 53.845 346.405 C 53.130 345.962 52.962 346.130 53.405 346.845 C 53.797 347.480 53.767 348.563 53.338 349.250 C 52.909 349.938 52.421 351.380 52.254 352.457 C 52.086 353.533 51.472 354.708 50.889 355.068 C 50.306 355.429 49.917 356.024 50.024 356.390 C 50.131 356.757 49.896 358.057 49.501 359.279 C 49.106 360.500 48.832 361.838 48.892 362.250 C 48.951 362.663 48.523 363.000 47.941 363.000 C 47.359 363.000 47.110 363.370 47.390 363.822 C 47.669 364.274 47.289 365.817 46.545 367.251 C 45.801 368.685 45.449 370.115 45.763 370.429 C 46.077 370.743 45.808 371.000 45.167 371.000 C 44.525 371.000 44.000 372.377 44.000 374.059 C 44.000 375.820 43.581 376.859 43.011 376.507 C 42.459 376.166 42.269 376.537 42.580 377.347 C 42.886 378.145 42.656 379.095 42.068 379.458 C 41.481 379.821 41.000 381.216 41.000 382.559 C 41.000 383.902 40.564 385.000 40.031 385.000 C 39.499 385.000 39.350 385.749 39.701 386.664 C 40.128 387.775 39.955 388.090 39.181 387.612 C 38.442 387.155 38.224 387.421 38.580 388.347 C 38.886 389.145 38.675 390.083 38.112 390.431 C 37.548 390.779 37.369 391.798 37.714 392.696 C 38.132 393.787 37.952 394.088 37.170 393.605 C 36.396 393.127 36.000 393.728 36.000 395.382 C 36.000 396.757 35.570 398.148 35.044 398.473 C 34.518 398.798 34.369 399.798 34.714 400.696 C 35.132 401.787 34.952 402.088 34.170 401.605 C 33.396 401.127 33.000 401.728 33.000 403.382 C 33.000 404.757 32.570 406.148 32.044 406.473 C 31.518 406.798 31.369 407.798 31.714 408.696 C 32.169 409.882 31.974 410.102 31.000 409.500 C 30.021 408.895 29.832 409.120 30.299 410.336 C 30.650 411.251 30.515 412.000 30.000 412.000 C 29.485 412.000 29.300 412.617 29.589 413.371 C 29.878 414.125 29.385 415.472 28.494 416.363 C 27.602 417.255 27.153 418.438 27.495 418.992 C 27.838 419.547 27.684 420.000 27.153 420.000 C 26.622 420.000 26.441 420.970 26.751 422.156 C 27.171 423.763 26.980 424.106 26.003 423.502 C 25.142 422.970 24.932 423.081 25.392 423.825 C 25.777 424.448 25.527 425.980 24.836 427.229 C 24.146 428.478 23.705 430.108 23.857 430.850 C 24.009 431.593 23.654 431.904 23.067 431.541 C 21.113 430.334 21.811 439.944 23.867 442.558 C 24.894 443.864 26.019 444.647 26.367 444.299 C 26.715 443.951 27.000 444.178 27.000 444.802 C 27.000 445.426 27.675 445.678 28.500 445.362 C 29.325 445.045 30.000 445.270 30.000 445.862 C 30.000 446.453 30.675 446.678 31.500 446.362 C 32.325 446.045 33.000 446.311 33.000 446.952 C 33.000 447.593 33.450 447.840 34.000 447.500 C 34.550 447.160 35.000 447.344 35.000 447.910 C 35.000 448.475 35.675 448.678 36.500 448.362 C 37.325 448.045 38.000 448.311 38.000 448.952 C 38.000 449.593 38.423 449.857 38.940 449.537 C 39.457 449.218 40.456 449.573 41.161 450.327 C 41.865 451.081 43.312 451.470 44.377 451.191 C 45.672 450.852 46.076 451.068 45.597 451.842 C 45.127 452.604 45.757 453.000 47.441 453.000 C 48.848 453.000 50.000 453.480 50.000 454.067 C 50.000 454.680 50.853 454.864 52.000 454.500 C 53.100 454.151 54.000 454.289 54.000 454.808 C 54.000 455.326 55.459 456.042 57.242 456.398 C 61.454 457.241 66.000 459.268 66.000 460.303 C 66.000 460.751 66.450 460.840 67.000 460.500 C 67.550 460.160 68.000 460.246 68.001 460.691 C 68.001 461.136 69.185 461.569 70.631 461.652 C 72.078 461.736 73.590 462.337 73.992 462.988 C 74.395 463.638 75.009 464.143 75.357 464.109 C 77.428 463.909 81.880 465.385 81.425 466.122 C 81.126 466.605 82.034 467.000 83.441 467.000 C 84.848 467.000 86.000 467.498 86.000 468.107 C 86.000 468.716 86.661 468.960 87.468 468.651 C 88.275 468.341 89.202 468.518 89.527 469.044 C 89.852 469.570 90.991 470.000 92.059 470.000 C 93.127 470.000 94.000 470.375 94.000 470.833 C 94.000 471.292 94.563 471.708 95.250 471.759 C 95.938 471.810 97.774 472.125 99.330 472.460 C 100.968 472.812 101.919 472.678 101.587 472.141 C 101.272 471.631 102.136 470.932 103.507 470.588 C 105.301 470.137 106.000 469.287 106.000 467.552 C 106.000 466.227 106.683 464.460 107.518 463.625 C 108.353 462.790 108.942 461.746 108.827 461.304 C 108.416 459.716 110.178 454.000 111.079 454.000 C 111.586 454.000 111.947 453.663 111.882 453.250 C 111.490 450.773 112.149 447.974 113.000 448.500 C 113.565 448.849 114.000 448.030 114.000 446.618 C 114.000 445.243 114.430 443.852 114.956 443.527 C 115.482 443.202 115.631 442.202 115.286 441.304 C 114.868 440.213 115.048 439.912 115.830 440.395 C 116.626 440.887 117.000 440.140 117.000 438.059 C 117.000 436.377 117.477 435.000 118.059 435.000 C 118.641 435.000 118.840 434.550 118.500 434.000 C 118.160 433.450 118.359 433.000 118.941 433.000 C 119.523 433.000 120.003 431.763 120.006 430.250 C 120.010 428.738 120.685 426.211 121.506 424.636 C 122.328 423.060 123.000 420.896 123.000 419.827 C 123.000 418.704 123.451 418.161 124.067 418.541 C 124.654 418.904 125.019 418.593 124.878 417.850 C 124.459 415.637 126.082 410.000 127.138 410.000 C 127.677 410.000 127.840 409.550 127.500 409.000 C 127.160 408.450 127.385 408.000 128.000 408.000 C 128.615 408.000 128.830 407.533 128.477 406.963 C 128.125 406.393 128.743 404.187 129.851 402.062 C 130.958 399.937 131.595 397.928 131.266 397.599 C 130.936 397.270 131.178 397.000 131.802 397.000 C 132.426 397.000 132.696 396.371 132.400 395.601 C 132.105 394.832 132.344 393.905 132.932 393.542 C 133.519 393.179 134.000 391.784 134.000 390.441 C 134.000 389.098 134.477 388.000 135.059 388.000 C 135.641 388.000 135.919 387.663 135.676 387.250 C 135.434 386.838 135.619 385.483 136.089 384.240 L 136.943 381.981 228.420 382.010 C 309.950 382.037 320.067 382.210 321.458 383.601 C 322.316 384.459 322.763 385.575 322.450 386.081 C 322.138 386.586 322.323 387.000 322.862 387.000 C 323.787 387.000 325.599 392.640 325.190 394.250 C 325.086 394.663 325.450 395.000 326.000 395.000 C 326.550 395.000 327.000 395.831 327.000 396.846 C 327.000 397.862 327.731 400.159 328.625 401.950 C 329.519 403.742 330.250 406.278 330.250 407.586 C 330.250 408.984 330.680 409.698 331.295 409.318 C 331.940 408.919 332.096 409.309 331.701 410.336 C 331.350 411.251 331.499 412.000 332.031 412.000 C 332.564 412.000 333.000 413.377 333.000 415.059 C 333.000 417.078 333.384 417.881 334.130 417.420 C 334.810 416.999 335.079 417.263 334.805 418.085 C 334.555 418.834 334.924 420.552 335.624 421.902 C 336.325 423.252 336.669 424.726 336.390 425.178 C 336.110 425.630 336.385 426.000 337.000 426.000 C 337.615 426.000 337.859 426.419 337.543 426.931 C 337.226 427.443 337.455 428.163 338.052 428.532 C 338.648 428.901 338.895 429.832 338.600 430.601 C 338.304 431.371 338.525 432.000 339.090 432.000 C 339.656 432.000 339.864 432.412 339.553 432.915 C 339.242 433.418 339.427 433.980 339.965 434.165 C 340.502 434.349 341.081 435.400 341.250 436.500 C 341.419 437.600 341.909 439.063 342.338 439.750 C 342.767 440.438 342.797 441.520 342.405 442.155 C 341.948 442.892 342.132 443.037 342.912 442.554 C 343.664 442.089 344.049 442.318 343.913 443.150 C 343.792 443.892 344.437 446.173 345.346 448.218 C 346.256 450.263 347.000 452.850 347.000 453.968 C 347.000 455.086 347.414 456.000 347.921 456.000 C 348.931 456.000 350.529 461.698 350.122 463.850 C 349.981 464.593 350.346 464.904 350.933 464.541 C 351.583 464.140 352.000 464.883 352.000 466.441 C 352.000 467.848 352.450 469.000 353.000 469.000 C 353.550 469.000 354.000 469.675 354.000 470.500 C 354.000 471.325 354.338 471.947 354.750 471.882 C 355.163 471.816 355.725 471.851 356.000 471.958 C 357.823 472.669 360.534 472.771 360.975 472.146 C 361.758 471.037 372.877 467.000 375.148 467.000 C 376.397 467.000 376.854 466.572 376.395 465.830 C 375.930 465.077 376.191 464.859 377.128 465.219 C 377.929 465.526 379.419 465.167 380.439 464.421 C 381.460 463.675 382.678 463.301 383.147 463.591 C 383.616 463.881 384.000 463.698 384.000 463.184 C 384.000 462.388 388.697 460.921 390.643 461.109 C 390.991 461.143 391.571 460.694 391.932 460.111 C 392.292 459.528 393.467 458.914 394.543 458.746 C 395.620 458.579 397.063 458.091 397.750 457.662 C 398.438 457.233 399.007 457.246 399.015 457.691 C 399.024 458.136 399.361 458.019 399.765 457.431 C 400.716 456.048 408.458 453.000 411.020 453.000 C 412.109 453.000 413.000 452.523 413.000 451.941 C 413.000 451.359 413.453 451.162 414.008 451.505 C 414.562 451.847 415.745 451.398 416.637 450.506 C 417.528 449.615 418.898 449.131 419.681 449.431 C 420.469 449.734 420.831 449.536 420.493 448.989 C 420.157 448.445 420.757 448.000 421.827 448.000 C 422.896 448.000 425.060 447.328 426.636 446.506 C 428.211 445.685 430.436 445.010 431.581 445.006 C 432.773 445.003 434.234 443.932 435.000 442.500 C 435.736 441.125 436.701 440.000 437.144 440.000 C 437.588 440.000 437.576 438.988 437.119 437.750 C 436.661 436.513 436.506 434.875 436.773 434.111 C 437.101 433.175 436.836 432.983 435.960 433.525 C 435.037 434.095 434.838 433.865 435.274 432.729 C 435.611 431.849 435.476 430.988 434.973 430.815 C 434.470 430.642 433.919 429.600 433.750 428.500 C 433.581 427.400 433.091 425.938 432.662 425.250 C 432.233 424.563 432.160 423.550 432.500 423.000 C 432.840 422.450 432.641 422.000 432.059 422.000 C 431.477 422.000 431.000 421.100 431.000 420.000 C 431.000 418.900 430.570 418.000 430.045 418.000 C 429.152 418.000 427.353 411.398 427.798 409.750 C 427.909 409.338 427.550 409.000 427.000 409.000 C 426.450 409.000 426.096 408.663 426.212 408.250 C 426.329 407.838 425.858 406.478 425.166 405.229 C 424.474 403.980 424.180 402.518 424.513 401.979 C 424.846 401.441 424.641 401.000 424.059 401.000 C 423.477 401.000 423.000 399.902 423.000 398.559 C 423.000 397.216 422.519 395.821 421.932 395.458 C 421.344 395.095 421.114 394.145 421.420 393.347 C 421.731 392.537 421.541 392.166 420.989 392.507 C 420.436 392.849 420.000 391.991 420.000 390.559 C 420.000 389.152 419.550 388.000 419.000 388.000 C 418.450 388.000 417.997 387.213 417.994 386.250 C 417.990 385.288 417.311 383.203 416.484 381.618 C 415.658 380.032 414.703 376.995 414.363 374.868 C 414.023 372.740 413.388 371.000 412.952 371.000 C 412.286 371.000 411.122 367.485 410.469 363.500 C 410.378 362.950 410.168 362.500 410.000 362.500 C 409.832 362.500 409.643 362.048 409.579 361.497 C 409.514 360.945 408.627 358.733 407.606 356.582 C 406.585 354.431 405.750 351.628 405.750 350.354 C 405.750 349.019 405.313 348.306 404.720 348.673 C 404.095 349.059 403.998 348.812 404.474 348.043 C 404.920 347.321 404.717 346.443 404.003 346.002 C 403.314 345.576 402.750 344.059 402.750 342.632 C 402.750 341.102 402.326 340.298 401.717 340.675 C 401.090 341.062 400.884 340.553 401.191 339.377 C 401.470 338.312 401.060 336.846 400.281 336.118 C 399.502 335.390 399.106 334.166 399.401 333.397 C 399.696 332.629 399.515 332.000 399.000 332.000 C 398.485 332.000 398.322 331.325 398.638 330.500 C 398.955 329.675 398.689 329.000 398.048 329.000 C 397.407 329.000 397.136 328.588 397.447 328.085 C 397.758 327.582 397.518 327.006 396.914 326.805 C 396.310 326.603 395.745 325.215 395.658 323.720 C 395.571 322.225 395.177 321.001 394.781 321.001 C 394.386 321.000 394.350 320.251 394.701 319.336 C 395.168 318.120 394.979 317.895 394.000 318.500 C 393.021 319.105 392.832 318.880 393.299 317.664 C 393.650 316.749 393.501 316.000 392.969 316.000 C 392.436 316.000 392.000 314.623 392.000 312.941 C 392.000 310.959 391.610 310.123 390.893 310.566 C 390.148 311.027 390.006 310.555 390.460 309.125 C 390.860 307.864 390.701 307.000 390.067 307.000 C 389.480 307.000 389.000 305.848 389.000 304.441 C 389.000 302.742 388.607 302.125 387.830 302.605 C 387.033 303.097 386.873 302.773 387.327 301.590 C 387.719 300.568 387.354 299.211 386.440 298.297 C 385.585 297.442 385.111 296.154 385.386 295.436 C 385.662 294.717 385.443 293.981 384.899 293.800 C 384.356 293.619 383.835 292.465 383.743 291.235 C 383.650 290.006 383.172 289.000 382.680 289.000 C 382.188 289.000 382.045 288.325 382.362 287.500 C 382.678 286.675 382.501 286.000 381.969 286.000 C 381.436 286.000 381.000 285.169 381.000 284.154 C 381.000 283.138 380.298 280.900 379.440 279.180 C 378.582 277.460 377.811 275.141 377.727 274.026 C 377.643 272.912 377.194 272.000 376.728 272.000 C 376.263 272.000 376.141 271.581 376.457 271.069 C 376.774 270.557 376.545 269.837 375.948 269.468 C 375.352 269.099 375.105 268.168 375.400 267.399 C 375.696 266.629 375.475 266.000 374.910 266.000 C 374.344 266.000 374.160 265.550 374.500 265.000 C 374.840 264.450 374.641 264.000 374.059 264.000 C 373.477 264.000 373.000 262.902 373.000 261.559 C 373.000 260.216 372.519 258.821 371.932 258.458 C 371.344 258.095 371.105 257.168 371.400 256.399 C 371.696 255.629 371.501 255.000 370.969 255.000 C 370.436 255.000 370.000 254.127 370.000 253.059 C 370.000 251.991 369.519 250.821 368.932 250.458 C 368.344 250.095 368.105 249.168 368.400 248.399 C 368.696 247.629 368.598 247.000 368.184 247.000 C 367.126 247.000 363.897 237.976 364.567 236.892 C 364.870 236.401 364.615 236.000 364.000 236.000 C 363.385 236.000 363.160 235.550 363.500 235.000 C 363.840 234.450 363.698 234.000 363.184 234.000 C 362.194 234.000 360.596 228.426 360.933 226.150 C 361.044 225.407 360.654 225.096 360.067 225.459 C 359.451 225.839 359.000 225.296 359.000 224.173 C 359.000 223.104 358.328 220.940 357.506 219.364 C 356.685 217.789 356.010 215.802 356.006 214.950 C 356.003 214.097 355.539 212.939 354.975 212.375 C 354.411 211.811 353.759 209.849 353.527 208.016 C 353.295 206.183 352.701 204.417 352.207 204.092 C 351.298 203.493 349.658 198.614 349.546 196.174 C 349.512 195.445 349.084 195.220 348.595 195.674 C 348.084 196.148 347.937 195.556 348.249 194.287 C 348.568 192.990 348.197 191.578 347.351 190.877 C 346.558 190.218 346.140 189.077 346.423 188.340 C 346.706 187.603 346.453 187.000 345.862 187.000 C 345.270 187.000 345.045 186.325 345.362 185.500 C 345.678 184.675 345.475 184.000 344.910 184.000 C 344.344 184.000 344.160 183.550 344.500 183.000 C 344.840 182.450 344.593 182.000 343.952 182.000 C 343.311 182.000 343.045 181.325 343.362 180.500 C 343.678 179.675 343.501 179.000 342.969 179.000 C 342.436 179.000 342.000 177.875 342.000 176.500 C 342.000 175.125 341.520 174.000 340.933 174.000 C 340.320 174.000 340.136 173.147 340.500 172.000 C 340.864 170.853 340.680 170.000 340.067 170.000 C 339.480 170.000 339.000 168.875 339.000 167.500 C 339.000 166.125 338.564 165.000 338.031 165.000 C 337.499 165.000 337.322 164.325 337.638 163.500 C 337.955 162.675 337.689 162.000 337.048 162.000 C 336.407 162.000 336.136 161.588 336.447 161.085 C 336.758 160.582 336.466 159.989 335.797 159.766 C 334.733 159.411 334.452 158.170 334.081 152.191 C 334.035 151.454 333.489 151.198 332.830 151.605 C 332.043 152.091 331.869 151.783 332.299 150.664 C 332.650 149.749 332.501 149.000 331.969 149.000 C 331.436 149.000 331.000 147.623 331.000 145.941 C 331.000 143.959 330.610 143.123 329.893 143.566 C 329.148 144.027 329.006 143.555 329.460 142.125 C 329.860 140.864 329.701 140.000 329.067 140.000 C 328.480 140.000 328.000 138.875 328.000 137.500 C 328.000 136.125 327.550 135.000 327.000 135.000 C 326.450 135.000 326.073 134.663 326.161 134.250 C 326.250 133.838 325.756 132.150 325.062 130.500 C 324.369 128.850 323.656 126.825 323.477 126.000 C 323.299 125.175 323.062 124.388 322.952 124.250 C 322.841 124.113 322.687 123.663 322.610 123.250 C 322.533 122.838 322.112 121.938 321.676 121.250 C 321.239 120.563 321.246 119.993 321.691 119.985 C 322.136 119.976 321.915 119.598 321.200 119.145 C 320.485 118.691 319.827 117.348 319.737 116.160 C 319.648 114.972 319.168 114.000 318.671 114.000 C 318.173 114.000 318.002 113.100 318.290 112.000 C 318.577 110.900 318.405 110.000 317.906 110.000 C 317.408 110.000 317.053 109.663 317.118 109.250 C 317.486 106.921 316.862 104.967 315.933 105.541 C 315.346 105.904 314.968 105.593 315.093 104.850 C 315.218 104.108 314.753 102.150 314.059 100.500 C 311.392 94.161 310.175 90.158 310.743 89.590 C 311.068 89.266 310.808 89.000 310.167 89.000 C 309.525 89.000 309.000 87.902 309.000 86.559 C 309.000 85.216 308.519 83.821 307.932 83.458 C 307.344 83.095 307.105 82.168 307.400 81.399 C 307.696 80.629 307.426 80.000 306.802 80.000 C 306.178 80.000 305.963 79.704 306.325 79.342 C 306.687 78.980 306.481 78.080 305.869 77.342 C 305.256 76.604 305.148 75.993 305.628 75.985 C 306.107 75.976 305.949 75.619 305.275 75.191 C 304.601 74.763 303.926 73.307 303.775 71.956 C 303.624 70.605 303.098 69.208 302.606 68.852 C 301.530 68.072 298.997 61.441 298.501 58.103 C 298.304 56.785 297.604 55.373 296.944 54.965 C 296.284 54.557 296.053 53.723 296.431 53.112 C 296.809 52.500 296.615 52.000 296.000 52.000 C 295.385 52.000 295.124 51.608 295.420 51.129 C 295.716 50.650 295.068 49.231 293.979 47.976 C 292.891 46.721 292.000 44.863 292.000 43.847 C 292.000 42.831 291.523 42.000 290.941 42.000 C 290.359 42.000 290.160 41.550 290.500 41.000 C 290.840 40.450 290.641 40.000 290.059 40.000 C 289.477 40.000 289.000 39.325 289.000 38.500 C 289.000 37.675 288.523 37.000 287.941 37.000 C 287.359 37.000 287.160 36.550 287.500 36.000 C 287.840 35.450 287.641 35.000 287.059 35.000 C 286.477 35.000 286.000 34.325 286.000 33.500 C 286.000 32.675 285.475 32.000 284.833 32.000 C 284.192 32.000 283.951 31.715 284.299 31.367 C 284.647 31.019 283.799 29.843 282.413 28.753 C 281.028 27.664 280.084 26.583 280.316 26.351 C 280.950 25.717 275.362 20.000 274.107 20.000 C 273.508 20.000 272.455 19.100 271.768 18.000 C 271.081 16.900 270.116 16.000 269.624 16.000 C 269.132 16.000 267.553 14.776 266.115 13.280 C 264.677 11.785 263.626 11.150 263.780 11.870 C 263.957 12.700 263.003 12.426 261.167 11.119 C 259.576 9.986 257.988 9.346 257.637 9.696 C 257.287 10.047 257.000 9.859 257.000 9.280 C 257.000 8.701 254.863 7.907 252.250 7.516 C 249.638 7.124 247.214 6.343 246.865 5.779 C 246.510 5.206 242.541 4.771 237.865 4.792 C 232.219 4.818 230.313 4.565 232.000 4.015 L 234.500 3.199 231.833 3.100 C 230.367 3.045 228.940 3.563 228.662 4.250 C 228.259 5.250 228.142 5.250 228.079 4.250 C 228.036 3.563 227.073 3.000 225.941 3.000 C 224.809 3.000 224.150 3.433 224.477 3.963 M 230.000 116.559 C 230.000 117.485 230.470 117.828 231.158 117.403 C 231.951 116.912 232.137 117.366 231.751 118.845 C 231.386 120.241 231.566 120.768 232.263 120.337 C 232.928 119.926 233.113 120.264 232.745 121.221 C 232.418 122.073 232.818 123.723 233.633 124.887 C 234.449 126.051 234.807 127.503 234.430 128.114 C 234.052 128.724 234.274 129.551 234.922 129.952 C 235.570 130.352 236.173 131.652 236.263 132.840 C 236.352 134.028 236.832 135.000 237.329 135.000 C 237.827 135.000 237.998 135.900 237.710 137.000 C 237.423 138.100 237.643 139.000 238.201 139.000 C 238.758 139.000 238.946 139.698 238.618 140.552 C 238.256 141.495 238.437 141.848 239.078 141.452 C 239.659 141.093 240.032 141.407 239.907 142.150 C 239.782 142.892 240.169 144.680 240.767 146.123 C 241.365 147.566 241.999 149.591 242.177 150.623 C 242.355 151.655 242.835 152.750 243.245 153.056 C 243.655 153.362 244.091 154.824 244.213 156.306 C 244.336 157.788 244.818 159.000 245.285 159.000 C 245.753 159.000 245.831 159.956 245.460 161.125 C 245.006 162.555 245.148 163.027 245.893 162.566 C 246.857 161.970 247.540 164.581 247.118 167.250 C 247.053 167.663 247.502 168.000 248.117 168.000 C 248.741 168.000 249.003 168.882 248.710 170.000 C 248.423 171.100 248.505 172.000 248.893 172.000 C 249.825 172.000 252.000 178.088 252.000 180.699 C 252.000 181.830 252.675 183.315 253.500 184.000 C 254.325 184.685 255.000 186.540 255.000 188.122 C 255.000 189.705 255.502 191.000 256.117 191.000 C 256.741 191.000 257.003 191.882 256.710 193.000 C 256.423 194.100 256.595 195.000 257.094 195.000 C 257.592 195.000 258.000 196.350 258.000 198.000 C 258.000 199.650 258.525 201.000 259.167 201.000 C 259.808 201.000 260.072 201.262 259.752 201.582 C 259.432 201.901 259.813 203.701 260.599 205.582 C 261.384 207.462 261.683 209.007 261.263 209.015 C 260.844 209.024 260.996 209.361 261.603 209.765 C 262.579 210.416 265.889 219.109 266.373 222.294 C 266.474 222.957 266.908 224.063 267.337 224.750 C 267.767 225.438 267.840 226.450 267.500 227.000 C 267.160 227.550 267.359 228.000 267.941 228.000 C 268.523 228.000 269.000 228.849 269.000 229.886 C 269.000 230.923 269.672 233.060 270.494 234.636 C 271.315 236.211 271.990 238.764 271.994 240.309 C 271.997 241.854 272.410 242.865 272.911 242.555 C 273.728 242.050 275.652 249.398 275.188 251.250 C 275.084 251.663 275.450 252.000 276.000 252.000 C 276.550 252.000 277.000 253.125 277.000 254.500 C 277.000 255.875 277.375 257.000 277.833 257.000 C 278.292 257.000 278.734 257.563 278.817 258.250 C 279.328 262.515 280.346 266.000 281.079 266.000 C 281.548 266.000 282.230 268.250 282.594 271.000 C 282.959 273.750 283.725 276.000 284.295 276.000 C 284.866 276.000 285.037 276.296 284.675 276.658 C 284.313 277.020 284.488 277.883 285.062 278.575 C 285.637 279.267 286.257 281.109 286.440 282.667 C 286.622 284.225 286.892 285.275 287.038 285.000 C 287.185 284.725 287.391 284.950 287.496 285.500 C 287.602 286.050 288.212 287.775 288.851 289.334 C 289.491 290.893 289.760 292.580 289.448 293.084 C 289.137 293.588 289.407 294.000 290.048 294.000 C 290.689 294.000 290.955 294.675 290.638 295.500 C 290.322 296.325 290.485 297.000 291.000 297.000 C 291.515 297.000 291.678 297.675 291.362 298.500 C 290.859 299.811 282.987 300.000 228.893 300.000 L 167.000 300.000 167.000 297.500 C 167.000 296.125 167.408 295.000 167.906 295.000 C 168.405 295.000 168.577 294.100 168.290 293.000 C 167.997 291.882 168.259 291.000 168.883 291.000 C 169.498 291.000 170.000 289.623 170.000 287.941 C 170.000 285.883 170.378 285.116 171.155 285.595 C 171.855 286.028 172.038 285.871 171.621 285.195 C 171.242 284.583 171.352 283.276 171.866 282.291 C 172.379 281.306 173.632 277.688 174.649 274.250 C 175.667 270.813 176.739 268.000 177.032 268.000 C 177.324 268.000 177.666 266.763 177.791 265.250 C 177.915 263.738 178.438 262.358 178.952 262.185 C 179.467 262.012 179.657 261.270 179.376 260.537 C 179.094 259.803 179.344 258.905 179.932 258.542 C 180.519 258.179 181.000 256.784 181.000 255.441 C 181.000 254.098 181.436 253.000 181.969 253.000 C 182.501 253.000 182.696 252.371 182.400 251.601 C 182.105 250.832 182.344 249.905 182.932 249.542 C 183.519 249.179 184.000 247.784 184.000 246.441 C 184.000 245.098 184.450 244.000 185.000 244.000 C 185.550 244.000 185.947 243.663 185.882 243.250 C 185.816 242.838 185.847 242.275 185.950 242.000 C 186.054 241.725 186.309 240.191 186.518 238.591 C 186.727 236.991 187.483 235.310 188.199 234.856 C 188.914 234.402 189.156 234.024 188.737 234.015 C 188.317 234.007 188.616 232.462 189.401 230.582 C 190.187 228.701 190.568 226.901 190.248 226.582 C 189.928 226.262 190.192 226.000 190.833 226.000 C 191.475 226.000 192.000 224.650 192.000 223.000 C 192.000 221.350 192.408 220.000 192.906 220.000 C 193.405 220.000 193.577 219.100 193.290 218.000 C 192.997 216.882 193.259 216.000 193.883 216.000 C 194.498 216.000 195.000 214.623 195.000 212.941 C 195.000 211.180 195.419 210.141 195.989 210.493 C 196.541 210.834 196.731 210.463 196.420 209.653 C 196.114 208.855 196.344 207.905 196.932 207.542 C 197.519 207.179 198.000 205.784 198.000 204.441 C 198.000 203.098 198.477 202.000 199.059 202.000 C 199.641 202.000 199.890 201.631 199.611 201.180 C 199.040 200.256 201.139 192.528 202.267 191.400 C 202.670 190.997 203.003 189.954 203.006 189.083 C 203.010 188.213 203.685 186.211 204.506 184.636 C 205.328 183.060 206.000 180.923 206.000 179.886 C 206.000 178.849 206.436 178.000 206.969 178.000 C 207.501 178.000 207.696 177.371 207.400 176.601 C 207.105 175.832 207.344 174.905 207.932 174.542 C 208.519 174.179 209.000 173.038 209.000 172.006 C 209.000 170.974 209.519 168.863 210.153 167.315 C 210.787 165.767 211.475 163.600 211.682 162.500 C 211.889 161.400 212.498 160.349 213.035 160.165 C 213.573 159.980 213.766 159.431 213.465 158.944 C 213.164 158.457 213.594 156.753 214.419 155.156 C 215.245 153.560 215.638 151.972 215.293 151.627 C 214.949 151.282 215.192 151.000 215.833 151.000 C 216.475 151.000 217.000 149.650 217.000 148.000 C 217.000 146.350 217.408 145.000 217.906 145.000 C 218.405 145.000 218.577 144.100 218.290 143.000 C 217.997 141.882 218.259 141.000 218.883 141.000 C 219.498 141.000 220.000 139.623 220.000 137.941 C 220.000 135.883 220.378 135.116 221.155 135.595 C 221.870 136.038 222.038 135.870 221.595 135.155 C 221.203 134.520 221.233 133.438 221.662 132.750 C 222.091 132.063 222.579 130.620 222.746 129.543 C 222.914 128.467 223.377 127.342 223.775 127.043 C 224.174 126.745 224.651 125.375 224.836 124.000 C 225.022 122.625 225.549 121.108 226.008 120.628 C 226.468 120.149 226.577 119.062 226.252 118.214 C 225.863 117.202 226.062 116.920 226.830 117.395 C 227.532 117.829 228.000 117.495 228.000 116.559 C 228.000 115.702 228.450 115.000 229.000 115.000 C 229.550 115.000 230.000 115.702 230.000 116.559 "/></g>
<g fill="#EC3425FD" stroke="#EC3425FD">
<path d="M 6.161 613.547 C 4.701 616.750 4.485 701.436 5.939 700.538 C 6.455 700.219 7.261 700.644 7.731 701.483 C 8.492 702.844 32.376 703.009 228.042 703.007 C 348.744 703.006 447.838 702.947 448.250 702.877 C 450.114 702.561 450.939 702.237 450.250 702.092 C 449.838 702.005 450.493 701.104 451.707 700.091 C 452.922 699.077 453.719 698.052 453.478 697.812 C 453.238 697.572 453.013 678.564 452.978 655.574 C 452.926 621.342 452.664 613.521 451.529 612.386 C 450.356 611.213 416.110 611.000 228.732 611.000 L 7.321 611.000 6.161 613.547 "/></g>
<g fill="#EC3425FD" stroke="#EC3425FD">
<path d="M 1394.159 226.160 C 1394.968 226.697 1390.142 226.946 1382.000 226.787 L 1368.500 226.522 1368.244 340.511 L 1367.989 454.500 1379.994 454.166 C 1387.469 453.958 1392.000 454.206 1392.000 454.822 C 1392.000 455.451 1403.168 455.828 1422.733 455.859 C 1443.988 455.892 1453.009 455.591 1451.983 454.882 C 1450.884 454.123 1451.406 453.975 1454.000 454.309 C 1455.925 454.558 1458.283 454.351 1459.240 453.850 C 1460.198 453.349 1462.542 452.881 1464.450 452.809 C 1466.358 452.738 1467.717 452.351 1467.469 451.949 C 1467.081 451.322 1472.486 449.709 1475.500 449.552 C 1476.050 449.523 1477.099 448.933 1477.831 448.241 C 1478.562 447.548 1479.575 447.237 1480.081 447.550 C 1480.586 447.862 1481.000 447.615 1481.000 447.000 C 1481.000 446.385 1481.450 446.160 1482.000 446.500 C 1482.550 446.840 1483.000 446.690 1483.000 446.167 C 1483.000 445.645 1484.125 444.934 1485.500 444.589 C 1486.875 444.244 1488.000 443.520 1488.000 442.981 C 1488.000 442.441 1488.450 442.000 1489.000 442.000 C 1491.131 442.000 1503.000 430.131 1503.000 428.000 C 1503.000 427.450 1503.477 427.000 1504.059 427.000 C 1504.641 427.000 1504.840 426.550 1504.500 426.000 C 1504.160 425.450 1504.359 425.000 1504.941 425.000 C 1505.523 425.000 1506.000 424.186 1506.000 423.191 C 1506.000 422.196 1506.661 420.509 1507.468 419.441 C 1508.276 418.374 1508.951 416.488 1508.968 415.250 C 1508.986 414.013 1509.382 413.000 1509.848 413.000 C 1510.314 413.000 1510.737 411.547 1510.787 409.770 C 1510.838 407.994 1511.311 406.396 1511.839 406.220 C 1512.378 406.041 1512.577 403.568 1512.293 400.575 C 1511.976 397.237 1512.201 394.994 1512.894 394.566 C 1513.503 394.189 1514.000 391.187 1514.000 387.882 C 1514.000 383.748 1513.656 382.095 1512.892 382.567 C 1512.124 383.042 1511.931 381.982 1512.263 379.105 C 1512.527 376.825 1512.412 374.755 1512.008 374.505 C 1511.255 374.040 1508.804 366.125 1508.976 364.714 C 1509.028 364.282 1508.376 363.233 1507.527 362.384 C 1506.677 361.534 1506.237 360.425 1506.550 359.919 C 1506.862 359.414 1506.566 359.000 1505.892 359.000 C 1505.218 359.000 1504.942 358.724 1505.279 358.388 C 1505.616 358.051 1504.568 356.363 1502.950 354.638 C 1501.333 352.912 1500.004 351.050 1499.998 350.500 C 1499.992 349.950 1498.611 348.717 1496.929 347.759 C 1495.073 346.703 1494.153 345.561 1494.590 344.855 C 1495.026 344.149 1494.874 343.960 1494.205 344.373 C 1493.597 344.749 1492.605 344.131 1492.000 343.000 C 1491.395 341.869 1490.499 341.192 1490.009 341.494 C 1489.520 341.797 1488.126 341.022 1486.913 339.772 C 1485.699 338.522 1485.030 338.175 1485.427 339.000 C 1485.824 339.825 1485.445 339.633 1484.584 338.573 C 1483.724 337.513 1482.737 336.929 1482.391 337.275 C 1482.045 337.622 1481.104 337.247 1480.300 336.443 C 1479.496 335.639 1478.425 335.237 1477.919 335.550 C 1477.414 335.862 1476.438 335.761 1475.750 335.324 C 1475.063 334.888 1474.056 334.524 1473.514 334.515 C 1472.971 334.507 1472.376 333.713 1472.190 332.750 C 1471.938 331.441 1472.517 331.000 1474.486 331.000 C 1475.986 331.000 1476.852 330.570 1476.500 330.000 C 1476.160 329.450 1476.584 328.944 1477.441 328.875 C 1480.723 328.612 1481.100 328.458 1482.021 327.000 C 1482.543 326.175 1482.983 325.950 1483.000 326.500 C 1483.017 327.050 1483.457 326.825 1483.979 326.000 C 1484.500 325.175 1485.410 324.500 1486.000 324.500 C 1486.590 324.500 1487.500 323.825 1488.021 323.000 C 1488.543 322.175 1488.976 321.880 1488.985 322.345 C 1488.993 322.809 1490.555 321.234 1492.455 318.845 C 1494.356 316.455 1496.568 313.750 1497.372 312.833 C 1498.176 311.917 1498.571 310.904 1498.250 310.583 C 1497.929 310.263 1498.171 310.000 1498.788 310.000 C 1499.405 310.000 1500.205 308.425 1500.566 306.500 C 1500.927 304.575 1501.531 303.000 1501.907 303.000 C 1502.283 303.000 1502.704 301.326 1502.842 299.281 C 1502.979 297.235 1503.420 295.322 1503.820 295.031 C 1504.997 294.173 1503.995 272.662 1502.718 271.385 C 1502.399 271.066 1502.408 270.100 1502.739 269.238 C 1503.166 268.125 1502.959 267.907 1502.025 268.485 C 1501.027 269.102 1500.832 268.660 1501.216 266.649 C 1501.495 265.192 1501.407 264.000 1501.022 264.000 C 1500.052 264.000 1497.798 258.869 1498.472 258.195 C 1498.772 257.894 1498.148 256.715 1497.084 255.574 C 1496.020 254.433 1495.004 252.874 1494.825 252.109 C 1494.646 251.344 1493.314 249.468 1491.865 247.942 C 1490.416 246.415 1488.616 244.333 1487.865 243.315 C 1485.912 240.666 1475.973 233.000 1474.492 233.000 C 1473.806 233.000 1472.685 232.325 1472.000 231.500 C 1471.315 230.675 1469.685 230.000 1468.378 230.000 C 1467.070 230.000 1466.000 229.564 1466.000 229.031 C 1466.000 228.499 1465.325 228.322 1464.500 228.638 C 1463.675 228.955 1463.000 228.812 1463.000 228.321 C 1463.000 227.402 1460.699 227.007 1455.552 227.042 C 1453.931 227.053 1452.956 226.710 1453.386 226.281 C 1453.815 225.851 1440.363 225.448 1423.492 225.385 C 1405.253 225.316 1393.361 225.630 1394.159 226.160 M 1441.403 352.158 C 1440.913 352.951 1441.366 353.138 1442.843 352.751 C 1444.028 352.441 1445.224 352.553 1445.500 353.000 C 1445.776 353.447 1446.972 353.559 1448.157 353.249 C 1449.744 352.834 1450.103 353.025 1449.517 353.972 C 1448.984 354.835 1449.179 355.097 1450.111 354.767 C 1450.875 354.496 1452.795 354.929 1454.377 355.729 C 1457.978 357.548 1464.091 363.044 1463.528 363.955 C 1463.296 364.329 1463.959 365.250 1465.000 366.000 C 1466.041 366.750 1466.665 367.732 1466.387 368.182 C 1466.109 368.632 1466.385 369.000 1467.000 369.000 C 1467.615 369.000 1467.840 369.450 1467.500 370.000 C 1467.160 370.550 1467.407 371.000 1468.048 371.000 C 1468.689 371.000 1468.955 371.675 1468.638 372.500 C 1468.322 373.325 1468.473 374.000 1468.974 374.000 C 1469.475 374.000 1469.712 374.900 1469.500 376.000 C 1469.288 377.100 1469.539 378.000 1470.057 378.000 C 1470.576 378.000 1470.993 381.263 1470.985 385.250 C 1470.974 390.300 1470.675 392.045 1470.000 391.000 C 1469.290 389.901 1469.027 390.638 1469.015 393.750 C 1469.007 396.088 1468.564 398.000 1468.031 398.000 C 1467.499 398.000 1467.322 398.675 1467.638 399.500 C 1467.955 400.325 1467.689 401.000 1467.048 401.000 C 1466.407 401.000 1466.131 401.403 1466.435 401.895 C 1466.740 402.388 1466.312 403.050 1465.485 403.367 C 1464.658 403.685 1464.081 404.294 1464.203 404.722 C 1464.535 405.888 1461.668 409.997 1460.509 410.017 C 1459.954 410.027 1458.419 411.174 1457.098 412.566 C 1455.777 413.958 1454.066 414.856 1453.296 414.560 C 1452.526 414.265 1452.171 414.468 1452.507 415.011 C 1452.843 415.555 1452.191 416.056 1451.059 416.125 C 1448.675 416.270 1448.076 416.416 1445.905 417.384 C 1445.027 417.775 1443.106 417.877 1441.634 417.610 C 1440.108 417.333 1439.208 417.528 1439.539 418.063 C 1439.890 418.631 1434.484 418.961 1425.809 418.900 C 1416.653 418.837 1412.400 418.498 1414.000 417.962 C 1416.135 417.245 1415.945 417.150 1412.694 417.311 L 1408.887 417.500 1408.968 384.250 L 1409.049 351.000 1425.584 351.000 C 1437.852 351.000 1441.933 351.299 1441.403 352.158 M 1439.500 263.000 C 1439.840 263.550 1441.666 264.000 1443.559 264.000 C 1445.452 264.000 1447.000 264.498 1447.000 265.107 C 1447.000 265.716 1447.638 265.969 1448.417 265.670 C 1449.197 265.371 1450.084 265.777 1450.389 266.572 C 1450.695 267.368 1451.294 267.905 1451.722 267.767 C 1452.928 267.376 1459.012 273.172 1458.413 274.141 C 1458.121 274.613 1458.328 275.000 1458.874 275.000 C 1459.900 275.000 1461.129 278.017 1461.520 281.500 C 1461.644 282.600 1461.851 283.050 1461.981 282.500 C 1462.111 281.950 1462.296 285.179 1462.392 289.675 C 1462.498 294.647 1462.193 297.619 1461.613 297.261 C 1461.089 296.937 1460.913 297.332 1461.223 298.138 C 1462.856 302.394 1452.647 314.696 1446.678 315.665 C 1444.655 315.993 1443.000 316.705 1443.000 317.247 C 1443.000 317.790 1441.864 318.016 1440.476 317.751 C 1439.088 317.485 1437.711 317.658 1437.417 318.134 C 1437.123 318.610 1430.609 319.000 1422.941 319.000 C 1411.216 319.000 1409.000 318.762 1409.000 317.500 C 1409.000 316.675 1408.460 316.000 1407.800 316.000 C 1406.867 316.000 1406.867 315.733 1407.800 314.800 C 1408.669 313.931 1409.000 306.756 1409.000 288.800 L 1409.000 264.000 1412.250 263.919 C 1414.038 263.874 1420.900 263.808 1427.500 263.771 L 1439.500 263.705 1431.000 263.039 L 1422.500 262.373 1430.691 262.186 C 1435.286 262.082 1439.153 262.439 1439.500 263.000 "/></g>
<g fill="#EC3425FD" stroke="#EC3425FD">
<path d="M 769.784 229.064 C 769.628 229.484 767.475 229.963 765.000 230.127 C 762.525 230.292 759.905 231.005 759.179 231.713 C 758.452 232.421 757.003 233.000 755.960 233.000 C 754.684 233.000 754.251 233.491 754.638 234.500 C 754.955 235.325 754.689 236.000 754.048 236.000 C 753.407 236.000 753.109 236.367 753.386 236.815 C 754.139 238.034 751.003 248.000 749.866 248.000 C 749.325 248.000 749.160 248.450 749.500 249.000 C 749.840 249.550 749.684 250.000 749.153 250.000 C 748.622 250.000 748.423 250.900 748.710 252.000 C 749.014 253.162 748.741 254.000 748.058 254.000 C 747.411 254.000 747.110 254.370 747.390 254.822 C 747.669 255.274 747.272 256.849 746.508 258.322 C 745.744 259.795 745.407 261.000 745.759 261.000 C 746.112 261.000 745.860 261.540 745.200 262.200 C 744.540 262.860 743.997 264.323 743.994 265.450 C 743.990 266.578 743.315 268.789 742.494 270.364 C 741.672 271.940 741.000 274.077 741.000 275.114 C 741.000 276.151 740.523 277.000 739.941 277.000 C 739.359 277.000 739.160 277.450 739.500 278.000 C 739.840 278.550 739.656 279.000 739.090 279.000 C 738.525 279.000 738.322 279.675 738.638 280.500 C 738.955 281.325 738.686 282.000 738.040 282.000 C 737.297 282.000 737.113 282.782 737.540 284.125 C 738.013 285.617 737.864 286.034 737.040 285.525 C 736.338 285.091 735.969 285.342 736.122 286.150 C 736.529 288.302 734.931 294.000 733.921 294.000 C 733.414 294.000 733.000 295.350 733.000 297.000 C 733.000 298.650 732.564 300.000 732.031 300.000 C 731.499 300.000 731.328 300.692 731.653 301.537 C 731.977 302.383 731.512 303.882 730.619 304.868 C 729.726 305.855 729.297 306.963 729.664 307.331 C 730.032 307.699 729.822 308.000 729.198 308.000 C 728.574 308.000 728.304 308.629 728.600 309.399 C 728.895 310.168 728.648 311.099 728.052 311.468 C 727.455 311.837 727.207 312.526 727.500 313.000 C 727.793 313.474 727.595 314.132 727.060 314.463 C 726.525 314.794 726.369 315.798 726.714 316.696 C 727.166 317.875 726.972 318.101 726.015 317.510 C 725.223 317.020 724.932 317.081 725.292 317.663 C 725.865 318.590 724.607 323.007 721.920 329.500 C 721.238 331.150 720.782 333.108 720.907 333.850 C 721.048 334.691 720.667 334.912 719.897 334.436 C 719.035 333.903 718.853 334.176 719.299 335.336 C 719.650 336.251 719.475 337.000 718.910 337.000 C 718.344 337.000 718.164 337.456 718.508 338.013 C 718.852 338.570 718.429 340.439 717.567 342.166 C 716.705 343.894 716.000 346.138 716.000 347.154 C 716.000 348.169 715.646 349.000 715.213 349.000 C 714.780 349.000 714.350 350.006 714.257 351.235 C 714.165 352.465 713.667 353.611 713.151 353.783 C 712.635 353.955 712.442 354.974 712.723 356.048 C 713.004 357.123 712.732 358.000 712.117 358.000 C 711.502 358.000 711.076 358.338 711.168 358.750 C 711.577 360.573 709.693 366.928 708.890 366.432 C 708.401 366.130 708.000 367.259 708.000 368.941 C 708.000 370.623 707.564 372.000 707.031 372.000 C 706.499 372.000 706.322 372.675 706.638 373.500 C 706.955 374.325 706.767 375.000 706.221 375.000 C 705.674 375.000 704.922 377.034 704.549 379.519 C 704.111 382.445 703.482 383.798 702.766 383.355 C 702.052 382.914 701.886 383.262 702.299 384.336 C 702.650 385.251 702.471 386.000 701.901 386.000 C 701.300 386.000 701.148 386.892 701.540 388.125 C 702.036 389.688 701.881 390.044 700.953 389.471 C 700.144 388.971 699.941 389.095 700.386 389.816 C 700.769 390.435 700.406 392.247 699.581 393.844 C 698.755 395.440 698.362 397.028 698.707 397.373 C 699.051 397.718 698.782 398.000 698.108 398.000 C 697.434 398.000 697.141 398.419 697.457 398.931 C 697.774 399.443 697.568 400.149 697.000 400.500 C 696.432 400.851 696.226 401.557 696.543 402.069 C 696.859 402.581 696.611 403.000 695.992 403.000 C 695.320 403.000 695.122 403.808 695.500 405.000 C 695.864 406.147 695.680 407.000 695.067 407.000 C 694.480 407.000 694.000 408.125 694.000 409.500 C 694.000 410.875 693.592 412.000 693.094 412.000 C 692.595 412.000 692.423 412.900 692.710 414.000 C 692.998 415.100 692.827 416.000 692.329 416.000 C 691.832 416.000 691.352 416.972 691.263 418.160 C 691.173 419.348 690.589 420.636 689.965 421.022 C 689.340 421.408 688.867 422.123 688.913 422.612 C 689.126 424.868 687.679 430.000 686.830 430.000 C 686.308 430.000 686.110 430.370 686.390 430.822 C 686.669 431.274 686.325 432.748 685.624 434.098 C 684.924 435.448 684.555 437.166 684.805 437.915 C 685.108 438.825 684.827 439.011 683.960 438.475 C 683.026 437.898 682.840 438.141 683.299 439.336 C 683.650 440.251 683.614 441.001 683.219 441.002 C 682.823 441.003 682.397 442.462 682.271 444.245 C 682.145 446.027 681.583 447.639 681.021 447.826 C 680.460 448.013 680.000 449.263 680.000 450.602 L 680.000 453.038 702.249 452.769 C 721.188 452.540 724.513 452.277 724.597 451.000 C 724.885 446.611 725.073 445.927 725.856 446.411 C 726.326 446.702 726.490 445.716 726.219 444.220 C 725.936 442.660 726.105 441.855 726.613 442.333 C 727.101 442.792 727.534 442.792 727.575 442.333 C 727.956 438.088 729.405 431.868 730.115 431.429 C 730.602 431.128 731.003 430.121 731.006 429.191 C 731.010 428.261 731.685 426.211 732.506 424.636 C 733.328 423.060 734.000 420.698 734.000 419.386 C 734.000 418.074 734.477 417.000 735.059 417.000 C 735.641 417.000 735.869 416.597 735.564 416.104 C 735.260 415.611 735.622 414.030 736.369 412.590 L 737.727 409.972 777.628 409.941 C 807.921 409.919 817.435 410.196 817.135 411.095 C 816.918 411.746 817.219 411.983 817.804 411.621 C 818.474 411.207 818.835 412.116 818.779 414.077 C 818.730 415.790 819.309 417.573 820.066 418.041 C 820.823 418.509 821.122 419.212 820.730 419.604 C 820.338 419.995 820.463 420.853 821.008 421.509 C 821.552 422.165 822.096 423.894 822.217 425.351 C 822.338 426.808 822.836 428.000 823.325 428.000 C 823.814 428.000 823.926 428.752 823.573 429.670 C 823.221 430.589 823.441 431.655 824.064 432.039 C 824.686 432.424 825.264 433.922 825.348 435.369 C 825.431 436.815 825.886 437.999 826.357 437.999 C 826.828 438.000 826.960 438.661 826.651 439.468 C 826.341 440.275 826.525 441.206 827.060 441.537 C 827.595 441.868 827.793 442.526 827.500 443.000 C 827.207 443.474 827.455 444.163 828.052 444.532 C 828.648 444.901 828.895 445.832 828.600 446.601 C 828.304 447.371 828.527 448.000 829.094 448.000 C 829.662 448.000 829.985 449.013 829.813 450.250 L 829.500 452.500 852.750 452.768 C 873.708 453.010 876.000 452.876 876.000 451.403 C 876.000 449.604 873.237 440.540 871.825 437.709 C 871.334 436.724 871.199 435.487 871.525 434.959 C 871.851 434.432 871.641 434.000 871.059 434.000 C 870.477 434.000 870.000 432.902 870.000 431.559 C 870.000 430.216 869.519 428.821 868.932 428.458 C 868.344 428.095 868.135 427.092 868.466 426.229 C 868.797 425.366 868.580 424.358 867.984 423.990 C 867.388 423.622 866.827 422.348 866.737 421.160 C 866.648 419.972 866.172 419.000 865.680 419.000 C 865.188 419.000 865.040 418.339 865.349 417.532 C 865.659 416.725 865.470 415.791 864.930 415.457 C 864.389 415.123 864.012 414.321 864.092 413.675 C 864.445 410.811 863.919 408.932 862.933 409.541 C 862.346 409.904 861.968 409.593 862.093 408.850 C 862.218 408.108 861.795 406.225 861.153 404.666 C 860.511 403.107 860.240 401.420 860.552 400.916 C 860.863 400.412 860.593 400.000 859.952 400.000 C 859.311 400.000 859.040 399.338 859.351 398.529 C 859.661 397.720 859.254 396.397 858.447 395.590 C 857.639 394.782 856.698 392.079 856.356 389.584 C 856.014 387.088 855.362 385.276 854.906 385.558 C 854.451 385.839 853.779 383.813 853.413 381.054 C 853.013 378.038 852.341 376.289 851.729 376.668 C 851.094 377.060 850.899 376.311 851.210 374.684 C 851.484 373.246 851.366 371.942 850.946 371.785 C 850.527 371.628 850.029 370.600 849.842 369.500 C 849.654 368.400 849.192 367.267 848.815 366.981 C 848.439 366.696 847.977 365.346 847.790 363.981 C 847.603 362.617 847.097 360.938 846.666 360.250 C 846.235 359.563 846.203 358.480 846.595 357.845 C 847.007 357.180 846.873 356.961 846.280 357.327 C 845.675 357.701 845.250 356.893 845.250 355.368 C 845.250 353.941 844.761 352.470 844.164 352.101 C 843.566 351.732 842.828 349.443 842.523 347.014 C 842.218 344.585 841.413 342.245 840.734 341.814 C 840.055 341.383 839.849 341.024 840.276 341.015 C 840.702 341.007 840.427 339.763 839.663 338.250 C 838.899 336.738 838.475 334.938 838.721 334.250 C 838.966 333.563 838.679 333.000 838.083 333.000 C 837.488 333.000 837.053 332.663 837.118 332.250 C 837.184 331.838 837.127 331.163 836.993 330.750 C 836.860 330.338 836.656 329.663 836.541 329.250 C 836.426 328.838 835.808 327.233 835.166 325.685 C 834.525 324.137 834.000 321.999 834.000 320.935 C 834.000 319.871 833.498 319.000 832.883 319.000 C 832.268 319.000 831.996 318.123 832.277 317.048 C 832.558 315.974 832.413 314.962 831.955 314.798 C 831.497 314.634 830.907 313.150 830.644 311.500 C 830.380 309.850 830.074 308.275 829.964 308.000 C 829.853 307.725 829.840 307.091 829.934 306.592 C 830.029 306.092 829.609 305.377 829.003 305.002 C 828.396 304.627 827.827 303.348 827.737 302.160 C 827.648 300.972 827.172 300.000 826.680 300.000 C 826.188 300.000 826.040 299.339 826.349 298.532 C 826.659 297.725 826.482 296.798 825.956 296.473 C 825.430 296.148 825.000 294.532 825.000 292.882 C 825.000 290.943 824.608 290.124 823.893 290.566 C 823.148 291.027 823.006 290.555 823.460 289.125 C 823.860 287.864 823.701 287.000 823.067 287.000 C 822.480 287.000 822.073 286.663 822.161 286.250 C 822.250 285.838 821.800 284.233 821.161 282.685 C 820.523 281.137 820.000 279.026 820.000 277.994 C 820.000 276.962 819.519 275.821 818.932 275.458 C 818.344 275.095 818.105 274.168 818.400 273.399 C 818.696 272.629 818.501 272.000 817.969 272.000 C 817.436 272.000 817.000 270.902 817.000 269.559 C 817.000 268.216 816.528 266.827 815.952 266.470 C 815.376 266.114 814.978 265.075 815.067 264.161 C 815.157 263.248 815.159 262.725 815.071 263.000 C 814.984 263.275 814.262 261.700 813.467 259.500 C 812.672 257.300 812.236 254.914 812.499 254.198 C 812.788 253.412 812.523 253.177 811.831 253.604 C 811.052 254.086 810.865 253.623 811.249 252.156 C 811.559 250.970 811.378 250.000 810.847 250.000 C 810.316 250.000 810.160 249.550 810.500 249.000 C 810.840 248.450 810.593 248.000 809.952 248.000 C 809.311 248.000 809.040 247.339 809.349 246.532 C 809.659 245.725 809.475 244.794 808.940 244.463 C 808.405 244.132 808.207 243.474 808.500 243.000 C 808.793 242.526 808.545 241.837 807.948 241.468 C 807.352 241.099 807.105 240.168 807.400 239.399 C 807.696 238.629 807.501 238.000 806.969 238.000 C 806.436 238.000 806.000 236.848 806.000 235.441 C 806.000 234.034 805.581 233.141 805.069 233.457 C 804.557 233.774 803.856 233.575 803.510 233.016 C 803.165 232.457 801.934 232.000 800.774 232.000 C 799.615 232.000 799.004 231.663 799.417 231.250 C 800.309 230.358 799.831 230.287 791.833 230.125 C 788.442 230.056 786.003 229.664 786.414 229.253 C 786.825 228.842 783.315 228.459 778.614 228.402 C 773.913 228.345 769.939 228.643 769.784 229.064 M 780.125 276.000 C 780.327 277.620 780.519 278.307 781.859 282.215 C 782.559 284.258 783.170 287.280 783.217 288.930 C 783.267 290.672 783.725 291.670 784.309 291.309 C 784.921 290.931 785.095 291.530 784.751 292.843 C 784.441 294.028 784.565 295.231 785.027 295.516 C 785.488 295.801 785.826 297.420 785.778 299.113 C 785.730 300.805 786.309 302.573 787.066 303.041 C 787.823 303.509 788.144 304.190 787.779 304.555 C 787.414 304.920 787.996 307.452 789.072 310.182 C 790.148 312.912 790.779 315.548 790.475 316.041 C 790.170 316.534 790.857 318.990 792.000 321.500 C 793.143 324.010 793.829 326.468 793.523 326.963 C 793.217 327.457 793.432 328.149 794.000 328.500 C 794.568 328.851 794.774 329.557 794.457 330.069 C 794.141 330.581 794.387 331.000 795.004 331.000 C 795.621 331.000 795.996 331.788 795.838 332.750 C 795.679 333.713 795.906 335.069 796.342 335.763 C 796.778 336.458 797.172 338.355 797.218 339.979 C 797.265 341.603 797.700 342.686 798.185 342.385 C 798.671 342.085 798.862 342.975 798.611 344.362 C 798.359 345.749 798.610 347.037 799.169 347.223 C 799.727 347.409 800.255 348.785 800.342 350.280 C 800.429 351.775 800.868 352.999 801.317 352.999 C 801.767 353.000 801.849 353.900 801.500 355.000 C 801.151 356.100 801.303 357.000 801.839 357.000 C 802.375 357.000 802.577 357.900 802.290 359.000 C 801.977 360.195 802.259 361.000 802.990 361.000 C 803.667 361.000 803.957 361.670 803.638 362.500 C 803.322 363.325 803.499 364.000 804.031 364.000 C 804.564 364.000 805.000 365.350 805.000 367.000 C 805.000 368.714 805.536 370.015 806.250 370.035 C 806.938 370.055 806.419 370.670 805.099 371.402 C 803.342 372.375 803.073 372.881 804.099 373.287 C 804.869 373.592 792.900 373.824 777.500 373.803 C 762.100 373.781 750.850 373.420 752.500 373.000 L 755.500 372.237 752.809 372.118 C 749.341 371.966 748.712 370.835 750.149 367.334 C 750.788 365.775 751.398 364.050 751.504 363.500 C 751.609 362.950 751.832 362.500 752.000 362.500 C 752.168 362.500 752.373 362.050 752.457 361.500 C 753.262 356.227 754.261 353.000 755.089 353.000 C 755.638 353.000 755.978 352.438 755.843 351.750 C 755.412 349.542 757.058 343.000 758.045 343.000 C 758.570 343.000 759.000 341.173 759.000 338.941 C 759.000 336.521 759.399 335.129 759.989 335.493 C 760.555 335.843 760.723 335.442 760.382 334.552 C 760.054 333.698 760.242 333.000 760.799 333.000 C 761.357 333.000 761.591 332.151 761.319 331.113 C 761.048 330.075 761.295 328.936 761.869 328.581 C 762.443 328.226 762.659 327.275 762.349 326.468 C 762.040 325.661 762.311 325.000 762.952 325.000 C 763.593 325.000 763.863 324.588 763.552 324.084 C 763.240 323.580 763.511 321.893 764.153 320.334 C 764.795 318.775 765.229 316.938 765.117 316.250 C 765.004 315.563 765.382 315.000 765.956 315.000 C 766.530 315.000 767.000 313.650 767.000 312.000 C 767.000 310.350 767.459 309.000 768.019 309.000 C 768.607 309.000 768.772 307.942 768.411 306.500 C 768.066 305.125 768.184 304.000 768.673 304.000 C 769.163 304.000 769.666 302.763 769.791 301.250 C 769.915 299.738 770.466 298.349 771.015 298.165 C 771.564 297.980 771.758 297.418 771.447 296.915 C 771.136 296.412 771.235 295.438 771.666 294.750 C 772.097 294.063 772.603 292.383 772.790 291.019 C 772.977 289.654 773.609 288.242 774.193 287.881 C 774.778 287.519 774.970 286.761 774.621 286.196 C 774.272 285.630 774.512 283.893 775.154 282.334 C 775.797 280.775 776.246 279.149 776.151 278.719 C 775.943 277.774 778.202 275.091 779.250 275.038 C 779.663 275.017 780.056 275.450 780.125 276.000 "/></g>
<g fill="#EC3425FD" stroke="#EC3425FD">
<path d="M 1863.000 341.500 L 1863.000 453.000 1883.000 453.000 L 1903.000 453.000 1903.000 421.582 C 1903.000 404.302 1903.273 389.452 1903.607 388.582 C 1904.047 387.434 1905.573 387.000 1909.166 387.000 C 1911.978 387.000 1913.869 387.403 1913.541 387.934 C 1913.224 388.447 1914.289 388.830 1915.909 388.784 C 1918.855 388.700 1925.000 393.526 1925.000 395.923 C 1925.000 396.515 1925.395 397.000 1925.877 397.000 C 1926.808 397.000 1931.524 406.978 1931.195 408.250 C 1931.088 408.663 1931.477 409.000 1932.059 409.000 C 1932.641 409.000 1932.862 409.414 1932.550 409.919 C 1932.237 410.425 1932.693 411.550 1933.562 412.419 C 1934.432 413.289 1934.875 414.000 1934.548 414.000 C 1934.221 414.000 1934.641 415.048 1935.480 416.330 C 1936.320 417.611 1936.705 418.961 1936.337 419.330 C 1935.968 419.698 1936.178 420.000 1936.802 420.000 C 1937.450 420.000 1937.663 420.714 1937.299 421.664 C 1936.898 422.708 1937.057 423.083 1937.725 422.670 C 1938.925 421.928 1940.311 424.687 1939.444 426.090 C 1939.135 426.591 1939.434 427.000 1940.108 427.000 C 1940.782 427.000 1941.049 427.284 1940.702 427.631 C 1940.355 427.979 1940.600 429.216 1941.248 430.381 C 1941.895 431.547 1942.329 432.838 1942.212 433.250 C 1942.096 433.663 1942.450 434.000 1943.000 434.000 C 1943.550 434.000 1944.000 435.125 1944.000 436.500 C 1944.000 437.875 1944.477 439.000 1945.059 439.000 C 1945.641 439.000 1945.840 439.450 1945.500 440.000 C 1945.160 440.550 1945.359 441.000 1945.941 441.000 C 1946.523 441.000 1947.000 442.152 1947.000 443.559 C 1947.000 445.258 1947.393 445.875 1948.170 445.395 C 1948.967 444.903 1949.127 445.227 1948.673 446.410 C 1948.285 447.422 1948.636 448.778 1949.512 449.655 C 1950.341 450.483 1950.763 451.575 1950.450 452.081 C 1950.111 452.629 1958.975 453.000 1972.441 453.000 C 1991.827 453.000 1995.000 452.789 1995.000 451.500 C 1995.000 450.675 1994.580 450.000 1994.067 450.000 C 1993.118 450.000 1991.441 446.115 1991.802 444.750 C 1991.911 444.338 1991.523 444.000 1990.941 444.000 C 1990.359 444.000 1990.129 443.601 1990.430 443.113 C 1990.731 442.626 1990.313 441.675 1989.500 441.000 C 1988.687 440.325 1988.269 439.374 1988.570 438.887 C 1988.871 438.399 1988.641 438.000 1988.059 438.000 C 1987.477 438.000 1987.000 437.397 1987.000 436.660 C 1987.000 435.923 1985.658 432.885 1984.018 429.910 C 1982.378 426.934 1981.028 423.635 1981.018 422.579 C 1981.008 421.522 1980.291 419.874 1979.424 418.916 C 1978.558 417.959 1977.692 416.348 1977.501 415.338 C 1977.310 414.327 1977.101 413.950 1977.037 414.500 C 1976.974 415.050 1976.302 414.075 1975.544 412.333 C 1974.787 410.592 1974.429 408.904 1974.750 408.583 C 1975.071 408.263 1974.782 408.000 1974.108 408.000 C 1973.434 408.000 1973.160 407.550 1973.500 407.000 C 1973.840 406.450 1973.566 406.000 1972.892 406.000 C 1972.218 406.000 1971.945 405.721 1972.286 405.381 C 1972.626 405.040 1972.251 404.108 1971.452 403.310 C 1970.654 402.511 1970.000 400.738 1970.000 399.370 C 1970.000 398.001 1969.597 397.131 1969.105 397.435 C 1968.080 398.068 1967.000 395.747 1967.000 392.912 C 1967.000 391.853 1965.862 389.998 1964.472 388.788 C 1963.081 387.579 1962.164 386.014 1962.434 385.310 C 1962.705 384.606 1962.042 383.558 1960.963 382.980 C 1959.883 382.402 1959.000 381.519 1959.000 381.016 C 1959.000 379.666 1954.452 375.000 1953.135 375.000 C 1952.511 375.000 1952.000 374.523 1952.000 373.941 C 1952.000 373.359 1951.550 373.160 1951.000 373.500 C 1950.450 373.840 1950.000 373.641 1950.000 373.059 C 1950.000 372.477 1949.127 372.000 1948.059 372.000 C 1946.991 372.000 1945.835 371.543 1945.490 370.984 C 1945.144 370.425 1944.474 370.207 1944.000 370.500 C 1943.526 370.793 1942.856 370.575 1942.510 370.016 C 1942.165 369.457 1942.584 369.000 1943.441 369.000 C 1944.298 369.000 1945.000 368.502 1945.000 367.893 C 1945.000 367.284 1945.660 367.039 1946.467 367.349 C 1947.316 367.675 1949.212 366.634 1950.967 364.879 C 1952.635 363.211 1954.000 362.161 1954.000 362.546 C 1954.000 362.930 1954.670 362.689 1955.489 362.009 C 1956.308 361.329 1956.731 360.374 1956.430 359.887 C 1956.129 359.399 1956.610 359.000 1957.500 359.000 C 1958.390 359.000 1958.869 358.597 1958.565 358.105 C 1958.260 357.612 1958.796 356.864 1959.756 356.441 C 1960.781 355.989 1960.961 355.637 1960.193 355.586 C 1959.305 355.528 1959.527 354.812 1960.883 353.356 C 1961.981 352.177 1962.607 350.940 1962.273 350.606 C 1961.940 350.273 1962.192 350.000 1962.833 350.000 C 1963.475 350.000 1964.000 349.325 1964.000 348.500 C 1964.000 347.675 1964.488 347.000 1965.083 347.000 C 1965.679 347.000 1965.981 346.442 1965.753 345.759 C 1965.525 345.076 1965.942 343.915 1966.679 343.178 C 1967.416 342.442 1967.763 341.425 1967.450 340.919 C 1967.138 340.414 1967.359 340.000 1967.941 340.000 C 1968.523 340.000 1968.911 339.663 1968.802 339.250 C 1968.430 337.843 1970.132 334.000 1971.126 334.000 C 1971.672 334.000 1971.869 333.597 1971.565 333.105 C 1971.260 332.612 1971.796 331.864 1972.756 331.441 C 1973.715 331.019 1973.929 330.634 1973.232 330.586 C 1972.494 330.536 1973.259 328.928 1975.062 326.741 C 1976.766 324.673 1978.578 323.239 1979.088 323.554 C 1979.597 323.869 1980.283 323.426 1980.611 322.570 C 1981.035 321.466 1981.946 321.199 1983.753 321.653 C 1985.762 322.157 1986.121 321.997 1985.457 320.896 C 1984.756 319.733 1984.883 319.717 1986.219 320.799 C 1987.101 321.513 1988.034 321.738 1988.292 321.299 C 1988.551 320.859 1988.812 315.376 1988.873 309.112 C 1988.934 302.849 1989.433 297.183 1989.983 296.520 C 1991.346 294.878 1990.229 294.000 1986.774 294.000 C 1985.101 294.000 1984.142 293.579 1984.500 293.000 C 1984.840 292.450 1984.641 292.000 1984.059 292.000 C 1983.477 292.000 1982.998 292.338 1982.995 292.750 C 1982.992 293.163 1978.379 293.654 1972.745 293.842 C 1967.110 294.030 1961.957 294.631 1961.294 295.178 C 1960.630 295.725 1959.618 295.882 1959.044 295.527 C 1958.470 295.172 1958.000 295.359 1958.000 295.941 C 1958.000 296.523 1957.122 297.000 1956.050 297.000 C 1954.977 297.000 1953.641 297.788 1953.080 298.750 C 1952.519 299.713 1952.047 300.097 1952.030 299.604 C 1951.990 298.420 1947.000 303.824 1947.000 305.052 C 1947.000 305.573 1946.523 306.000 1945.941 306.000 C 1945.359 306.000 1945.143 306.422 1945.462 306.939 C 1945.781 307.455 1945.390 308.242 1944.592 308.689 C 1943.180 309.479 1943.000 309.860 1943.000 312.059 C 1943.000 312.641 1942.550 312.840 1942.000 312.500 C 1941.101 311.944 1940.567 313.257 1940.882 315.250 C 1940.947 315.663 1940.523 316.000 1939.941 316.000 C 1939.359 316.000 1939.138 316.414 1939.450 316.919 C 1939.763 317.425 1939.416 318.442 1938.679 319.178 C 1937.942 319.915 1937.525 321.076 1937.753 321.759 C 1937.981 322.442 1937.679 323.000 1937.083 323.000 C 1936.488 323.000 1936.000 323.927 1936.000 325.059 C 1936.000 326.376 1935.579 326.858 1934.830 326.395 C 1934.043 325.909 1933.869 326.217 1934.299 327.336 C 1934.650 328.251 1934.501 329.000 1933.969 329.000 C 1933.436 329.000 1933.000 329.900 1933.000 331.000 C 1933.000 332.100 1932.550 333.000 1932.000 333.000 C 1931.450 333.000 1931.089 333.338 1931.198 333.750 C 1931.589 335.230 1929.843 339.000 1928.766 339.000 C 1928.161 339.000 1927.929 339.263 1928.250 339.583 C 1928.571 339.904 1928.213 341.592 1927.456 343.333 C 1926.698 345.075 1926.004 346.163 1925.914 345.750 C 1925.824 345.338 1925.672 345.338 1925.576 345.750 C 1924.800 349.090 1923.605 350.991 1921.949 351.516 C 1920.877 351.856 1920.000 352.581 1920.000 353.126 C 1920.000 353.672 1919.550 353.840 1919.000 353.500 C 1918.450 353.160 1918.000 353.329 1918.000 353.875 C 1918.000 354.458 1915.007 354.792 1910.750 354.684 L 1903.500 354.500 1903.242 292.250 L 1902.985 230.000 1882.992 230.000 L 1863.000 230.000 1863.000 341.500 "/></g>
<g fill="#EC3425FD" stroke="#EC3425FD">
<path d="M 1127.420 291.836 C 1128.064 292.905 1126.991 293.104 1122.030 292.836 C 1118.623 292.651 1116.155 292.820 1116.546 293.212 C 1116.937 293.603 1114.532 293.858 1111.202 293.778 C 1107.872 293.698 1104.552 294.122 1103.824 294.720 C 1102.684 295.656 1093.209 297.346 1090.617 297.076 C 1090.131 297.025 1089.638 298.562 1089.521 300.492 C 1089.404 302.421 1089.684 304.000 1090.143 304.000 C 1090.602 304.000 1090.976 305.013 1090.974 306.250 C 1090.967 310.486 1091.303 312.500 1092.103 313.029 C 1092.842 313.518 1093.775 320.053 1093.955 326.000 C 1094.007 327.710 1094.291 328.090 1094.854 327.202 C 1095.414 326.319 1097.316 326.033 1100.803 326.308 C 1103.623 326.530 1106.058 326.329 1106.215 325.862 C 1106.639 324.598 1138.085 323.983 1142.618 325.151 C 1144.753 325.701 1147.312 326.143 1148.304 326.133 C 1149.296 326.124 1150.356 326.765 1150.661 327.558 C 1150.965 328.351 1151.829 329.000 1152.581 329.000 C 1154.375 329.000 1157.155 334.433 1156.386 336.437 C 1156.056 337.296 1156.242 338.000 1156.799 338.000 C 1158.117 338.000 1158.296 354.994 1157.000 357.000 C 1156.422 357.894 1156.024 358.021 1156.015 357.313 C 1156.005 356.516 1154.850 356.312 1152.500 356.694 C 1150.246 357.060 1149.000 356.863 1149.000 356.142 C 1149.000 355.526 1147.988 355.031 1146.750 355.041 C 1145.513 355.051 1140.450 355.088 1135.500 355.123 C 1122.769 355.211 1118.838 355.504 1119.637 356.304 C 1120.020 356.687 1118.796 357.069 1116.917 357.152 C 1111.740 357.383 1111.196 357.471 1110.473 358.194 C 1110.105 358.561 1109.100 358.592 1108.238 358.261 C 1107.113 357.829 1106.905 358.038 1107.500 359.000 C 1108.102 359.974 1107.882 360.169 1106.696 359.714 C 1105.798 359.369 1104.798 359.518 1104.473 360.044 C 1104.148 360.570 1103.009 361.000 1101.941 361.000 C 1100.873 361.000 1100.000 361.348 1100.000 361.773 C 1100.000 362.198 1098.320 363.435 1096.266 364.523 C 1092.632 366.447 1082.514 375.780 1082.505 377.218 C 1082.502 377.612 1081.825 378.769 1081.000 379.788 C 1080.175 380.808 1079.354 382.285 1079.175 383.071 C 1078.996 383.857 1078.431 384.651 1077.919 384.835 C 1077.407 385.020 1077.242 385.582 1077.553 386.085 C 1077.864 386.588 1077.615 387.000 1077.000 387.000 C 1076.385 387.000 1076.140 387.418 1076.456 387.929 C 1077.024 388.848 1075.376 397.229 1074.109 399.864 C 1073.749 400.614 1073.820 405.339 1074.268 410.364 C 1074.716 415.389 1075.120 420.504 1075.166 421.732 C 1075.212 422.959 1075.644 423.720 1076.125 423.423 C 1076.606 423.125 1077.000 424.259 1077.000 425.941 C 1077.000 427.623 1077.525 429.000 1078.167 429.000 C 1078.808 429.000 1079.060 429.273 1078.726 429.607 C 1078.392 429.942 1079.218 431.401 1080.562 432.850 C 1081.906 434.299 1082.863 435.912 1082.689 436.433 C 1082.290 437.629 1089.368 445.000 1090.914 445.000 C 1091.546 445.000 1092.322 445.675 1092.638 446.500 C 1092.955 447.325 1093.884 448.000 1094.703 448.000 C 1095.521 448.000 1097.437 448.887 1098.959 449.970 C 1100.480 451.054 1102.012 451.654 1102.363 451.304 C 1102.713 450.953 1103.000 451.094 1103.000 451.615 C 1103.000 452.137 1104.165 452.660 1105.589 452.778 C 1107.013 452.896 1108.701 453.315 1109.339 453.709 C 1109.977 454.104 1111.737 454.296 1113.249 454.138 C 1114.804 453.975 1116.000 454.343 1116.000 454.984 C 1116.000 455.774 1119.176 456.045 1126.445 455.874 C 1132.719 455.727 1136.655 455.251 1136.303 454.681 C 1135.956 454.120 1137.090 453.933 1139.074 454.224 C 1140.921 454.495 1143.930 454.091 1145.760 453.327 C 1147.591 452.562 1149.518 452.202 1150.044 452.527 C 1150.570 452.852 1151.000 452.641 1151.000 452.059 C 1151.000 451.477 1151.814 451.000 1152.809 451.000 C 1153.804 451.000 1155.491 450.339 1156.559 449.532 C 1157.626 448.724 1159.288 448.049 1160.250 448.032 C 1161.213 448.014 1162.000 447.523 1162.000 446.941 C 1162.000 446.359 1162.450 446.160 1163.000 446.500 C 1163.550 446.840 1164.000 446.641 1164.000 446.059 C 1164.000 445.477 1164.482 445.000 1165.071 445.000 C 1165.661 445.000 1166.798 444.344 1167.600 443.543 C 1168.876 442.267 1169.519 442.583 1172.778 446.087 C 1174.825 448.287 1177.959 450.792 1179.741 451.653 C 1181.524 452.515 1182.764 453.573 1182.497 454.005 C 1182.230 454.437 1182.788 455.088 1183.737 455.452 C 1184.686 455.817 1185.621 455.636 1185.816 455.051 C 1186.011 454.466 1186.582 454.242 1187.085 454.553 C 1187.588 454.864 1188.000 454.615 1188.000 454.000 C 1188.000 453.385 1188.453 453.162 1189.007 453.504 C 1189.561 453.847 1190.283 453.426 1190.612 452.569 C 1190.941 451.712 1191.530 451.210 1191.923 451.452 C 1192.315 451.695 1193.267 451.017 1194.039 449.946 C 1194.810 448.876 1195.855 448.000 1196.361 448.000 C 1196.866 448.000 1197.779 447.350 1198.390 446.555 C 1199.000 445.760 1200.138 444.973 1200.917 444.805 C 1201.696 444.637 1203.046 443.925 1203.917 443.223 C 1204.788 442.521 1206.850 440.865 1208.500 439.543 C 1210.908 437.613 1211.253 436.889 1210.250 435.870 C 1209.563 435.171 1209.000 433.812 1209.000 432.850 C 1209.000 431.887 1208.213 430.641 1207.250 430.080 C 1206.288 429.519 1205.870 429.047 1206.321 429.030 C 1206.773 429.014 1206.432 428.289 1205.562 427.419 C 1204.693 426.550 1204.237 425.425 1204.550 424.919 C 1204.862 424.414 1204.694 424.000 1204.176 424.000 C 1203.321 424.000 1201.914 421.019 1201.580 418.500 C 1201.507 417.950 1201.060 416.881 1200.587 416.125 C 1200.114 415.369 1199.727 413.006 1199.727 410.875 C 1199.727 408.744 1199.420 407.000 1199.045 407.000 C 1198.670 407.000 1198.394 392.488 1198.431 374.750 C 1198.469 357.013 1198.109 339.575 1197.632 336.000 C 1197.154 332.425 1196.646 328.375 1196.502 327.000 C 1196.358 325.625 1195.939 323.780 1195.570 322.899 C 1195.202 322.019 1194.976 320.894 1195.069 320.399 C 1195.492 318.136 1194.909 315.938 1194.029 316.482 C 1193.495 316.812 1192.747 315.841 1192.367 314.324 C 1191.986 312.808 1190.805 310.652 1189.741 309.533 C 1188.678 308.415 1187.389 306.425 1186.876 305.111 C 1186.363 303.798 1185.681 302.986 1185.360 303.307 C 1185.038 303.628 1183.363 302.562 1181.638 300.937 C 1178.816 298.280 1173.599 296.021 1170.250 296.006 C 1169.563 296.003 1169.000 295.597 1169.000 295.104 C 1169.000 294.611 1165.400 293.889 1161.000 293.500 C 1156.600 293.111 1153.000 292.334 1153.000 291.773 C 1153.000 291.154 1152.447 291.214 1151.589 291.926 C 1150.624 292.727 1149.973 292.765 1149.530 292.049 C 1148.657 290.636 1135.729 290.711 1132.577 292.147 C 1130.592 293.051 1129.695 292.998 1128.338 291.897 C 1126.998 290.810 1126.794 290.796 1127.420 291.836 M 1156.448 382.085 C 1156.137 382.588 1156.364 383.000 1156.952 383.000 C 1157.886 383.000 1158.346 395.679 1157.998 411.832 C 1157.948 414.170 1158.282 414.944 1159.119 414.426 C 1159.997 413.884 1160.136 414.569 1159.646 417.022 C 1158.811 421.194 1158.970 421.060 1154.083 421.716 C 1151.837 422.017 1150.000 422.590 1150.000 422.990 C 1150.000 423.389 1145.066 423.711 1139.036 423.704 C 1133.006 423.697 1128.273 423.367 1128.518 422.971 C 1128.763 422.574 1127.825 422.250 1126.433 422.250 C 1125.042 422.250 1123.217 421.406 1122.377 420.375 C 1121.538 419.344 1121.176 419.175 1121.573 420.000 C 1121.970 420.825 1121.215 420.386 1119.897 419.023 C 1118.579 417.661 1117.500 416.182 1117.500 415.737 C 1117.500 415.292 1116.825 414.509 1116.000 413.998 C 1114.821 413.269 1114.500 410.826 1114.500 402.593 L 1114.500 392.116 1117.884 388.808 C 1119.746 386.989 1121.546 385.462 1121.884 385.415 C 1122.223 385.368 1124.525 384.361 1127.000 383.177 C 1130.912 381.306 1133.166 381.034 1144.257 381.097 C 1151.702 381.139 1156.778 381.550 1156.448 382.085 "/></g>
<g fill="#EC3425FD" stroke="#EC3425FD">
<path d="M 1590.500 292.152 C 1587.200 292.651 1582.823 292.882 1580.774 292.664 C 1578.724 292.446 1577.288 292.658 1577.583 293.134 C 1578.043 293.879 1569.930 294.552 1566.250 294.075 C 1565.563 293.985 1565.000 294.433 1565.000 295.070 C 1565.000 295.790 1563.852 296.058 1561.956 295.780 C 1560.282 295.535 1558.680 295.708 1558.397 296.167 C 1558.114 296.625 1556.386 297.000 1554.558 297.000 C 1552.075 297.000 1551.101 297.506 1550.711 298.999 C 1550.423 300.098 1550.589 301.246 1551.079 301.549 C 1551.569 301.851 1551.962 303.089 1551.953 304.300 C 1551.917 309.070 1552.570 313.097 1553.266 312.400 C 1553.670 311.997 1554.038 312.529 1554.084 313.583 C 1554.242 317.192 1555.082 325.415 1555.317 325.650 C 1556.093 326.426 1576.222 325.573 1577.722 324.700 C 1579.243 323.815 1606.128 324.587 1606.808 325.535 C 1607.459 326.443 1608.736 326.924 1611.811 327.423 C 1613.880 327.758 1617.932 333.014 1617.330 334.582 C 1617.031 335.362 1617.220 336.000 1617.750 336.000 C 1618.280 336.000 1619.029 340.570 1619.414 346.156 C 1620.183 357.330 1619.756 358.364 1614.941 356.983 C 1613.406 356.543 1611.892 356.442 1611.575 356.758 C 1611.259 357.074 1611.000 356.813 1611.000 356.178 C 1611.000 355.542 1609.988 355.042 1608.750 355.066 C 1606.875 355.102 1592.686 355.123 1585.546 355.100 C 1584.471 355.096 1583.013 355.574 1582.305 356.162 C 1581.597 356.749 1579.675 357.033 1578.034 356.792 C 1576.392 356.551 1574.925 356.720 1574.774 357.168 C 1574.623 357.616 1573.263 358.085 1571.750 358.209 C 1570.238 358.334 1569.000 358.815 1569.000 359.277 C 1569.000 359.740 1568.581 359.859 1568.069 359.543 C 1567.557 359.226 1566.856 359.425 1566.510 359.984 C 1566.165 360.543 1564.868 361.000 1563.630 361.000 C 1562.391 361.000 1560.392 361.918 1559.189 363.039 C 1557.985 364.160 1557.000 364.874 1557.000 364.624 C 1557.000 364.375 1555.391 365.595 1553.425 367.335 C 1551.459 369.076 1549.434 370.556 1548.925 370.625 C 1548.416 370.694 1548.243 370.806 1548.540 370.875 C 1548.838 370.944 1547.933 372.238 1546.529 373.750 C 1545.126 375.263 1543.728 377.288 1543.422 378.250 C 1543.116 379.213 1542.446 380.000 1541.933 380.000 C 1541.420 380.000 1541.000 380.675 1541.000 381.500 C 1541.000 382.325 1540.502 383.000 1539.893 383.000 C 1539.284 383.000 1539.045 383.675 1539.362 384.500 C 1539.678 385.325 1539.475 386.000 1538.910 386.000 C 1538.344 386.000 1538.160 386.450 1538.500 387.000 C 1538.840 387.550 1538.684 388.000 1538.153 388.000 C 1537.622 388.000 1537.423 388.900 1537.710 390.000 C 1537.998 391.100 1537.798 392.000 1537.266 392.000 C 1536.734 392.000 1536.215 394.807 1536.112 398.237 C 1536.009 401.668 1535.525 404.875 1535.036 405.364 C 1534.523 405.877 1534.516 407.227 1535.018 408.549 C 1535.498 409.811 1535.992 413.353 1536.117 416.422 C 1536.241 419.490 1536.763 422.000 1537.278 422.000 C 1537.793 422.000 1537.976 422.620 1537.685 423.378 C 1537.394 424.136 1537.558 425.158 1538.050 425.650 C 1538.541 426.141 1539.097 427.554 1539.286 428.790 C 1539.474 430.026 1539.937 430.729 1540.314 430.352 C 1540.691 429.975 1541.000 430.436 1541.000 431.376 C 1541.000 433.125 1542.159 434.875 1545.250 437.793 C 1546.213 438.701 1547.000 439.794 1547.000 440.222 C 1547.000 441.243 1550.990 445.227 1551.033 444.250 C 1551.052 443.838 1551.855 444.400 1552.818 445.500 C 1553.782 446.600 1555.225 447.649 1556.025 447.830 C 1556.826 448.012 1557.710 448.495 1557.991 448.903 C 1558.755 450.017 1562.315 451.346 1563.850 451.091 C 1564.593 450.967 1564.904 451.346 1564.541 451.933 C 1564.130 452.598 1565.011 453.000 1566.882 453.000 C 1568.532 453.000 1570.114 453.375 1570.397 453.833 C 1570.680 454.292 1572.394 454.485 1574.206 454.262 C 1576.691 453.958 1577.133 454.112 1576.005 454.890 C 1574.945 455.621 1578.215 455.892 1587.226 455.819 C 1594.229 455.763 1599.700 455.323 1599.401 454.840 C 1599.103 454.358 1600.441 454.160 1602.374 454.399 C 1604.389 454.649 1606.042 454.373 1606.250 453.751 C 1606.448 453.155 1608.049 452.667 1609.806 452.667 C 1611.563 452.667 1613.000 452.265 1613.000 451.774 C 1613.000 451.284 1613.453 451.162 1614.008 451.505 C 1614.562 451.847 1615.723 451.420 1616.588 450.555 C 1617.453 449.689 1618.575 449.237 1619.081 449.550 C 1619.586 449.862 1620.000 449.615 1620.000 449.000 C 1620.000 448.385 1620.414 448.138 1620.919 448.450 C 1621.425 448.763 1622.447 448.410 1623.190 447.667 C 1624.847 446.010 1629.016 443.676 1630.868 443.369 C 1632.494 443.100 1635.350 445.700 1636.504 448.500 C 1637.055 449.839 1637.358 450.004 1637.421 449.000 C 1637.492 447.860 1637.873 447.980 1639.007 449.500 C 1639.828 450.600 1641.850 452.174 1643.500 452.998 C 1645.150 453.823 1646.831 454.948 1647.235 455.498 C 1647.700 456.133 1647.975 456.072 1647.985 455.332 C 1647.993 454.689 1649.688 453.128 1651.750 451.863 C 1653.813 450.599 1656.367 448.767 1657.426 447.793 C 1658.486 446.820 1660.188 445.758 1661.209 445.434 C 1662.229 445.110 1664.245 443.750 1665.689 442.412 C 1667.132 441.075 1668.540 440.207 1668.817 440.484 C 1669.094 440.761 1669.954 440.083 1670.729 438.977 C 1671.503 437.871 1672.551 437.222 1673.057 437.535 C 1673.563 437.848 1673.710 437.408 1673.384 436.558 C 1673.057 435.707 1672.382 435.264 1671.883 435.572 C 1671.385 435.880 1670.702 434.760 1670.367 433.083 C 1670.031 431.405 1669.394 430.257 1668.950 430.531 C 1668.149 431.026 1666.423 427.184 1666.802 425.750 C 1666.911 425.338 1666.523 425.000 1665.941 425.000 C 1665.359 425.000 1665.162 424.547 1665.505 423.992 C 1665.847 423.438 1665.420 422.277 1664.555 421.412 C 1663.689 420.547 1663.237 419.425 1663.550 418.919 C 1663.862 418.414 1663.669 418.000 1663.121 418.000 C 1662.573 418.000 1662.083 417.213 1662.034 416.250 C 1661.754 410.865 1661.421 409.000 1660.738 409.000 C 1660.319 409.000 1660.275 407.131 1660.640 404.847 C 1661.135 401.752 1661.000 400.882 1660.110 401.432 C 1659.191 402.000 1658.914 393.871 1658.912 366.335 C 1658.911 346.626 1658.909 329.621 1658.908 328.546 C 1658.907 327.471 1658.427 326.015 1657.841 325.309 C 1657.256 324.603 1657.037 323.345 1657.357 322.513 C 1657.676 321.681 1657.453 321.000 1656.862 321.000 C 1656.270 321.000 1656.040 320.338 1656.351 319.529 C 1656.661 318.720 1656.262 317.404 1655.463 316.606 C 1654.664 315.807 1653.882 314.332 1653.724 313.327 C 1653.566 312.322 1652.551 310.454 1651.468 309.175 C 1647.509 304.497 1643.963 301.000 1643.180 301.000 C 1642.738 301.000 1641.290 299.988 1639.962 298.750 C 1638.634 297.513 1637.424 296.613 1637.273 296.750 C 1636.499 297.458 1633.962 296.870 1634.442 296.093 C 1634.751 295.595 1634.032 295.440 1632.845 295.751 C 1631.366 296.137 1630.912 295.951 1631.403 295.158 C 1632.158 293.936 1629.827 293.512 1624.643 293.928 C 1623.071 294.054 1622.035 293.753 1622.340 293.259 C 1622.645 292.766 1621.564 292.557 1619.938 292.796 C 1618.312 293.034 1616.311 292.673 1615.491 291.992 C 1614.552 291.213 1614.000 291.147 1614.000 291.815 C 1614.000 292.399 1613.100 292.808 1612.000 292.725 C 1610.900 292.642 1610.000 292.220 1610.000 291.787 C 1610.000 290.766 1598.197 290.987 1590.500 292.152 M 1618.702 382.559 C 1620.046 383.903 1620.182 385.858 1619.607 395.490 C 1619.160 402.958 1619.282 407.056 1619.964 407.478 C 1620.534 407.830 1621.000 408.793 1621.000 409.618 C 1621.000 410.552 1620.528 410.835 1619.750 410.367 C 1618.791 409.791 1618.764 409.952 1619.631 411.058 C 1620.254 411.851 1620.622 413.738 1620.450 415.250 C 1620.277 416.763 1620.556 418.000 1621.068 418.000 C 1621.581 418.000 1622.000 418.477 1622.000 419.059 C 1622.000 419.641 1621.550 419.840 1621.000 419.500 C 1620.450 419.160 1620.000 419.344 1620.000 419.910 C 1620.000 420.475 1619.251 420.650 1618.336 420.299 C 1617.217 419.869 1616.909 420.043 1617.395 420.830 C 1617.908 421.660 1616.746 422.000 1613.392 422.000 C 1610.793 422.000 1609.004 422.338 1609.417 422.750 C 1609.830 423.163 1605.630 423.539 1600.084 423.586 C 1594.538 423.633 1590.000 423.296 1590.000 422.836 C 1590.000 422.376 1588.666 422.000 1587.035 422.000 C 1585.053 422.000 1583.700 421.309 1582.954 419.914 C 1582.340 418.767 1581.590 418.077 1581.286 418.380 C 1580.983 418.684 1579.862 417.822 1578.795 416.466 C 1577.728 415.110 1577.225 413.993 1577.677 413.985 C 1578.130 413.976 1577.825 413.543 1577.000 413.021 C 1575.018 411.768 1574.791 392.903 1576.750 392.250 C 1577.438 392.021 1578.000 391.296 1578.000 390.639 C 1578.000 389.511 1582.174 385.318 1582.786 385.831 C 1582.943 385.963 1583.743 385.399 1584.565 384.578 C 1585.386 383.757 1586.794 383.367 1587.693 383.712 C 1588.876 384.166 1589.101 383.973 1588.508 383.012 C 1587.892 382.017 1588.226 381.826 1589.844 382.249 C 1591.030 382.559 1592.000 382.441 1592.000 381.986 C 1592.000 381.531 1597.652 381.118 1604.560 381.068 C 1614.769 380.993 1617.415 381.272 1618.702 382.559 "/></g>
<g fill="#EC3425FD" stroke="#EC3425FD">
<path d="M 1747.000 292.099 C 1747.000 292.825 1744.977 293.043 1741.030 292.742 C 1737.746 292.492 1735.298 292.672 1735.589 293.144 C 1735.880 293.615 1733.193 294.000 1729.618 294.000 C 1726.039 294.000 1722.818 294.486 1722.450 295.081 C 1722.082 295.676 1720.733 295.899 1719.452 295.577 C 1718.171 295.256 1716.843 295.444 1716.502 295.996 C 1716.161 296.548 1714.109 297.000 1711.941 297.000 C 1709.773 297.000 1708.000 297.459 1708.000 298.020 C 1708.000 298.580 1706.866 298.833 1705.480 298.582 C 1704.058 298.324 1703.212 298.534 1703.539 299.063 C 1703.857 299.578 1703.079 300.069 1701.809 300.152 C 1700.539 300.236 1698.903 300.352 1698.174 300.410 C 1697.445 300.468 1697.220 300.921 1697.674 301.417 C 1698.153 301.939 1697.764 302.055 1696.750 301.691 C 1694.770 300.980 1694.589 301.788 1695.936 305.332 C 1696.451 306.686 1696.670 307.997 1696.423 308.244 C 1695.599 309.067 1695.486 451.000 1696.309 451.000 C 1696.754 451.000 1696.840 451.450 1696.500 452.000 C 1696.096 452.654 1702.906 453.000 1716.191 453.000 L 1736.500 453.000 1736.235 391.635 C 1735.939 323.127 1735.446 327.715 1743.100 327.821 C 1745.361 327.852 1746.901 327.568 1746.522 327.189 C 1746.143 326.810 1751.035 326.447 1757.393 326.383 C 1765.056 326.306 1768.740 326.612 1768.320 327.291 C 1767.928 327.925 1768.508 328.100 1769.843 327.751 C 1771.028 327.441 1772.238 327.576 1772.531 328.050 C 1772.824 328.525 1773.679 328.677 1774.431 328.388 C 1776.010 327.782 1783.000 334.378 1783.000 336.474 C 1783.000 337.249 1783.411 338.136 1783.913 338.446 C 1784.449 338.778 1784.758 362.522 1784.663 396.005 L 1784.500 452.999 1804.717 453.000 L 1824.934 453.000 1825.100 398.250 C 1825.191 368.138 1825.198 342.375 1825.114 341.000 C 1825.030 339.625 1824.858 336.101 1824.731 333.170 C 1824.604 330.238 1824.149 328.190 1823.719 328.618 C 1823.290 329.045 1823.013 328.069 1823.105 326.448 C 1823.197 324.826 1822.758 322.225 1822.129 320.666 C 1821.500 319.107 1821.283 317.350 1821.647 316.762 C 1822.039 316.128 1821.838 315.982 1821.155 316.405 C 1820.434 316.850 1820.000 316.391 1820.000 315.181 C 1820.000 314.116 1819.325 312.685 1818.500 312.000 C 1817.675 311.315 1817.000 310.392 1817.000 309.949 C 1817.000 308.468 1808.531 300.296 1806.250 299.576 C 1805.013 299.185 1804.000 298.497 1804.000 298.046 C 1804.000 297.596 1801.975 296.923 1799.500 296.552 C 1797.025 296.181 1795.000 295.483 1795.000 295.001 C 1795.000 294.157 1793.959 294.024 1787.552 294.050 C 1785.931 294.057 1784.890 293.776 1785.239 293.427 C 1786.548 292.119 1755.312 291.131 1750.670 292.334 C 1748.809 292.817 1748.059 292.714 1748.479 292.034 C 1748.830 291.465 1748.641 291.000 1748.059 291.000 C 1747.477 291.000 1747.000 291.494 1747.000 292.099 "/></g>
<g fill="#EC3425FD" stroke="#EC3425FD">
<path d="M 1020.548 226.078 C 1021.066 226.916 1015.476 227.468 1010.500 227.070 C 1008.806 226.935 1008.729 227.082 1010.000 228.034 C 1011.206 228.936 1010.967 229.071 1008.780 228.723 C 1007.284 228.484 1006.298 228.674 1006.589 229.144 C 1007.042 229.878 1005.621 230.217 1003.362 229.915 C 1003.011 229.868 1002.403 230.348 1002.012 230.981 C 1001.620 231.615 1000.621 232.233 999.790 232.354 C 998.960 232.476 997.480 233.377 996.500 234.357 C 995.521 235.336 993.661 236.831 992.368 237.678 C 991.075 238.526 990.217 239.542 990.462 239.938 C 990.706 240.333 989.603 242.084 988.009 243.829 C 986.416 245.573 985.367 247.000 985.679 247.000 C 985.990 247.000 985.744 247.604 985.131 248.342 C 984.519 249.080 984.313 249.980 984.675 250.342 C 985.037 250.704 984.904 251.000 984.379 251.000 C 983.855 251.000 983.318 252.412 983.186 254.138 C 983.055 255.864 982.670 257.724 982.332 258.272 C 981.246 260.030 980.867 267.136 981.033 282.655 C 981.122 290.990 980.896 298.752 980.530 299.905 C 979.911 301.855 979.145 302.000 969.433 302.000 L 959.000 302.000 959.000 318.000 C 959.000 330.082 959.306 334.024 960.250 334.097 C 960.938 334.150 965.354 334.115 970.063 334.020 C 976.528 333.888 978.925 334.205 979.843 335.311 C 980.774 336.432 980.993 350.393 980.779 394.888 L 980.500 453.001 1000.250 453.000 L 1020.000 453.000 1020.000 394.700 C 1020.000 350.689 1020.294 336.106 1021.200 335.200 C 1022.051 334.349 1028.080 334.000 1041.950 333.998 L 1061.500 333.997 1061.500 317.998 L 1061.500 301.999 1041.357 301.999 C 1023.911 302.000 1021.133 301.788 1020.607 300.418 C 1019.473 297.463 1019.919 273.000 1021.107 273.000 C 1021.716 273.000 1021.939 272.284 1021.604 271.409 C 1021.267 270.533 1021.933 268.499 1023.086 266.879 C 1024.280 265.203 1024.645 264.061 1023.936 264.220 C 1023.252 264.374 1023.736 263.731 1025.010 262.792 C 1026.284 261.852 1027.703 261.316 1028.163 261.601 C 1028.623 261.885 1029.000 261.615 1029.000 261.000 C 1029.000 260.385 1029.450 260.160 1030.000 260.500 C 1030.550 260.840 1031.000 260.589 1031.000 259.942 C 1031.000 259.259 1031.837 258.986 1032.999 259.289 C 1034.098 259.577 1035.224 259.447 1035.500 259.000 C 1035.776 258.553 1036.931 258.431 1038.067 258.728 C 1039.202 259.025 1041.171 258.711 1042.441 258.032 C 1044.158 257.113 1045.278 257.078 1046.809 257.898 C 1047.942 258.504 1049.686 258.993 1050.684 258.985 C 1052.225 258.972 1052.273 258.821 1051.000 257.988 C 1049.930 257.288 1050.726 257.111 1053.782 257.369 C 1056.137 257.567 1058.349 258.016 1058.698 258.365 C 1059.708 259.375 1060.651 259.105 1060.849 257.750 C 1060.949 257.063 1061.296 254.590 1061.620 252.256 C 1061.944 249.921 1062.559 248.227 1062.987 248.492 C 1063.415 248.756 1063.791 247.075 1063.823 244.756 C 1063.855 242.437 1064.321 240.393 1064.858 240.214 C 1065.396 240.035 1065.639 238.307 1065.399 236.374 C 1065.160 234.441 1065.350 233.098 1065.821 233.390 C 1066.293 233.681 1066.737 232.363 1066.809 230.460 C 1066.948 226.751 1066.849 226.696 1060.500 226.994 C 1058.300 227.097 1056.875 226.803 1057.334 226.341 C 1057.792 225.878 1049.575 225.423 1039.073 225.328 C 1027.626 225.225 1020.206 225.525 1020.548 226.078 "/></g>
<g fill="#EC3425FD" stroke="#EC3425FD">
<path d="M 895.500 229.000 C 897.210 229.735 897.246 229.870 895.750 229.930 C 894.094 229.996 894.000 236.003 894.000 341.500 L 894.000 453.000 914.000 453.000 L 934.000 453.000 934.000 341.500 L 934.000 230.000 916.250 229.792 L 898.500 229.584 913.000 229.000 L 927.500 228.416 910.500 228.278 C 900.263 228.195 894.296 228.482 895.500 229.000 "/></g>
<g fill="#EC3425FD" stroke="#EC3425FD">
<path d="M 1273.071 350.242 C 1271.357 351.201 1269.565 351.876 1269.089 351.742 C 1268.613 351.609 1266.854 353.211 1265.179 355.303 C 1263.504 357.395 1261.795 359.070 1261.380 359.026 C 1260.965 358.981 1260.515 359.700 1260.379 360.622 C 1260.244 361.545 1259.746 362.570 1259.274 362.900 C 1258.802 363.230 1258.320 364.825 1258.203 366.444 C 1258.086 368.063 1257.624 369.638 1257.177 369.944 C 1256.076 370.696 1256.034 378.000 1257.130 378.000 C 1257.608 378.000 1258.000 379.650 1258.000 381.667 C 1258.000 383.683 1258.297 385.036 1258.661 384.673 C 1259.254 384.079 1260.596 385.852 1262.634 389.924 C 1263.676 392.004 1266.843 395.000 1268.000 395.000 C 1268.550 395.000 1269.000 395.477 1269.000 396.059 C 1269.000 396.641 1269.419 396.859 1269.931 396.543 C 1270.443 396.226 1271.144 396.425 1271.490 396.984 C 1271.835 397.543 1273.291 398.000 1274.726 398.000 C 1276.160 398.000 1277.015 398.319 1276.626 398.708 C 1276.236 399.097 1279.056 399.456 1282.893 399.505 C 1287.089 399.559 1289.632 399.214 1289.277 398.640 C 1288.939 398.092 1289.583 397.919 1290.787 398.234 C 1292.117 398.582 1293.513 398.090 1294.598 396.892 C 1295.540 395.851 1297.167 395.000 1298.214 395.000 C 1299.261 395.000 1299.871 394.601 1299.570 394.113 C 1299.269 393.626 1299.692 392.671 1300.511 391.991 C 1301.330 391.311 1302.056 391.035 1302.125 391.378 C 1302.194 391.720 1302.306 391.514 1302.375 390.919 C 1302.444 390.325 1303.317 389.241 1304.317 388.510 C 1305.316 387.780 1306.103 386.916 1306.067 386.591 C 1305.805 384.269 1306.129 382.962 1306.856 383.411 C 1307.326 383.702 1307.499 382.828 1307.239 381.470 C 1306.979 380.111 1307.196 379.000 1307.720 379.000 C 1308.243 379.000 1308.633 376.262 1308.586 372.916 C 1308.539 369.570 1308.192 367.141 1307.814 367.518 C 1307.437 367.896 1306.825 366.583 1306.453 364.602 C 1306.082 362.621 1305.432 361.000 1305.010 361.000 C 1304.588 361.000 1303.668 359.612 1302.965 357.916 C 1302.263 356.220 1300.633 354.431 1299.344 353.941 C 1298.055 353.451 1297.000 352.562 1297.000 351.966 C 1297.000 351.370 1296.550 351.160 1296.000 351.500 C 1295.450 351.840 1295.000 351.566 1295.000 350.892 C 1295.000 350.218 1294.716 349.951 1294.369 350.298 C 1294.021 350.645 1292.843 350.451 1291.750 349.866 C 1288.336 348.039 1276.589 348.276 1273.071 350.242 "/></g>
</svg>


                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="984" height="984" viewBox="0 0 984 984" class="qr-code"><rect width="984" height="984" fill="#ffffff" x="0" y="0"/><g fill="#000000">
<g transform="translate(264,48) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,48) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,48) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,48) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,48) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,48) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,48) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,48) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,48) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,48) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,48) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,72) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,72) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,72) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,72) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,72) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,72) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,72) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,72) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,72) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,96) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,96) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,96) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,96) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,96) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,96) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,96) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,96) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,96) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,96) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,120) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,144) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,144) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,144) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,144) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,144) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,144) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,144) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,144) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,144) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,168) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,192) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,192) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,192) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,192) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,192) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,192) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,192) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,192) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,192) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,192) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,192) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,216) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,216) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,216) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,216) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,216) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,216) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,216) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(48,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(96,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(144,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(168,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(192,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,240) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(168,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(216,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,264) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(48,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(96,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(192,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,288) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(48,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(168,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(744,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,312) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(144,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(168,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(192,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(744,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,336) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(168,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(216,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(744,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,360) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(96,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(144,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(192,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(216,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,384) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(96,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(168,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(216,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,408) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(96,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(192,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(216,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(744,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,432) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(144,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,456) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(72,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(96,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(192,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,480) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(48,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(144,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,504) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(48,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(144,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(192,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(216,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,528) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(168,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,552) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(72,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(96,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(144,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(168,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(192,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(744,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,576) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(216,600) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,600) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,600) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,600) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,600) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,600) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,600) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,600) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,600) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(48,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(144,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(168,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(192,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(744,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,624) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(48,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(72,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(96,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(144,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(168,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(216,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,648) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(48,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(144,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(192,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(744,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,672) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(48,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(96,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(168,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,696) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(48,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(120,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(144,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(192,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(744,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,720) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,744) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(576,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,768) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,792) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(360,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(600,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(744,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(792,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,816) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(744,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,840) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(432,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,864) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(288,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(624,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(648,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(672,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(696,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(744,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(864,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,888) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(240,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(264,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(312,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(336,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(384,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(408,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(456,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(480,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(504,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(528,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(552,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(720,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(768,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(816,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(840,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(888,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(912,912) scale(4.12)"><rect width="6" height="6"/></g>
<g transform="translate(48,48)"><g transform="scale(12)"><path d="M0,0v14h14V0H0z M12,12H2V2h10V12z"/></g></g>
<g transform="translate(768,48)"><g transform="scale(12)"><path d="M0,0v14h14V0H0z M12,12H2V2h10V12z"/></g></g>
<g transform="translate(48,768)"><g transform="scale(12)"><path d="M0,0v14h14V0H0z M12,12H2V2h10V12z"/></g></g>
<g transform="translate(96,96)"><g transform="scale(12)"><rect width="6" height="6"/></g></g>
<g transform="translate(816,96)"><g transform="scale(12)"><rect width="6" height="6"/></g></g>
<g transform="translate(96,816)"><g transform="scale(12)"><rect width="6" height="6"/></g></g>
</g></svg>
                        <p class="donate__text">Если Вы не можете отсканировать QR-код, пожалуйста перейдите по данной ссылке - <a href="https://qr.nspk.ru/BS1A0026DREIOF469P8BNTCDD0LVOE0T?type=01&bank=100000000008&crc=8919">https://qr.nspk.ru/BS1A0026DREIOF469P8BNTCDD0LVOE0T?type=01&bank=100000000008&crc=8919</a></p>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>