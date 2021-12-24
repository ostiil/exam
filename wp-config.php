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
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'exam' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'Anastasia' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         '*jU(n8ISmxgQPIxeu}aeH^<z8}jSII#L4-az_0if~h1^4)KJJN)NX3Y8g.Epyr%^' );
define( 'SECURE_AUTH_KEY',  'k1=GcHA:W^pdak_7Km%|.(e,-p7JgeC:H=MvL?e~6+RWMv~y}G&Wm2fa*BS~FhGI' );
define( 'LOGGED_IN_KEY',    'WEPb6jMeg5~Pg2)]mE PobnY<t}Ii/3N,<BA<^^B8^}9^cmFI<gjUFQ8ko=9L0=%' );
define( 'NONCE_KEY',        '9lq^TcepOY$#g(,Akid-K#45P8A&M9vMDe+`R}~P)G|9BLvFO(cac44FMh>(`MI(' );
define( 'AUTH_SALT',        '4 ~<*u.sbuY .ssCr`^SV=@7daOd8Y9l.|3a+Tepe 2|XrPN^8<xkY3%T|*gRjLr' );
define( 'SECURE_AUTH_SALT', '-oy:$]i`(`g>a}M|Vz-fy/ER!nkQ&y1QJ[!`<z0c3fp9^Ot,-:Mm!oU {Peo1w<x' );
define( 'LOGGED_IN_SALT',   ' v;%VYBcEG;|QP{s]zD1QiwT>]5pA>-m<c%Kj||&T|Y-OFM$N%.(4r4dM6|Heyb^' );
define( 'NONCE_SALT',       'Nq,Q*tCTFsfJ5+$u q`xm$.pHt|1dl6ovX}j6[6%[_U)As!9]QbGZDKT$Hz_${#U' );

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
