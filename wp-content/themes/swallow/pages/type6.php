<?php
/*
Template Name: type6
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
                <div class="team">
                    <div class="team__item">
                        <div class="team__item-box-1">
                            <img src="../images/test.jpg" alt="photo_of_member" class="team__item-avatar" />
                            <h2 class="team__item-name">Lorem ipsum dolor</h2>
                            <h3 class="team__item-status">
                                Director of company
                            </h3>
                        </div>

                        <p class="team__item-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Tempora assumenda incidunt consequuntur ab?
                            Aspernatur, tenetur libero id veritatis debitis
                            alias accusantium similique tempore voluptatum qui
                            quo, expedita soluta aperiam. Dolores ipsum
                            temporibus facilis impedit suscipit inventore
                            ratione cupiditate fugit excepturi!
                        </p>
                    </div>
                </div>
            </main>
        </div>
        <?php get_footer(); ?>
</body>

</html>