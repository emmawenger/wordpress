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
if (file_exists( ($config = dirname( __FILE__ ).'/local-config.php')) ) {
	require_once($config);
} else {
	define('DB_NAME', 'Wordpress');

	/** MySQL database username */
	define('DB_USER', 'root');

	/** MySQL database password */
	define('DB_PASSWORD', 'root');

	/** MySQL hostname */
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
 define('AUTH_KEY',         '-wEv,}#Q#R0g8Fd]Ih-nh$||ief 7$`NRm,5R-6:$S>,_e|vCv(}2H!z,dPBe~<7');
 define('SECURE_AUTH_KEY',  'Fm%]t`rEMaxwV3KBI@0Kk.E[iffEIuUL$zO0:LSrXW)6M:L-olTc-1FYpi)0F],`');
 define('LOGGED_IN_KEY',    'IAW-{e#R5CLQ-mb[@e+xK0/|a87;1)Fahh0.eP|/{5EZem64cDDp*u4-W<|SNpmL');
 define('NONCE_KEY',        'XPUJi1eKd*Inz],z&@~2sJt$CK[*BJ4@H<*9tnmiAT_I-+ktid5y(P0_E^5?|5{#');
 define('AUTH_SALT',        's)SMj{`NAi|21)-olQ+.`Wj ,i<2u 1#n/o-P9feLp|JbRtjuHj{]+n2 o6pE]v4');
 define('SECURE_AUTH_SALT', '0fPzAY8ea#^M^7%V u ysfkX&e<M>4r2A|opc!JLt`Ay`6:$y.6M^TOYQMQJ/(+H');
 define('LOGGED_IN_SALT',   'OOdL=*AEVL HM;rPu3Qp;%(gZ~1|ATl{K-#J@J=U6uqNDWwcjuTp`me+Jtf8s-g]');
 define('NONCE_SALT',       '.,U[NPZGwX>/<hdtO+>jWS6^;/Z{ijx!I3CN0,S<ptFqs7QLc@c|3E~?J^$}CrLU');
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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
