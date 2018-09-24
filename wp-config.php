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
define('DB_NAME', 'cn65190_5');

/** Имя пользователя MySQL */
define('DB_USER', 'cn65190_5');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'AZbbb8K5');

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
define('AUTH_KEY',         'c9Ze@t&?ELMPo]>T8mg[]sZM,%q@(Z{|V&y`^<hlQDs4r(lS}Bx@+?aw?7d9izM5');
define('SECURE_AUTH_KEY',  'oLux&^qQk>rxKLlo|.fBH9&[3j?(t.K6jj#Q9&6{[;Fhz):}DCX1VR8o]{;Gc+fv');
define('LOGGED_IN_KEY',    'ny>k?RBFVo_xJSqWH1@[#w<gQ#a.UR4JS{U>>{ 8`>O/-G4)w8<TwCUiAI9?&7Q6');
define('NONCE_KEY',        'w&$FJW85&z?E7;f-Qx$GkNV;miav{4z!+;L%EWg1w|H@({M-U@8YZJht^v?Hdp~p');
define('AUTH_SALT',        '%p!R~UIrjaM&}FM]h.FQfoz(](31Z!Fx:4nX7Ol*<W}/2k;ai1!;v59Om}?nAq8w');
define('SECURE_AUTH_SALT', 'f~uy3ueo~R0vM{&Wg9yHs2~a&TX@Xhz&5P6Wq*}p.;{{e$O~{m->_sV6BNG]?*T9');
define('LOGGED_IN_SALT',   ']S#8QK[9/KS[r(q9L][52-Vx+1nz?w8ha)P$Gn>R_oc_u1dnd u%GaW!ElcmF2%0');
define('NONCE_SALT',       'CvNmv:}1i9fo?[1C1]LDffc{A4+]qXK2<d&T8@oXcibA+:};xumN=mVnT<{tp@D;');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
