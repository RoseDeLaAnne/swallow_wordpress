<!DOCTYPE html>
<html lang="ru" style="margin-top: 0 !important;">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head(); ?>

    <title>АНО «Сообщество замещающих семей "Ласточка"»</title>

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
        <button class="button button_floating-ready-to-help"></button>

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
                        <p class="donate__text">Если Вы не можете отсканировать QR-код, пожалуйста перейдите по данной ссылке - <a href="https://platiqr.ru/?uuid=1000447576">https://platiqr.ru/?uuid=1000447576</a></p>
                    </div>
                    <div class="donate__box-2">
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
                        <p class="donate__text">Если Вы не можете отсканировать QR-код, пожалуйста перейдите по данной ссылке - <a href="https://qr.nspk.ru/BS1A0026DREIOF469P8BNTCDD0LVOE0T?type=01&bank=100000000008&crc=8919">https://qr.nspk.ru/BS1A0026DREIOF469P8BNTCDD0LVOE0T?type=01&bank=100000000008&crc=8919</a></p>
                    </div>
                </div>
            </div>
        </div>

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

        <header id="header" class="header header_index">
            <div class="header__box-1 container">
                <a href="index" class="logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1645.333" height="765.333" version="1.0"
                        class="logo__img" viewBox="0 0 1234 574" style="fill: #fff;">
                        <path
                            d="M178 5.3c-12.4 3.5-20.5 13-23.1 27.1-3 16.4 4.8 32.5 19 38.9 6.3 2.9 17.8 2.9 24.2 0 9.2-4.1 15.8-12 18.4-22 4.6-17.8-2.8-35.7-17.7-42.3-5.9-2.6-15-3.3-20.8-1.7zm16.8 5.4c3.8 1.8 7.3 6.6 9.8 13.3 2.6 7 2.3 23.8-.6 31.3-5.1 13.5-17.5 18-28.6 10.5-9.9-6.6-13.1-31.7-5.9-46.3 5-10.3 14.9-13.7 25.3-8.8zM38.7 5.7c-.3.5-4.1 10.2-8.5 21.8C15.4 65.9 15.3 66.1 9.3 68.1c-6.5 2.1-3.2 3.4 9.5 3.7 10.3.2 12.2 0 12.2-1.3 0-.8-1.2-1.7-2.7-2-6.8-1.5-7.4-3.6-4.3-13.1l2.2-6.5 11.6.3 11.6.3 2.7 7c1.5 3.8 2.8 7.8 2.8 8.8.1 1.8-.4 2.1-5.1 3.1-1.6.4-2.8 1.3-2.8 2.1 0 1.3 2.3 1.5 13.6 1.5 12.4 0 13.5-.2 13.2-1.8-.2-.9-1.3-1.8-2.4-2-1.2-.2-3.1-1.3-4.2-2.5s-7.1-15.4-13.3-31.5C45 11 42.3 5 40.9 5c-1 0-2 .3-2.2.7zm4.2 26.6c2.2 6 4.1 11.3 4.1 11.8s-4.3.9-9.6.9-9.4-.4-9.2-.8c.2-.5 2.3-6.1 4.8-12.5s4.8-11.3 5.1-10.9c.3.4 2.5 5.6 4.8 11.5zM77 7.4c0 .8 1.6 2 3.5 2.6 1.9.6 4 2 4.5 3 1.6 2.9 1.3 52.5-.2 53.8-.7.5-2.8 1.3-4.5 1.7-1.9.4-3.3 1.3-3.3 2.1 0 1.1 2.5 1.4 13.5 1.4 11.3 0 13.5-.2 13.5-1.5 0-.8-1.2-1.8-2.7-2.1-5.1-1.2-5.3-1.8-5.3-15.5V40h31.1l-.3 13.1c-.3 14.2-.3 14.2-6 15.4-1.6.3-2.8 1.2-2.8 2 0 1.3 2.2 1.5 13.5 1.5s13.5-.2 13.5-1.5c0-.8-1.2-1.8-2.7-2.1-5.4-1.3-5.3-.7-5.3-29.4s-.1-28.1 5.3-29.4c1.5-.3 2.7-1.3 2.7-2.1 0-1.3-2.2-1.5-13.5-1.5-11 0-13.5.3-13.5 1.4 0 .8 1.6 2 3.5 2.6 1.9.6 4 2 4.5 3.1.6 1 .9 6.4.8 12.1l-.3 10.3-15.2.3-15.3.3v-12c0-12.7.2-13.3 5.3-14.5 1.5-.3 2.7-1.3 2.7-2.1 0-1.3-2.2-1.5-13.5-1.5-11 0-13.5.3-13.5 1.4zM885.8 62.5c-.3.3-2.7 1.1-5.4 1.8-7.5 2-39 23.5-51.4 35.3-3 2.8-7.5 6.9-10 9-4.6 4-17.6 17.9-19.1 20.5-.4.8-.4 2.1.1 2.9 1 1.6 1 1.6 29-17.9 20.9-14.7 43.1-29.8 50.6-34.5l4.7-2.9 3.1 3.4c1.7 2 7.8 9.4 13.6 16.5 27.3 33.6 59.5 68.9 104.5 114.4 48.1 48.6 59.4 60.4 94.5 99.5 22.8 25.4 41.9 45.3 83.2 87 21.8 22 41.1 41.7 42.8 43.7 1.8 2.1 3.6 3.6 4 3.3.4-.2.8-4.2.9-8.9l.2-8.4-4.2-4.8c-2.2-2.7-22.8-23.8-45.8-46.9-43.9-44.3-59.9-60.7-67.1-69.1-4.2-4.8-8.7-9.8-32.4-35.9-15.2-16.7-26.4-28.4-65.7-68.5-47.8-48.9-77-80.9-107.4-118-6-7.4-12.7-15.4-14.9-17.7-3.5-3.9-6.3-5.2-7.8-3.8zM270.8 111.6c-1.1 1.1-4.6 1.8-11.7 2.4-17.1 1.3-22.2 6.3-25.7 25-3.7 19.6.9 35.9 11.8 41.6 4 2.1 14.1 1.8 18.7-.6 8.1-4.1 12.4-11.9 12.4-22.6.1-14.6-8.1-23.4-21.6-23.4-5.3 0-10.1 2.5-14.3 7.4l-3.6 4.1.7-4c1.2-6.7 5.1-14.3 8.5-16.3 2-1.3 5.9-2.1 11.8-2.5l8.7-.7 4.8-5.1c4.4-4.8 5.2-6.9 2.4-6.9-.7 0-2 .7-2.9 1.6zm-8.6 29.5c3.6 3.8 5.1 9.9 4.6 18.9-.6 9.4-3.4 15.4-8.4 17.7-3.1 1.5-3.9 1.6-7.7.3-6.3-2.2-8.7-7.6-8.7-19.5.1-12.6 2.8-18.5 9.7-20.5 4.1-1.2 7.4-.2 10.5 3.1zM91 114.3c-6.6 1.9-11.6 5.3-16.1 10.9-5.4 6.9-7.2 13.7-6.7 25.7.5 11.4 3 17.2 10.1 23.8 6.2 5.7 10.7 7.5 19.3 7.5 11.1 0 19-4.5 24-13.7 1.5-2.9 1.6-3.7.5-4.7-1.1-1.1-1.5-.9-2.5.6-4.1 6.7-5.6 8.3-9.6 10.3-8.3 4.2-19.1 2.1-24.2-4.8-4.9-6.5-6.1-10.1-6.6-19.4-.8-15.4 2.5-24.6 10.9-30.6 4.7-3.3 13.1-3.3 17.7 0 3.4 2.4 7.5 9.4 8.7 14.8.5 2.3 1.2 3.3 2.6 3.3 1.8 0 1.9-.8 1.9-11.5 0-10.4-.2-11.5-1.8-11.5-1 0-2.3.5-2.9 1.1-.9.9-2.2.7-5.3-.5-5.7-2.3-14.6-2.8-20-1.3zM141.5 135.7c-8.6 4.5-12.4 11.3-12.5 22.1 0 8 1.3 12 5.5 17 4.1 4.9 9.4 7.2 16.5 7.2 10 0 17.1-5.1 20.6-14.7 1.8-5.2 1.7-15.6-.2-20.1-1.9-4.7-6.9-10-11.3-11.8-4.5-1.9-14.8-1.7-18.6.3zm14.6 2.9c4.8 2.5 7.3 9.1 7.3 19.4 0 6.7-.5 9.5-2.2 13-5 10.4-15.3 10.6-20.3.3-2-3.9-2.4-6.4-2.4-13.8 0-10.4 1.9-15.6 6.9-18.6 3.8-2.3 6.7-2.4 10.7-.3zM193.4 135.4c-5 2.2-10 8.1-11.9 14.2-3.1 10-.6 20.1 6.7 27.1 4.2 4.1 7.6 5.3 14.4 5.3 9 0 15.4-3.9 19.5-12 1.9-3.6 2.4-6 2.3-12.5 0-11.5-3.9-18.3-12.6-22-4.5-1.8-14.2-1.9-18.4-.1zm14.7 3.3c8.6 5.1 9.5 29.7 1.3 37.4-3.6 3.4-10.3 3.3-13.8 0-6.9-6.5-7.5-28-.9-35.3 3.6-4 8.8-4.8 13.4-2.1zM376.8 136.9c-9.8 6.2-13.2 21.6-7.4 33.5 2.9 5.8 5.8 8.5 11.5 10.4 8.4 2.9 17 .5 23-6.3 2.6-3 3-4 2-5.1-1-1.2-1.8-.8-4.8 2.5-4.2 4.6-8.7 5.8-15 4.1-5.5-1.5-9.3-7-9.9-14.6l-.4-5.4h30.5l-.6-5.5c-1.1-10.9-7.3-16.5-18.3-16.5-4.9 0-6.8.5-10.6 2.9zm16.1 2.9c2.6 2.5 5 10.6 3.7 12-.3.3-4.9.5-10.3.4l-9.8-.1-.3-2.8c-.4-3.4 3.2-9.2 6.8-11 3.9-2 6.9-1.5 9.9 1.5zM425.5 135.7c-4.8 2.5-7.6 5.5-10.1 10.8-5.2 10.9-2 26.4 6.6 32.1 4.6 3 12.4 4.1 17.5 2.4 3.7-1.2 12.5-8.4 12.5-10.2 0-2.3-3-1.6-6.2 1.6-6.2 6.2-14.8 5.6-20-1.5-4.9-6.6-4.4-23.6.8-29.9 2.9-3.3 8.1-4.8 11.3-3 1.8.9 2.1 1.9 1.9 6.3-.3 4.7-.1 5.2 2.4 6.5 8.6 4.1 10-9.6 1.6-14.8-4.1-2.5-13.9-2.7-18.3-.3zM563.4 135.9c-8 3.6-12.4 11.7-12.4 22.7.1 14 8.9 23.4 22 23.4 7.3 0 12.5-2.3 16.8-7.5 3.7-4.6 5.2-9.6 5.2-17.6-.1-10.1-4.7-18-12.7-21.5-4.6-2-14-1.7-18.9.5zm17.8 5.2c7.4 8.7 5.4 31.9-3.1 36.3-6.1 3.2-11.8.9-15.4-6.4-3.1-6.4-3.1-19.5 0-26.3 3.8-8.3 13-10.1 18.5-3.6zM284 136.4c0 .8 1.1 1.7 2.5 2 3.8 1 4.5 4.2 4.5 20.7 0 13.6-.2 15.1-2 16.9-1.1 1.1-2.7 2-3.5 2-.8 0-1.5.7-1.5 1.5 0 1.3 4.3 1.5 32.9 1.5 37.4 0 34.6-.6 38.7 8.7 1.3 2.9 2.8 5.3 3.4 5.3.6 0 1-3.6 1-9v-9h-3c-1.9 0-3.3-.7-4-1.9-1.3-2.5-1.3-30.1 0-33.5.5-1.4 2-2.8 3.5-3.2 1.4-.3 2.5-1.3 2.5-2 0-1.2-2-1.4-10.7-1.2-6 .2-10.8.7-10.9 1.3-.2.5 1.1 1.7 2.9 2.5l3.2 1.5v36h-17l-.3-18.3-.2-18.4 3-1.1c1.6-.6 3-1.7 3-2.4 0-1-2.6-1.3-10.5-1.3-8.3 0-10.5.3-10.5 1.4 0 .8 1.4 1.9 3 2.5l3 1-.2 18.3-.3 18.3-7.5.3c-6.2.2-7.7 0-8.7-1.4-1.4-2-1.9-33-.5-35.1.4-.6 2-1.7 3.5-2.2 5.1-2 1.8-3.1-8.9-3.1-8.2 0-10.4.3-10.4 1.4zM454 142.6c0 4.2.4 7.4.9 7.2.5-.2 2.4-2.5 4.3-5.3 2.6-3.8 4.1-5.1 6.8-5.6 1.9-.4 3.8-.5 4.2-.3.5.3.8 8.5.8 18.3 0 18.6-.2 19.5-4.5 20.3-1.1.2-2.1 1.1-2.3 2.1-.3 1.5.8 1.7 11.3 1.7s11.6-.2 11.3-1.7c-.2-1-1.2-1.9-2.3-2.1-4.3-.8-4.5-1.6-4.5-20.9v-18.5l3.8.7c4.7.9 5.6 1.6 8.3 7.1 3 6.2 4.4 5.2 4.4-3.2v-6.9l-21.2-.3-21.3-.2v7.6zM501 136.2c0 .7 1.5 2 3.3 2.8l3.2 1.5.3 17.7.2 17.7-3.5 1.2c-6.1 2.2-3.5 3.4 8.6 3.7 20.6.6 27-1.5 29.8-9.4 2-5.8-.3-10.5-6.7-13.2-4.7-2-4.7-2.1-2.1-3.1 6.6-2.5 9.2-11.6 4.6-15.9-3.6-3.4-8-4.2-23.4-4.2-10.8 0-14.3.3-14.3 1.2zm26.9 3.3c5.1 2.6 5.6 8.2 1.2 12.6-2.4 2.4-3.8 2.9-7.5 2.9H517v-17h4c2.3 0 5.4.7 6.9 1.5zm-1.1 19.5c6.5 0 9.7 10.5 4.8 15.5-2.9 2.9-8.8 4.2-12.2 2.6-2.3-1-2.4-1.5-2.4-9.5 0-9 .6-10 5.5-9 1.1.2 3 .4 4.3.4zM24.8 146.5c-4.9 4.7-8.8 9.1-8.8 9.9 0 1.4 17.8 18.6 19.2 18.6 2 0 .4-3.8-4-9.9-2.7-3.6-5.1-7.1-5.5-7.8-.5-.7 1.7-4.6 5.2-9.5 3.2-4.6 5.7-8.6 5.4-9.1-1-1.7-3.3-.2-11.5 7.8z" />
                        <path
                            d="M42.8 146.3c-4.9 4.5-8.8 9-8.8 9.9 0 2.4 18 19.2 19.3 17.9.7-.7-.7-3.6-4.8-9.5l-5.8-8.4 5.7-8c3.1-4.4 5.6-8.5 5.6-9.1 0-2.5-3-.6-11.2 7.2zM982.6 236.8c-.9 1-3.6 6-6.1 11.1-2.5 5.1-5.9 11.3-7.7 13.8-4.9 7.2-16.4 18.9-25 25.3-12.6 9.5-18.9 12.5-31.3 15-14.2 2.8-25.7 6.5-32.1 10.1-4.8 2.7-11.3 8.9-14.1 13.5-2.3 3.8-1.5-8.9 1.2-17.3 4.3-13.4 14.9-24.9 29-31.3 3.3-1.6 14.1-5.3 24-8.4 28.7-9 40.2-13.9 47.2-20.2l3.8-3.3-9 3.8c-4.9 2.1-13.2 5.7-18.3 8-5.1 2.3-17.5 7.1-27.5 10.7-19.5 7.1-25.3 9.6-32.1 14.4-12.7 8.6-20.6 24.5-20.6 41 0 3.2-.4 6.1-.9 6.4-.5.4-4.7-1.2-9.3-3.5-7.6-3.7-8.8-4-14.5-3.6-11.1.8-18.6 7.7-19 17.5-.1 3-1.1 7.7-2.3 10.4-1.2 2.8-1.9 5.2-1.6 5.5.3.3 1.7-.4 3.2-1.6 3.3-2.6 8.3-2.7 13.2-.2 5.2 2.6 12.8 11.1 15.7 17.4l2.5 5.2v-6.8c0-3.7.6-8.3 1.4-10.2 2.1-4.9 7-7.7 12.2-7.1 9 1.1 15.2 7.4 28.6 28.8 13.2 21.2 23.9 32.1 40.1 41 4.3 2.4 8.5 4.9 9.5 5.6 1.5 1.1 1.2 1.2-1.8.7-7.8-1.3-45.9-10.8-50.8-12.7-5-1.9-5.5-2-7-.4-1.5 1.5-1.3 1.6 3 1.6 2.6 0 5.7.4 7 .9 1.3.5 7.5 2.6 13.8 4.6 17.6 5.6 24 9 44.5 23.9 4.4 3.2 11.4 7.5 15.6 9.6 16 8.1 40.4 14.5 60 15.7 8.4.5 15.9-.1 14.8-1.2-.2-.2-5.8-.8-12.4-1.5-30.9-3-56.9-12-67-23.3-7.6-8.3-6.3-9.4 12.1-10.7 25.9-1.9 43.4-5.1 57.8-10.5 14.9-5.6 16.7-8 3-4-16.9 4.9-32 6.9-53.4 6.9-22.3.1-30.9-1.3-42.1-6.9-12.6-6.4-23.6-17.7-29-30-2.2-5-2-7.5.8-7.5 3.3 0 11.8-4.7 14.5-7.9 1.7-1.9 4.1-7.6 6.3-14.6 4.4-14 8.5-21.2 16.2-28.7 8.3-7.9 17.2-13.4 41.6-25.7 11.7-5.8 24.4-12.8 28.4-15.4 9-6.1 18.2-15.7 21.8-22.6 3.2-6.4 2.5-6.3-7.4.9-18.3 13.3-42.4 21.1-83.5 27-18 2.6-19.7 2.4-13.1-1.4 13.2-7.7 26.4-19.6 36-32.6 4.7-6.4 13.5-23.1 13.5-25.7 0-1.8-1.4-1.6-3.4.5zM24 243.6c-3.6 1-5.6 1.1-5.8.4-.2-.5-1.2-1-2.3-1-1.7 0-1.9.8-1.9 8 0 9.3 1.6 10.6 4.9 4.1 4.5-8.6 12.6-11.7 17.6-6.6 2.8 2.7 3.2 6.3 1 10.4-1.7 3.3-3.3 4.1-8.6 4.1-3.1 0-3.9.4-3.9 1.9s1 1.9 5.3 2.4c8.5 1 12 7.3 8.2 14.7-2 3.8-4.3 5-10 5-7 0-8.8-1.3-8-6 .6-3.4.3-4.1-1.9-5.5-5.1-3.4-9.6 1.8-6.5 7.4 3.5 6.3 12.7 9.2 22.7 7.2 7.1-1.4 11.8-4.6 13.7-9.3 2.7-6.9-.2-12.7-7.5-14.9l-4-1.2 3.9-1.8c4.6-2 7.1-5.3 7.1-9.4 0-8.6-11.5-13.4-24-9.9zM70 243.5c-6.7 2.1-10.2 5.8-9.8 10.3.3 3.3.6 3.7 3.4 4 4.3.4 6.7-2.1 5.9-6-.9-3.9.9-5.8 5.6-5.8 6.1 0 9.5 4.6 8.7 11.6-.3 2.6-1.1 3.1-9 6-12.9 4.6-16.1 7.1-17.3 13.1-.8 4.2 1.6 9.6 5.1 12 5 3.2 13.7 1.9 19-2.8 2-1.9 2.1-1.9 4.2 1.1 1.9 2.5 2.9 3 6.6 3 7.9 0 10.5-2.7 4.4-4.5l-3.3-1-.5-17.2-.5-17.2-2.9-3c-1.9-2-4.5-3.4-7.8-4-5.9-1.3-6.2-1.3-11.8.4zm14 29v8.5l-3.2 2c-4 2.4-10.1 2.6-12.2.4-2.4-2.3-2-8.8.7-11.9 1.6-1.9 12-7.2 14.5-7.5.1 0 .2 3.8.2 8.5zM189.1 243.1c-9.1 2.7-15.1 11.8-15.1 22.7 0 8.9 1.7 13.9 6.5 18.8 8.5 8.9 22 8.4 30.3-1 3.6-4.1 3.9-5.1 1.8-5.9-.9-.4-2.5.8-4.1 2.8-4.9 6.5-15.6 6.8-20.9.5-2.7-3.2-4.6-8.7-4.6-13.3V265h30v-4c0-7-3.7-13.8-9-16.5-3.6-1.9-11-2.6-14.9-1.4zm11.3 5.4c2.2 2.4 3.6 6.5 3.6 10.6 0 1.7-.9 1.9-10.5 1.9-11.7 0-12.1-.3-9.1-7.4 3.1-7.3 11.5-10 16-5.1zM316.6 243.1c-5 1.2-10.4 5.2-11.2 8.4-.9 3.5 1.2 6.5 4.4 6.5 3.9 0 5.2-1.7 5.2-6.6 0-2.9.5-4.4 1.6-4.8 3.2-1.2 7.4-.5 10 1.8 2.3 1.9 2.8 3.2 2.8 7.2l.1 4.8-8.6 3.1c-14.5 5.3-17.9 8.1-17.9 15.3 0 11.2 13.5 15.7 23.5 7.8l2.9-2.3 2.4 2.8c1.9 2.4 3.2 2.9 6.7 2.9 2.4 0 5-.3 5.9-.6 2.3-.9 2-3.4-.4-3.4-1.1 0-3-1-4.1-2.1-2.1-2.1-2.1-2.9-1.6-14.3.9-19.8-1.1-24.7-11.2-26.6-3-.5-5.6-1-6-.9-.3.1-2.4.5-4.5 1zm13.4 29.4c0 7-.2 7.5-3.1 9.9-3.7 3.1-10.8 3.6-13 1-2-2.5-1.7-8.9.6-11.5 2.2-2.4 13.5-8 14.8-7.2.4.2.7 3.7.7 7.8zM390.9 243.5c-6.3 2-11.3 7.1-13.6 14.2-1.8 5.2-2.2 5.8-4.6 5.7-7.1-.3-6.7.1-6.7-6.8 0-6.9 1.4-9.6 5.1-9.6 1 0 1.9-.7 1.9-1.5 0-1.2-1.9-1.5-11-1.5-8.7 0-11 .3-11 1.4 0 .8 1.1 1.7 2.5 2 4.1 1 4.6 3.4 4.3 20.8l-.3 16.3-3.3 1.4c-5.5 2.5-3.2 3.6 8.1 3.9 9.1.2 10.7 0 10.7-1.3 0-.8-1-1.9-2.3-2.4-4.1-1.6-4.8-3.4-4.5-11.3l.3-7.3h8.8l1.2 5c2.8 12.2 10 18.5 21.2 18.5 8.8-.1 16.5-5.4 20.1-14 2-4.9 1.9-16.5-.3-21.8-2.3-5.7-8.5-10.8-14.7-12.1-5.9-1.3-6.1-1.3-11.9.4zm12.2 4.2c4.3 2.6 6.4 9 6.3 19.3 0 6.4-.5 9.6-2.1 13.2-2.1 4.6-6.1 7.8-9.8 7.8-6.2 0-11-7.1-12.1-17.7-1.8-17.2 7.3-28.7 17.7-22.6zM105 245.2c0 .7 1.5 2 3.3 2.8l3.2 1.5.3 16.9c.3 17.6-.1 19.2-4.1 19.8-1.2.2-2.2 1-2.2 1.8 0 1.2 1.6 1.5 8.5 1.5 7.3 0 8.5-.2 8.8-1.8.2-1.1-.3-1.7-1.7-1.7-4.6 0-5.1-2-5.1-20.8 0-9.7.4-17.2.8-16.7 1 1.1 1.1 1.5 8.8 23 3.1 8.8 6.1 16.4 6.6 17 1.5 1.6 3-1.3 10.2-20.2 3.8-9.8 7.2-18.2 7.7-18.8.5-.5.9 6.5.9 16.7 0 18.3-.2 19.2-4.5 20-1.1.2-2 1-2 1.8 0 1.2 1.9 1.5 10.9 1.5 11.9 0 14.5-1.2 8.2-3.9l-3.6-1.5v-17.4c0-18.1.2-19 4.3-19.8 1-.2 1.9-.9 2-1.4.1-.6-3.6-1.1-9.3-1.3l-9.5-.3-5.5 15.2c-3 8.3-5.8 15.3-6.1 15.5-.8.4-1.7-1.9-7.8-19.1l-3.8-11-9.7-.3c-7.3-.2-9.6 0-9.6 1zM220 245.5c0 .8.7 1.5 1.5 1.5s2.4.9 3.5 2c1.8 1.8 2 3.3 2 17.6 0 8.5-.4 16.4-1 17.4-.5 1-2.1 2.1-3.5 2.4-1.4.4-2.5 1.3-2.5 2.1 0 1.3 4.6 1.5 33.4 1.5h33.5l2 2.6c1.2 1.5 2.6 4.4 3.3 6.5.8 2.7 1.7 3.9 3 3.9 1.6 0 1.8-.9 1.8-8 0-5.6-.4-8.2-1.2-8.4-.7-.3-2.5-.7-4-1l-2.8-.6v-17.9c0-18.5.2-19.4 4.3-20.2 1-.2 1.9-.9 2-1.4.1-.6-4.1-1.1-10.5-1.3-8.4-.2-10.8 0-10.8 1 0 .8 1.4 1.9 3 2.5l3 1.1-.2 18.4-.3 18.3-7.3.3c-4.6.2-7.9-.2-8.8-.9-1.1-.9-1.4-4.8-1.4-18.3 0-17.8.4-19.6 4.2-19.6 1 0 1.8-.7 1.8-1.5 0-1.2-1.8-1.5-10.5-1.5-7.9 0-10.5.3-10.5 1.3 0 .7 1.4 1.8 3 2.4l3 1.1v37.3l-8.2-.3-8.3-.3-.3-18.8-.2-18.7 3-.6c1.6-.4 3-1.3 3-2 0-1.1-2.3-1.4-11-1.4-9.1 0-11 .3-11 1.5zM426 245c0 .5 1.6 1.6 3.5 2.4l3.5 1.5-.2 18.2-.3 18.3-3.3.8c-1.9.5-3.2 1.4-2.9 2.1.3.9 9 1.3 33.8 1.7 18.4.3 33.9.8 34.6 1.2.6.5 2.1 3.3 3.4 6.3 3.4 8.2 4.9 7.3 4.9-3V286h-3c-1.9 0-3.3-.7-4-1.9-.6-1.1-1-8.8-1-18 0-17 .6-19.1 5.1-19.1 1 0 1.9-.7 1.9-1.5 0-1.2-1.9-1.5-11-1.5-11.8 0-14 1.1-7.7 4l3.2 1.5.3 16c.4 21.9 1 20.6-9.1 20.3l-8.2-.3-.3-18.8-.2-18.7 3-.6c1.6-.4 3-1.3 3-2 0-1.1-2.3-1.4-11-1.4-11.6 0-13.6.9-7.5 3.4l3.5 1.5-.2 18.3-.3 18.3-7.3.3c-4.6.2-7.9-.2-8.8-.9-1.1-.9-1.4-4.8-1.4-18.3 0-17.8.4-19.6 4.2-19.6 1 0 1.8-.7 1.8-1.5 0-1.2-1.9-1.5-11-1.5-6.6 0-11 .4-11 1zM509 245.5c0 .8.8 1.5 1.8 1.5 1.1 0 2.6.8 3.5 1.8 1.4 1.6 1.7 4.4 1.7 18.4 0 17.3-.2 18.2-4.5 19-1.1.2-2 1-2 1.8 0 1.2 1.9 1.5 11 1.5s11-.3 11-1.5c0-.8-1-1.6-2.3-1.8-1.2-.2-3-1.4-3.8-2.8-1.6-2.4-1.5-2.6 8.7-13.6l10.4-11.1.3 12.3c.3 12.8-.3 15-4 15-1.3 0-1.8.6-1.6 1.7.3 1.6 1.6 1.8 10.7 1.8 11.4 0 13.9-1.3 7.7-3.9l-3.6-1.5v-17.4c0-18.2.2-19.1 4.4-19.8 1.1-.2 2.1-1 2.4-1.7.3-.9-2.4-1.2-11.2-1.2-12.2 0-14.2.9-8.1 3.4 2.4 1 3.5 2.2 3.5 3.5 0 2-18.5 23.1-20.2 23.1-.9 0-1.1-20.4-.2-23.8.4-1.5 1.7-2.5 3.5-2.9 1.6-.3 2.9-1.2 2.9-1.9 0-1.1-2.3-1.4-11-1.4-9.1 0-11 .3-11 1.5zM566 245.3c0 .7 1.2 1.7 2.8 2.3 1.8.7 4.9 4.3 9.1 10.3l6.3 9.2-2.9 4.1c-3.3 4.8-11.9 13.8-14.8 15.4-3.7 2.2-.4 3.5 7.5 3.2 7.8-.3 10.3-2 5.6-3.8-1.4-.5-2.6-1.6-2.6-2.4 0-1.2 8.6-13.6 9.4-13.6.4 0 7 9.9 8.5 12.8 1.1 2 .9 2.3-1.4 3.2-1.5.6-2.5 1.6-2.2 2.3.2.8 3.2 1.2 10.2 1.2 7 0 10-.4 10.2-1.2.3-.7-.6-1.7-2-2.2-1.3-.5-3.7-2.7-5.4-4.8-4.8-6.1-11.3-16.1-11.3-17.3 0-2.3 10.4-14.2 14.1-16.1 2.2-1.1 3.9-2.4 3.9-2.9 0-.6-3.6-1-8.5-1-6.9 0-8.5.3-8.5 1.5 0 .8.7 1.5 1.5 1.5 3.1 0 2.7 3.1-1 8.6-2.1 2.9-4 5.4-4.4 5.4-.7-.1-2.7-2.7-6.5-8.8L581 248l2.5-1c5.1-2 2.5-3-7.5-3-7.5 0-10 .3-10 1.3z" />
                        <path
                            d="M671.5 251.9c-9.1 2.3-18 9.7-22.5 18.7-2.1 4.3-2.5 6.7-3 18.9-.5 15.2-.4 14.8-7.5 24.1-5 6.5-7.2 13.6-12.1 38.3-7.8 39.3-11.8 51.3-22 65.7-7.2 10.2-20.6 20.5-35.2 27-27.2 12.2-60.3 21.1-92.2 24.9-7.4.8-15.2 1.8-17.2 2-3.5.5-3.9.3-5.5-3.2-2.5-5-6.2-7.5-12.2-8.1-9.8-.9-19.1 3.9-20.4 10.5-.7 3.8 1.6 5.3 7.8 5.1 9.8-.4 16.7.2 16.3 1.3-.2.6-4.5 2.7-9.6 4.5-5.1 1.8-10.3 4.1-11.6 5.1-6.8 5-5.8 17.3 1.6 20.4 4.4 1.8 12.2.6 16.2-2.4l3.5-2.7 3.1 3.1c2.8 2.8 3.6 3.1 7.6 2.6 2.5-.2 5-.9 5.6-1.5 1.5-1.5 0-3.2-2.7-3.2-3.8 0-4.6-2.9-4.3-15.2l.3-11.3 16-.7c13.8-.5 33.8-2.6 42.6-4.4 2.2-.4 3 .3 6.2 4.9 2 2.9 3.7 5.9 3.7 6.5 0 .6-2.5 4.6-5.5 8.9-3.8 5.2-5.2 8-4.5 8.7.7.7 2.2-.1 4.7-2.4 11.3-10.3 14.3-13.6 14.3-15.5 0-1.2-2.2-4.2-5-7-2.7-2.7-4.7-5.2-4.2-5.6.4-.4 2.4-1 4.4-1.3 3.7-.7 3.8-.6 8.8 6.1 2.7 3.7 5 7.3 5 7.8 0 .6-2.5 4.5-5.5 8.7-9.1 12.7-7.1 13.3 5.6 1.7 6.2-5.6 8.9-8.8 8.9-10.4 0-1.5-2.3-4.2-7-8.4-3.9-3.5-6.8-6.6-6.5-7.1.3-.4 2.9-1.4 5.7-2.1 2.9-.6 9.8-2.7 15.2-4.6 14.3-4.8 16.8-4.4 14.2 1.9-1.9 4.4-26.3 37.8-30.6 41.8-.3.3-2.6 2.8-5.1 5.6-2.6 2.8-7.2 7.5-10.4 10.4l-5.6 5.4-10.7.1c-5.9 0-48.2.2-94 .3-78.3.2-83.3.3-83.9 2-.3.9-2.9 4.1-5.7 7l-5.1 5.3 90.8-.2c49.9-.1 91 .1 91.3.3.5.5-8.5 8.6-18.6 16.8-7.1 5.8-8.4 7-7.2 7 1.6 0 18.1-11.2 24.7-16.6 10.7-8.9 3.8-8.1 72-8.8 63.3-.7 169.4-2.8 225.6-4.6 17.8-.5 50.4-1.4 72.4-2 204.7-5.1 235.6-5.9 280.5-7.6 22.3-.8 48.7-1.7 58.8-2.1 20.6-.7 19.7-.2 19-9.4l-.3-4.4-14.5.1c-8 .1-34.1.9-58 1.8-39.8 1.5-87 2.8-201 5.6-22.8.6-59 1.5-80.4 2.1-21.3.5-39 .8-39.3.5-.3-.2 2.8-2 6.9-3.9 9.8-4.5 28.6-16.8 40.8-26.7 13.8-11.2 16.2-14.6 11.8-17.4-1.4-.8-2.8 0-8 5-11.2 10.6-40.3 32.3-41.6 30.9-.2-.2 3-4.5 7.2-9.5 7.7-9.2 9.4-13.3 6.3-15.8-1.8-1.5-2.7-.7-8.9 8.3-8 11.4-17.2 21.6-22.2 24.5-2.3 1.4-5 3.2-5.9 4.1-1.4 1.5-4.6 1.7-23.3 1.7-20.3.1-21.5 0-19.3-1.5 2.7-1.9 11.5-9.5 20.3-17.7 4.9-4.6 6.8-5.6 10.5-6.1 15.8-2.1 54.6-19.8 79.1-36.1 10.6-7 10.5-7 9.2-9.9-.6-1.4-1.6-2.5-2.1-2.5-.4 0-6.9 4-14.2 8.8-16.4 10.7-19.7 12.8-22.7 13.7-1.3.4-4.9 2.1-8 3.9-10.3 5.8-39.2 17.5-39.2 15.9 0-.4 2-3.3 4.5-6.4 4.8-6.1 5.8-10.6 3-12.9-2.7-2.2-3.1-1.8-15.6 16.5-4.2 6.2-5.8 7.2-13.9 8.7-8.1 1.4-9.4 3.5-1.7 3 2.8-.2 4.7 0 4.7.6 0 2-18.6 16.4-25.5 19.8l-6.9 3.4h-31.8l-6.2-5.1c-7.9-6.5-7.9-6.5-13.1-12.8-4.6-5.6-5.6-7.7-3.1-6.8 3.4 1.3 13.6 1.9 13.6.9 0-1.1-1.9-1.7-13.5-4.3l-5.9-1.4-4.3-8c-2.3-4.4-4.3-8.4-4.3-8.9 0-.4 4.1-.5 9-.1 10.7.8 12.6-.9 2.2-1.9-12.4-1.2-12.3-1.2-15-10.2-1.3-4.3-3.2-12.7-4.1-18.7-1-5.9-2.1-11-2.4-11.3-.3-.4-1.4-.4-2.3 0-1.5.6-1.6 1.7-1 9.4 1 13.4 1.3 15.4 3 21.2.9 2.9 1.4 5.5 1.2 5.7-.7.7-16.9-3.5-25.8-6.7-5.7-2.1-8.9-3.8-9.3-5-.6-1.8-1.7-10.1-3.4-25-.5-4.1-.6-7.8-.2-8.2 1.6-1.8 22.3-11.8 25.6-12.4 2.1-.4 4.7-.2 6.1.5 2.7 1.2 3.3-.1.9-2.1-.9-.7-2.1-1.8-2.8-2.4-.9-.9-3.2 0-9.3 3.3-4.5 2.4-16 7.2-25.5 10.7-22.4 8.2-30 11.3-43.3 17.6-6 2.8-11 4.9-11.3 4.7-.2-.3 4.7-4.3 10.9-9 17.7-13.3 30.1-27.2 40.2-45.3 7.6-13.5 12.8-28 18.2-50.1 5.9-24.8 10.5-33.5 18.6-35.2 1.8-.3 4.4-.5 5.7-.3 3 .5 10.1 7.6 12.4 12.4 2.2 4.6 3.3 4.8 4 .9.7-3.4 4.3-7.1 6.8-7.1 3 0 7.5 4.7 9.9 10.2 6.2 14.1 1.9 36.9-10.4 56.1-4.9 7.8-4.6 8.7.4 1.2 8.6-12.8 13.3-26.2 14.6-41.7 1.1-14-1.7-22.6-12.1-37.1-1.9-2.7-3.9-6.5-4.5-8.5-1.8-6.1-2.3-15.6-1.1-19.5 1.4-4 6.8-9.3 10.7-10.3 5.3-1.4 1.6-2.9-8.2-3.4-7.6-.4-10.9-1-14-2.7-4.6-2.5-12.4-3.6-16.9-2.4zM640 437.2c0 5.1.5 11 1.1 13.1.6 2.2.8 4.1.6 4.3-.3.3-4.7-1.5-9.8-4-5.2-2.5-10.3-4.8-11.4-5.1-1.7-.5-1.4-1.1 2.5-4.4 10.7-9.1 15.5-13 16.3-13 .4-.1.7 4.1.7 9.1zm-25.1 4.5c-.8 1-4 4.7-7.1 8.2-5.7 6.3-10.4 13.1-9 13.1.4 0 3.1-2.2 6.1-4.9l5.3-4.9 3.2 3.7c1.8 2 4.5 5.4 6.1 7.6 10.2 14 26.7 32.1 37.4 40.8 5.7 4.7 2.7 4.1-4.5-.9-9-6.2-26.1-23.4-35.3-35.7-7.2-9.5-9.6-11.3-10.7-8.2-2.1 5.4 32.7 38.7 50.9 48.7 2.6 1.5 4.7 2.3 4.7 1.8 0-.5-.6-1.1-1.2-1.3-1-.4-1-.6-.1-.6.7-.1 1.9 1 2.8 2.2.8 1.3 5.7 4.4 10.8 6.8l9.2 4.4-11.5.6c-16.7.9-143 2.3-143 1.6 0-1.2 75.7-76.6 80.8-80.6 5.8-4.4 7.2-5.1 5.1-2.4zm50.6 27.6c3.3.9 9.4 2.1 13.7 2.7l7.6 1.2 2.8 6.7c1.5 3.6 3.2 7.2 3.7 7.9.8 1.1.5 1.2-1.9.6-1.6-.4-3.6-1-4.4-1.4-.8-.4-4.4-1.8-8-3-11.7-4.1-24.7-10.9-25.4-13.3-1.3-5-1.9-5 11.9-1.4zm-21.5 6.9c4.6 2.4 6.1 4 9.7 10 2.4 4 5.7 8.8 7.3 10.6 1.7 1.9 3.4 4 3.8 4.7 1.2 2.2 17.4 13.8 23.5 17 6.3 3.2 7.1 4.5 2.8 4.5-4.6 0-22.5-12.2-33.6-23-12.3-11.9-26.5-28.1-26.5-30.3 0-.5 1.7.1 3.8 1.4 2 1.3 6.2 3.6 9.2 5.1zm-197.6 8.6c0 1.2-.1 4.9-.2 8.1-.2 5.6-.4 6.1-3.6 8-4.3 2.7-9 2.7-11.7 0-3.2-3.2-2.1-9.5 2.2-13.1 3.2-2.7 10.5-5.9 12.4-5.4.6.2 1 1.2.9 2.4zm226.6 3.5c5.8 1.9 13.7 4.2 17.5 5.1 6.2 1.4 7.4 2.1 10.5 5.8 7.6 9.2 18.6 18.9 23 20.3 4.5 1.4.3 2.5-9.6 2.5-10.2 0-10.6-.1-18.2-3.9-9-4.6-20.1-13.3-27-21.1-5.8-6.7-10.2-13.6-8.1-12.8.8.2 6.1 2.1 11.9 4.1zM228 330c-2.6 2.6-2.5 5.1.1 8.4 3.1 3.9 7.1 5.6 13.4 5.6 9.1 0 15.5-4.1 15.5-10 0-3.6-1.4-5.3-4.5-5.3-3.5 0-4.7 1.9-3.9 6.5.7 4.3-1.2 5.8-7.1 5.8-6 0-7.4-1.3-6.8-6.1.5-3.4.2-4.5-1.2-5.6-2.5-1.7-3.1-1.7-5.5.7zM26.9 352.4C17 355.9 12 363.8 12 375.7c0 14.8 7.3 23.3 20 23.6 4.7.1 6.5-.3 10.5-2.8 6.2-3.8 9.4-8 7.6-9.8-1-1-1.6-.8-2.9.8-3.8 4.5-7.4 6.5-11.9 6.5-9.2 0-13.8-6.6-13.7-20 0-12.3 4.1-19 11.3-19 5.5 0 6.4 1 5.6 6.2-.8 5 1 7.8 4.8 7.8 3.7 0 5-1.5 5-5.9 0-9-10.9-14.5-21.4-10.7zM69.6 352.5c-10.7 3.8-16.9 17.4-13.7 30.2 2.7 10.7 10.1 16.7 20.6 16.7 6.8-.1 11.3-2 15.7-6.7 5.5-6.1 2.6-8.7-3-2.8-3.6 3.8-4.3 4.1-9.1 4.1-2.9 0-6.4-.6-7.9-1.4-3.5-1.8-6.8-7.8-7.7-13.9l-.7-4.7h15.1c17.3 0 16.9.2 15.1-8.4-2.4-11.5-12.9-17.2-24.4-13.1zm12.4 5c1.5 1.6 2.4 4.1 2.8 7.5l.5 5H63.8l.7-3.3C66.2 359 70.1 355 76 355c2.6 0 4.3.7 6 2.5zM184.7 352c-4.9 1.5-9.4 5.8-12.2 11.5-2.5 4.9-2.7 6.4-2.3 13.3.8 12.9 6 20 16.6 22.2 7.4 1.6 14.7-.6 19.6-6 3.8-4.3 4.3-5.5 2.4-6.6-.7-.4-2.2.5-3.7 2.3-3.4 4-6.1 5.3-11.1 5.3-8.2 0-13.3-5.2-14.6-14.8l-.7-5.2H209v-4.4c0-5.8-1.4-9.4-5.3-13.4-4.5-4.7-11.9-6.3-19-4.2zm10.5 4.1c2.4 1.3 4.8 6.7 4.8 10.9v3h-10.5c-11.7 0-12.1-.3-9.1-7.4 2.6-6.3 9.5-9.3 14.8-6.5zM149.5 352.8l-6 .3-5.5 15c-3 8.3-5.8 15.2-6.1 15.5-.4.2-3.1-6.5-6-14.9l-5.4-15.2-9.8-.3c-9.9-.3-12.5.8-7 2.9 1.5.6 3.1 1.6 3.5 2.2.4.7.8 8.7.8 17.8 0 17.3-.2 18.3-4.4 19-1.1.2-2.1 1-2.4 1.6-.3 1 1.9 1.3 8.7 1.3 9.9 0 11.7-1.3 5.8-4l-3.2-1.5-.3-17.8c-.1-9.7.1-17.7.5-17.7.5 0 3.9 9.1 7.8 20.1 3.8 11 7.4 20.3 7.8 20.6 1.7 1 3.5-2.5 10.8-21.7l7.4-19.5.3 17.9c.3 18.6 0 20.2-4 20.8-1.2.2-2.3.9-2.6 1.5-.3 1 2.4 1.3 11.2 1.3 12.2 0 14.2-.9 8.1-3.4l-3.5-1.5v-17.4c0-18.2.2-19.1 4.4-19.8 1.1-.2 2.1-.9 2.3-1.5.5-1.4-4.7-2-13.2-1.6zM216 354c0 1.3.7 2 1.9 2 4.6 0 5.1 2.1 5.1 19.5s-.5 19.5-5.1 19.5c-1 0-1.9.7-1.9 1.5 0 1.2 1.9 1.5 11 1.5 8.3 0 11-.3 11-1.3 0-.7-1.3-1.8-3-2.4-6.1-2.3-5.6-3.4 9.1-19.2l7.9-8.4v26.4l-3.5 1.5c-6.1 2.5-4.1 3.4 8 3.4s14.1-.9 8-3.4l-3.5-1.5.2-18.3.3-18.3 2.8-.3c1.9-.2 2.7-.9 2.7-2.3 0-1.9-.6-2-10.7-1.7-8.8.2-10.8.6-10.8 1.8 0 .8.9 1.6 2 1.8 2.7.5 4.5 2.1 4.5 3.9 0 1.4-18.3 22.4-20.2 23.1-.4.2-.8-5-.8-11.5 0-12.5.7-14.8 4.5-15.5 1.1-.2 2-1 2-1.8 0-1.2-2-1.6-10.7-1.8-10.3-.3-10.8-.2-10.8 1.8z" />
                        <path
                            d="M788.6 394.1c-.3.8-1.1 4.5-1.9 8.4-1.5 7.9-.8 7.6-11.4 5.4-3.5-.7-6.6-.9-7-.6-.3.4.6 2 2.1 3.6l2.8 2.9-2.5 4.8c-1.3 2.7-3.2 8.2-4.2 12.2-1 4.1-2.1 7-2.5 6.5-.4-.4-1.2-3.3-1.9-6.3-1.2-5.7-6.4-16-8.1-16-1.5 0-1.2-4.1.5-7 3.1-5.5 1.3-5.3-5.7.5-3 2.5-6 4.5-6.5 4.5-.6 0-3-2.5-5.3-5.5s-4.7-5.5-5.2-5.5c-.6 0-.8 1.7-.4 4.5.6 3.8.5 4.6-1.1 5.1-11.1 3.6-15.1 8.1-19.7 22-2.2 6.7-4.5 20-3.6 21.3 1.9 3.2 35.1 5.1 55 3.2 12.8-1.3 35.1-5 45-7.5 3-.8 6.7-1.7 8.3-2 2.6-.6 2.7-.8 2.7-7.9-.1-14.5-4.8-28-11.7-33.6-1.8-1.4-5.6-3.3-8.5-4.2-4.6-1.4-5.3-2-6.1-5-1-4.1-2.4-5.8-3.1-3.8z" />
                        <path
                            d="M869 423.3c-31.8 23.2-57.8 35.9-90.8 44.2-10.7 2.7-26.9 5.5-31.9 5.5-1.7 0-3.5.5-3.9 1.1-.8 1.3 10.9.6 27.6-1.6 29.9-4 51.7-11.6 78-27.2 26.7-15.9 32.6-20.3 30.9-23.4-1.4-2.8-4.8-2.3-9.9 1.4zM15.2 437.2c-1.6 1.6-1.4 5.6.6 15.7 2.7 13.1 4.4 11.7 7.3-6.1 1-6.2 1-7.9 0-9.2-1.6-1.9-6.2-2.1-7.9-.4zM33.2 437.2c-1.6 1.6-1.5 5.3.4 15.9 1.1 5.8 2.1 8.9 3 8.9 1.5 0 1.8-.9 3.9-12.7 1.9-10.6 1.2-13.3-3.3-13.3-1.6 0-3.3.5-4 1.2zM471.2 437.2c-1.6 1.6-1.5 4.7.4 14.8 1.6 8.3 2.7 11 4 9.8.8-.9 4.4-17.7 4.4-20.8 0-3.3-1.7-5-5-5-1.4 0-3.1.5-3.8 1.2zM489.2 437.2c-1.6 1.6-1.5 6.4.5 16.4 2.5 12.8 3.9 11.4 7.4-7.2 1.4-7.5.3-10.4-3.9-10.4-1.6 0-3.3.5-4 1.2zM63.2 442.6c.2.9 1.9 2.2 3.8 2.8 1.9.6 4 2.2 4.7 3.6 4 7.9-1.7 38.1-9 48.2l-3 4.2-1.9-2.7c-1.4-2-2.8-2.7-5.2-2.7-3.9 0-5.6 1.5-5.6 5.2 0 6.2 7.3 8.8 13.6 4.9 9.5-5.8 15.4-21.8 17.6-47.3l1.1-13.9 8.6.3 8.6.3.3 26.1c.1 15.2-.2 27.3-.7 28.7-.7 1.9-2 2.8-4.6 3.3-2 .3-3.5 1.2-3.5 2 0 1.1 2.6 1.4 13.5 1.4s13.5-.3 13.5-1.4c0-.8-1.2-1.7-2.7-2.1-5.4-1.3-5.3-.8-5.3-29.5s-.1-28.1 5.3-29.4c1.5-.3 2.7-1.3 2.7-2.1 0-1.3-3.7-1.5-26.1-1.5-23.5 0-26 .2-25.7 1.6zM133.5 462.3c-5.9 2.8-8.3 6.4-6.9 10.5 1.1 3.1 4.1 4 7.5 2.2 1.8-1 2.1-1.8 1.6-5.1-.5-4.1.4-5.6 3.8-5.9 6.7-.7 9.9 1.7 11 8.2.9 5.2.1 5.9-10 9.3-13.2 4.5-16.5 7.6-16.5 15.6 0 3.3.7 4.8 3.5 7.6 3.4 3.4 3.8 3.5 9.4 3.1 4.4-.3 6.8-1.1 9.4-3.1l3.6-2.7 3 3c3.1 3.2 6.8 3.8 11.5 2 3.7-1.4 3.4-4-.4-4-1.9 0-3.3-.7-4-1.9-.5-1.1-1-8.5-1-16.8 0-9.8-.5-15.6-1.3-17.2-3.5-6.9-15-9.2-24.2-4.8zm17.5 22.1c0 1.2-.3 5.1-.6 8.5-.6 5.5-1 6.3-3.9 8.1-8.8 5.4-16.6-1.1-12.1-9.9 1.7-3.2 5.1-5.6 10.4-7.6 5.3-1.9 6.2-1.8 6.2.9zM187.5 460.6c-4.4 1.1-10 6.1-12.8 11.4-2.6 5-2.8 6.3-2.5 13.5.4 9.4 2.5 14.3 8.2 18.9 5.1 4.1 14.3 4.9 21 1.7 5.2-2.6 10.4-8.7 8.8-10.3-.8-.8-2.4.1-5.6 3-3.8 3.5-5.2 4.2-8.7 4.2-9.2 0-14.4-7.3-14.4-20 .1-5.8.6-8.6 2.4-12.3 2.7-5.6 4.8-6.9 10.4-6.5l4.2.3v5.4c0 4.9.3 5.7 2.6 7 7.9 4.5 10.4-8.6 2.6-14.1-3-2.2-11.4-3.3-16.2-2.2zM274 461.6c-19.9 8.6-17.7 41.4 3.1 46.4 5.8 1.4 11.1.7 16.4-2.3 11.4-6.4 14.9-25.2 6.8-36.9-5.2-7.5-17.7-10.9-26.3-7.2zm16 5.2c3.8 3.9 5.3 10 4.8 19.7-.6 12.4-4.9 18.5-12.9 18.5-4 0-9.3-5.2-10.8-10.5-1.4-5.1-1.4-15.9 0-20.9.6-2.2 2.4-5.2 3.9-6.8 2.3-2.3 3.7-2.8 7.5-2.8s5.2.5 7.5 2.8zM213 468.5c0 5.7.3 7.5 1.4 7.5.7 0 1.9-1.4 2.6-3 2.4-5.9 4.8-8 9.1-8h3.9v17.9c0 19.1-.5 21.1-5.1 21.1-1 0-1.9.7-1.9 1.5 0 1.2 1.9 1.5 11.5 1.5 9.2 0 11.5-.3 11.5-1.4 0-.8-1.2-1.7-2.7-2.1-1.5-.3-3.1-1.2-3.5-1.8-.4-.7-.8-9.2-.8-19V465h3.5c3.8 0 6.4 2.2 9 7.6.9 1.9 2.3 3.4 3.1 3.4 1.2 0 1.4-1.3 1.2-7.3l-.3-7.2-21.2-.3-21.3-.2v7.5zM309.4 462.2c-.4.6-.3 1.3.2 1.5 5.5 2 5.9 2.6 6.5 11.3.3 4.7 1.2 9.5 1.9 10.7 2.9 4.5 10.4 6.1 19 3.9 3.4-.9 6.4-1.6 6.6-1.6.3 0 .4 3.3.2 7.2-.3 7.3-.3 7.3-3.6 8.3-6 1.7-2.8 3 8.6 3.3 8.6.2 11.2 0 11.2-1 0-.7-1.5-2-3.3-2.8l-3.2-1.5-.3-16c-.1-8.8 0-17 .3-18.1.3-1.4 1.5-2.4 3.6-2.8 1.8-.3 2.9-1.1 2.7-1.8-.3-.9-3.5-1.3-11.3-1.3-11.5 0-14 1.1-8.3 3.6l3.3 1.4.3 8.4c.2 5.8-.1 8.7-.9 9.2-2.8 1.7-9.8 2-13.3.5-4-1.6-5-4.6-4.4-13.1.3-4.6.6-5.1 3.6-6.4 1.8-.8 3.1-2 2.9-2.5-.5-1.6-21.3-2-22.3-.4zM366.4 462.2c-.4.6-.3 1.3.2 1.5.5.2 2 .9 3.4 1.6l2.5 1.3.3 17.3c.3 18-.1 20.1-3.9 20.1-1.1 0-1.9.7-1.9 1.5 0 1.2 1.9 1.5 11 1.5s11-.3 11-1.5c0-.8-.8-1.5-1.8-1.5-3.7 0-5.2-3.2-5.2-11v-7.3l3.2.7c5.6 1.1 10 6.7 12.8 16.3l1.3 4.3h7.9c6.3 0 7.8-.3 7.8-1.5 0-.8-.8-1.5-1.8-1.5-3.1 0-6-2.8-8.5-8.3-2.1-4.6-7-10.7-8.6-10.7-.3 0-1.2-.4-1.9-.9-1.1-.6-.8-1.6 1.2-4.5 1.3-2 3.2-5.7 4.2-8.1 1.9-5.1 2.4-5.3 4.9-2.5 3.3 3.6 8.5 2 8.5-2.6 0-3.4-2.6-5.4-7.2-5.4-5 0-8.5 3.4-11.1 10.8-2.3 6.7-5.4 10.2-9.2 10.5l-3 .2v-16l3.2-1.5c1.8-.8 3.1-2 2.9-2.5-.4-1.5-21.3-1.9-22.2-.3zM897.5 487.4c-3.3 3-10.8 9.5-16.7 14.3-5.9 4.8-10.7 9.1-10.7 9.4-.2 1.9 4.5 1.4 9-.9 6-3.1 25.3-18.3 27.5-21.7 1.8-2.8 1-6.5-1.4-6.5-1 0-4.4 2.5-7.7 5.4z" />
                    </svg>
                </a>
                <button class="header__menu-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="800" height="800" viewBox="0 0 24 24"
                        class="header__menu-button-icon">
                        <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
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
                <button class="splash__button button button_ready-to-help">Готов помочь</button>
            </div>
        </div>

        <?php get_footer(); ?>
    </div>
</body>

</html>