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
define( 'DB_NAME', 'avtomaster_wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '5?Xz5kN/W1N-KXC]DCrmjObwmXMt]>r$5W$ 3F?|nR1&cuJEm*PX:8uQX_]C%&hw' );
define( 'SECURE_AUTH_KEY',  'iC|4W%?^utoX7<eTe8ckR pRcQSvvz,4u8dWqYWJKv4#}8f?Jhsn8aVmms3{S:pJ' );
define( 'LOGGED_IN_KEY',    'Et+*N.C*u4J>.`2b-j(M(i.5VSA9eiB@u2dB>3xrxsQ>!]bKKvI78r?>+0;]N|G&' );
define( 'NONCE_KEY',        '^x#0K#Gl##d6-5VJDMJ^734?VHL{:iJ:4U5ZtarbIYnA!c_Ajg`e#e#GkjP<RQGp' );
define( 'AUTH_SALT',        '4YdO+]ZKy0vI2+IK/AR4riun|2A1EWx/CYjyDvz=9?7z{`pHd}p7&ML@$Xr0RjMj' );
define( 'SECURE_AUTH_SALT', 'N[?,X^%N9-/c*L4[L7~A]j$vCA6[jbW~/OxUg4S2cEJa*F2*:pteJ3ocLjG*fyz2' );
define( 'LOGGED_IN_SALT',   '0Aq? .jJ=,KadN<:Ga-=t_/dLvegBk>NzgyU!#o3|:sC!<-J}K4/<$`)GjJPRz%i' );
define( 'NONCE_SALT',       ',9LP!C0L?1.G^QR}H>9=2cWb}Bmh5^ASP%)98<a/Tw<d}N2|Zer9ttj,i=46NbX=' );

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
