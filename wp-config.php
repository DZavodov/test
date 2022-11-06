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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '=OQ~GKO2;[,1qM_$)c;aMm#P?D|2OP);gm(X9(kO6*~lDc>rZ(+V%wC8#)Avxpsy' );
define( 'SECURE_AUTH_KEY',  '`aH/hJ4;*>Ky,M!.e+`Pk%H~ oNMJ.8K2@T(+tj`d;o2r *f~3#BE?z`/GT8ioAP' );
define( 'LOGGED_IN_KEY',    'B lcMus[KH[Br0>iCxg0rWr dF_`Fg#g9FkQeaFu?d,v4pEvpfGxnP-bYCAcpk(3' );
define( 'NONCE_KEY',        'SrxB_.Ad{lWF5^m:0#J OzbH>ck7T-49wmN|my4 WUc)iu98YUT>)5=r1<5Y;h/_' );
define( 'AUTH_SALT',        'Xa1U|b/q=E=px~-{*8c3DLDxd)Yo#4EC78#og%UB<Ad#=@ge_,tX3]5-fR?pgAaI' );
define( 'SECURE_AUTH_SALT', '4l[LUKqHXU;jFHvuCUm5bl|EbCOPvo:Rx-T?}lR/r!4}VoJ88$7$A4TC$IWLf^,O' );
define( 'LOGGED_IN_SALT',   'Y{!f-qkS?g2m.]xjpa&$CrT h) L>ctX;zJm]+T;F=aGaFw|w(yx{Gp9A&220mg,' );
define( 'NONCE_SALT',       'RU[d@Jxqb4f(!o,xZ:YToFww+w>R&F~Mv{+>vXa~o|}C;&33WN2=2|MKjVnum>G^' );

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
