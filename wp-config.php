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
define('DB_NAME', 'adonislux');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '54joAte4Q47F9xjn0Nv%:!o[m8ucf1D^?}192g,.b+rXt@oFFd_4zXrM?@R0}j#$');
define('SECURE_AUTH_KEY',  'b_A1z4}L&EsI|FQzI;dl+0oK6}>UFqV(t(![fKeQaM]R_fTKZ0e5ee?F!Wr2C^`Q');
define('LOGGED_IN_KEY',    ',>b~tA)@dlRE8@Am-Zc]&=DffvH<LiPw>6d*f?9Qom-/=in]r4*YaHQ.,r{/< (z');
define('NONCE_KEY',        '{0h8=k/<t{lA<{&iUiFvY91sbqHY|T#<E%2[tLYF ]lXF[Uw9!Cnc.g]FZ8kY_Fm');
define('AUTH_SALT',        'Zr6*7I9c7lnSEhPz,& d@Sra`Ji2FgZy%U;uvnuW7[m,X+p%A9 I-6wX8yxB&IHT');
define('SECURE_AUTH_SALT', '-yK,*3i7,jJXt6hkfh-lsL*:bb]AqLi S4;QxgBmIv1a{>+Bz%YyfbY^*xS@P(-^');
define('LOGGED_IN_SALT',   '4QsWCF fQQPjek+HlH@wZJB3j`1*Qb%&f#7W&n{Z?B$EkjjKmb/]-OwK:1}as?y[');
define('NONCE_SALT',       '$*MqK|tAn[@~he9[*J$G)^VT~>|w(FpKNc_ntWufyVP,h>l]9xUc1P /2+{bMzdX');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'al_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
