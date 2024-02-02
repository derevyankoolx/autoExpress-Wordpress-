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
define( 'DB_NAME', 'auto_bd' );

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
define( 'AUTH_KEY',         '86o<uaQz+W;M EshRgQ)(ai!i9MeVhpoaa~:;Y@k+HMSXny~Qf4x`wadV$ISiG.T' );
define( 'SECURE_AUTH_KEY',  '++j<IjRq.3L@&A Gg7H]Cp6dS+2]e,P*EM2vKUf!<^4Es:~1NZ]T4[RdFc$B5kY~' );
define( 'LOGGED_IN_KEY',    '#sUfpwz[}Vua0X]<9?/eXY:xfdnjuoo<rt%TAYMsj[g_M*gY;/swfY/1iNDxb9Th' );
define( 'NONCE_KEY',        'mWK+(i{.u[J^t7#w,E/C7qXm&foi/WmQlzIgGxobux(gky*_&S ^Uei{n]k3xA(a' );
define( 'AUTH_SALT',        'V>YS[i~(^I_iWY[%4_J)AQIOSA}ygRoH2k.T7?e6=,k[b,lw6N@mK;tFFl.g)*Uv' );
define( 'SECURE_AUTH_SALT', 'L0us8*Ien : wn-~DI_<#bZ8o)|{-eJ+VV{c6]@mAW)_{Nwdww^H[VwI4=.0vgWy' );
define( 'LOGGED_IN_SALT',   'F_FoH:i-hdSCjPZ9^2`<|{Z*XyzJI=Cm4b`Yj]XDW;}{Yf/9nopAeDcwm;~hkgcZ' );
define( 'NONCE_SALT',       '0d7B(?[ihq #F:C@tk)wZ@`1AELF1:3:1L&*6KrEF1rhmHqtheWT74{p~+R78yA/' );

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
