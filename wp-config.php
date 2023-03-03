<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'swallow_db' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7%,j|M@-`KU2WZ0$fT<JqqC_)L$s{JtgJ0[zdYFbNf!-_~^a7>t[/Gfcah,4w_Qm' );
define( 'SECURE_AUTH_KEY',  '}R|X?Y#i&%=pZG_(a4rH[v)c_1pdF,o`>`zu>^nyW[Wl8LQ$/Dlve-xyo0G(}z2x' );
define( 'LOGGED_IN_KEY',    'NZbvi$;j[<fF}.jI<gvzl@D13^9C@so>HR/<8XQ2670&) qi4V_r,#,<EZ*<xe T' );
define( 'NONCE_KEY',        '<M)q!_`b+|Wg&?J}~%6y0L5]9#yP)@^t~hUjAq^%OWLs;#HxJ8Q0Z<]uCvH}[Xvx' );
define( 'AUTH_SALT',        'J6@27pxs@c@0{qU&C3um qDT0V<vhX:OVB$i6xgeRU]oFCoc`NRqmiG6*hC{{5rW' );
define( 'SECURE_AUTH_SALT', '+uHt**)Fl>P{Dnz5N/DQPrP<v4VRm]C@&x c Fzf%j?RqW]*>|z^t==_^T<_^|Z ' );
define( 'LOGGED_IN_SALT',   'Fr^#`8wLP2[L1$JK!lB8KENWX1iDO&M~X,~F2+~]Ky. h##ze6J[F>E{MK 1k]q?' );
define( 'NONCE_SALT',       'XoX7F?o,2--2FJ*X<}tBrRG$*a{Jo,aBx8_2<c@+x@?/UysHDX},*AQcE}yTb&_y' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
