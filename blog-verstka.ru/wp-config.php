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
define('DB_NAME', 'blog');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '3:NzH;7-QiQD:2VP|bQ3nKMSjW;bn-d}JhPS.pG!_Wj5nBmk{=3&0^xgs(HYI_[;');
define('SECURE_AUTH_KEY',  'HcVR+MXlcj/q4=]5-=L%?)}F7m+S O2e10z*f&?qE[]LDdtVKOuwpLh,qH}#o*b8');
define('LOGGED_IN_KEY',    'b~bx-c8w<EoXM~)pQl8Js-nB}NokIYl2GG{u$7ZLRM=82wado;@=6K##Xc2Pqk@P');
define('NONCE_KEY',        'lroCz%oXn0=`Dsa76%Q}N,d_r/k84zf;nkWd8:|It,;%eG )RB|1f-9Q,nt;d5`H');
define('AUTH_SALT',        '(bo,%9+`TKa~5w4G&_6[lGr|7F3{`*oJW1i!F*=cR|z2Q;w~U?0$B4{xgk&{4gvV');
define('SECURE_AUTH_SALT', 'ls$3gu8u.h[i(TopGa4c5wpC~<MT/bF=Ls+g&+&ES8c|!G]U?*fn)|lp*]*z|$|Q');
define('LOGGED_IN_SALT',   'SAAu;Ai a{Mq=Xb~,3YMzx~F8 `cPio5|#IU#cdbKnI(kP|v@7s*RsTr|B/5/_X]');
define('NONCE_SALT',       'g^tV/#0rj<a50>:6zO<U`xNHArsCF%_ ;}um+K2||=~+C&7H$N4`)t6Oa90_r~(%');

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
