<!DOCTYPE html>
<html lang="ru" style="margin-top: 0 !important;">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head(); ?>
    <title>Index</title>

    <style>
        .splash {
            background: url("<?php echo get_template_directory_uri(); ?>/assets/images/index__splash.jpg") rgba(0, 0, 0, 0.3);
            background-blend-mode: overlay;
            background-size: cover;
        }
    </style>

</head>

<body>
    <div class="page">
        <?php get_header(); ?>

        <div class="splash">
            <div class="splash__box-1 container">
                <h1 class="splash__title">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </h1>
                <p class="splash__text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem
                    delectus quo perspiciatis harum. Debitis amet, corporis quas
                    molestias eum magni?
                </p>
                <!-- <button class="splash__button button button_ready-to-help">Готов помочь</button> -->
            </div>
        </div>

        <?php get_footer(); ?>
    </div>

    <script src="js/general.js"></script>
    <script src="js/modal.js"></script>
</body>

</html>