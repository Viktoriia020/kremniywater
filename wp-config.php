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
define('DB_NAME', 'a0612200_kremniy');

/** Имя пользователя MySQL */
define('DB_USER', 'a0612200_kremniy');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'hqyN7bOha2');

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
define('AUTH_KEY',         't~;e43h)Y>zNpSTm9&GV.&W_>S^@7,(~,z5^&p)(jBM_VCzLtcgyxmQ0>7e-p;kQ');
define('SECURE_AUTH_KEY',  'K0IpJmOG!-q06wn7[8LJ#4/kk!>TV&?r^6#ebN<PXhvjD$bH3btC6z& #K!#2fpj');
define('LOGGED_IN_KEY',    '*4glus(D+%RinCBmU!NumbWZe8&Q!&5+5k8WX{M_9 #fqFNH{5BbU=HC8URf!<@n');
define('NONCE_KEY',        '|MkV4y$KxK}%>R$uqRWOZeAC_6H@4ACpL}mfZT:s*i;kf`!;@YkFF`f41m`vkXmB');
define('AUTH_SALT',        'FfP(AtU{(4ns5n1&g<CU_+|2.80]%GZ~QVz0XXGXKiRGzW3;(/=&J9zV-({NPBU@');
define('SECURE_AUTH_SALT', 'cb{MRr@ClEw+wgu*}|UzmPoQc_~;Jqca1c.V3KlC_q%N#|/#TH8%W=nq__qC+0x{');
define('LOGGED_IN_SALT',   'pYp[78$,#FN|0;.9B$Cu_s{I/wt`Z}U~M^):ps<Ktmfy:Zy>Xn12JZO !Qk/)kHL');
define('NONCE_SALT',       '()[EAb_$<2y;)xN|C9It=tCh1G>xHl:EM|`>+iINpv_zRD(?t}Rm5stFvauA &nD');

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
