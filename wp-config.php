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
define('DB_NAME', 'fb7903js_ergo');

/** Имя пользователя MySQL */
define('DB_USER', 'fb7903js_ergo');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'new_ergon');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');
define('FS_METHOD', 'direct');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}Q}xSS([eb.amPM<wLZS#j8UbaN#GfJN?S6(T=KH68qNo{Uk;`voNiX(E:6r+2+=');
define('SECURE_AUTH_KEY',  ']#H%):qPipG9Yg5h]ca>iae[-pw}u}=kZs9nJKfl*5V]+a)tYh}*ch?nc{|ap;FS');
define('LOGGED_IN_KEY',    'c:]s-erzlE]hFi=+afV{XW=[%{|hZW51RSbrkW)rK#/4[QSph^@1m786ub;pT-OU');
define('NONCE_KEY',        'n#q)&>1K#Ie>7ac@n.Q85]~oq+Hd,?-)ZG@=.z)LBC-&~w8,1pU-Dts +*f*a,E(');
define('AUTH_SALT',        'XG48mr}3[{P=Vr1/VRI#l!LUgHhkg<%*WpcM+-,{uLOsh4[W^||6C5p-t_-&uSy0');
define('SECURE_AUTH_SALT', 'F-&(`1*tkQJcm6V/G,mTaxn:Y{ XKUMbwMDi]Pwv+ Cbh_8deo{nUC:#&Sns0ZJu');
define('LOGGED_IN_SALT',   '=dXPjMgIH Vn@WW@hr+;jHh5^4ju>j,PtXiq=4N^f`?oAP+(m/fu7ezZ/&uBFl_<');
define('NONCE_SALT',       ']@]M[8T*>k^-jM0vgPCnGHaeN/k7Fn$#Lb6Pwj]a,%`C9?!obp*_Z+T(Uv25mu4%');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'er_';

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
