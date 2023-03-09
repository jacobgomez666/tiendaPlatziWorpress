<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'platzigift' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '77-i/KTa)f<v0[!Qn `EbL}P0P*+) giA$V0(m%5lV@$~bfuNl7o{T5Q?c(RKJtJ');
	define('SECURE_AUTH_KEY',  '/^-9V$$][_xTzce8On*TOogyg5+cQT&//mjo#86[x5u`DzZwC+-cZ#UPy*K p%s9');
	define('LOGGED_IN_KEY',    'EbUynYzf(GgBN2Q){<iag*zS|x-Cx3|,|3|7e,n8n0kOBqTZ=!$)#b}DhQ&EL{25');
	define('NONCE_KEY',        'GRgtlyh`-49fDs1yrfbH$8u,[+|Y*:+/{ ~VGzl4/f^Disn_wv2Wk-}|(x,%y6cS');
	define('AUTH_SALT',        'S~/D1K9uqY]25=& ap/<8}@=>cACos.@-IdYA24W=>[O/RGX{8E_`&yoo7,&,Y~@');
	define('SECURE_AUTH_SALT', 'TkV_0Z,Z|eiO7vC/UaVy~YjOM15gDN>(aaT/c+(HDugXm`|?|.}N?SGH+iIN% (k');
	define('LOGGED_IN_SALT',   'k=@a1W%c_e_ =G1Ekhy|4y3xa~+yXFxlO6TY`_b`P6qq/|Jb^!>;()H t#VT4*W]');
	define('NONCE_SALT',       '4.,;]Ts`UOyOLgZC?C<u8|dYaBa=!9.?o5<N0G(+XX|EH^PPb0=lJGU[)a*td+Qs');
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
