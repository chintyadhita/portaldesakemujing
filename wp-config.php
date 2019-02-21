<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kemujing');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qBv]=8.l#g#%i`Rbr3z?NmUpcYD^Pl1=mLC,&WyNRD[F-^ ^bMQ=h:TEVs2+k]B?');
define('SECURE_AUTH_KEY',  '&S@sOz$kZSpNL,W|zHUsD7ejN`U%Vb)p<QGA{:B_4J5e?H4)g8x$iELL-QmV:!k=');
define('LOGGED_IN_KEY',    'jW#oFNoI~Qgf4V%Y1Rc@abk% RZ>E&sQ*FD3VGUfG]PyfkF>>U@ok,[:h-dbl5G>');
define('NONCE_KEY',        '-2bbtwg#=,5zy:8a(qL`yX8Niq=Jw?o|H*qrZn=SdzIM=&3JfwFK<2Tc0Y<$2V;A');
define('AUTH_SALT',        ':wtXJhJY&psy/<Pk3s17+VA#o*5:NEOjUNGDa$v+}2<;):k8X%>astN]%SQ?Qna5');
define('SECURE_AUTH_SALT', ',xA4K>u`%8 m%OyaNCx9zIF=#()y(>?x|f`R.5L%.lrBWW+5zb_iR^K;LEI`MQjr');
define('LOGGED_IN_SALT',   'xy1l0=eXdeNva0SXtJ1nx4nlopOk!q6uY7m&lcs#9an!V5{?1x|{+/X^fU;CbAEz');
define('NONCE_SALT',       '}qD:F|B/R#Wf#=WPtp|e3*CW0<>72AC)[nc5>U iCHwu|-5 @|bN!EGZ&5k8@.[c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
