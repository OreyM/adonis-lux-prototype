<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'adonislux' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ad1ww4u=|-k_7EV>2vTEaJ?L)P5P-PRVFIEI=Dk6LKLd~>i^{A2@e|+6Scq=hl1r' );
define( 'SECURE_AUTH_KEY',  '}8UqaTE1xp>ZBfu; *}Hdr;K%Mjm4nT_t85MA$pS =DS5mkW_J,e77uI2Z!H10;d' );
define( 'LOGGED_IN_KEY',    '#1]s*T-8MH$h;?4t`}<$(%6eiFq4M]OeD-(_Ga.~OTd|e,$5x[&j@RE74S2s&2rh' );
define( 'NONCE_KEY',        'a?8[)Y$d|nK&{c+JP+6J0<=pdfp%7X?Ki<r|)}3qal(~^]Sj,fq*0J,L~48!k=XH' );
define( 'AUTH_SALT',        '^__i;r;]hFA8,Ewp(2Q :`gZls5E@HC}No+:){?2b*o~Asc 00RhwT`Iu_s]:OLk' );
define( 'SECURE_AUTH_SALT', '#G&[)s.#kHy=AuiEs9c!Cq}tP6:,(]Bfu, }k8a7;NW0i$y1gyt>ShgUNH!-pN{N' );
define( 'LOGGED_IN_SALT',   '$..UcUjJ0$@~Ayn@>G:7gK 0jwuG-$(gV{.>u8#@.i28 2ZMBr2y;37HA[*-__`e' );
define( 'NONCE_SALT',       'XUny@@Y$g@,CM-@7d/UztWAY-iR)@!)!8rE4-_j]LhD`G ;2M<vYD1=a*iES0u)@' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'al_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
