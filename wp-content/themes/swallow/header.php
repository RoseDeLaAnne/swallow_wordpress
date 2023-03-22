<header id="header" class="header">
    <div class="header__box-1 container">
        <a href="/" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.svg" alt="" class="logo__img" />
        </a>
        <button class="header__menu-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="800" height="800" viewBox="0 0 24 24"
                class="header__menu-button-icon">
                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M4 17h16M4 12h16M4 7h16" />
            </svg>
        </button>
        <nav class="nav nav_header">
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
</header>