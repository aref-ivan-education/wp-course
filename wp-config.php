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
define( 'DB_NAME', 'wp-aris' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'aris' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Terrika2008' );

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
define( 'AUTH_KEY',         'v{L[qbfojJm)J)_33i2H)N)j;>Q:eH1M5R~w:7Lw-6?9!sg>u<a5g*4tqrCYWplt' );
define( 'SECURE_AUTH_KEY',  'MEQ|vFl4w KZ;8igkK7cF6=[6R|JTuvRp|LCw%Zz3p(a}?1VY[na9r%0=rPBXNAs' );
define( 'LOGGED_IN_KEY',    'fd5+O5x~)$CU>}`GE.~}E{0hy7,n>F7Lp})o<NqZoN`[]#S@ccyC)k_b#P|v LRQ' );
define( 'NONCE_KEY',        'IeJi @BkGpIHU*.>RG9/6/N.i~Q(`g1LnfW7Rs9=9x2ML?^o$NsfEHum0C34,.au' );
define( 'AUTH_SALT',        'd]#p|jnY=y!<yk7`ZDC&`ar/KHoGudBMQ[zUmY>Yp*BR!}12]aYFVwQlI%i9vAGO' );
define( 'SECURE_AUTH_SALT', '&CJUt%1^Opodh3>IX0|G~W@p-PhBc-w/jZE6pySGr53OIs_zo0Hfwb8>Mg__S8jb' );
define( 'LOGGED_IN_SALT',   '<$52eexnnWXJ}C;YHi(EE,8!P<5aiaTS5&SqS3pD#filx[Q`^q_;v,j@#.Kd[r|r' );
define( 'NONCE_SALT',       'saCDux(a!ll0c[gVw*EqOL[^k>:-#VFn<vk/42{fK*n]Oq1c`Y_z,NuRtI1;0<MX' );

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
