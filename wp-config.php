<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'deraa' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Z95AuF~CXU`]lv%$zg&?Cjz#:sU|TYA!Id7*;+Gu:&w3S{aNp.!S=o!IArA3A28O' );
define( 'SECURE_AUTH_KEY',  '8Ua%SD`&1%9KiI+GQU6U N](Qn:_v#V_+%f)6I1o22kT9*wtSx$l,.@,{PLj-Lr;' );
define( 'LOGGED_IN_KEY',    '*}132{eiD/^2 4{bq.LyFRC.yGe.BviS~x4<ZHIYyH!EcBB-9v#V1xL@`t:ZP/MT' );
define( 'NONCE_KEY',        'H]fB-HT&$`c}0pSsfJEG[!K(h3iGYgv<(n.JQi4!+(kU,zm,WmvmU*2KcD]/Nzio' );
define( 'AUTH_SALT',        'Bx6v/V*jjh1+/fQ.TxI9BeaU+E|p+*==tuF)94P5E5bvSlUAg THwi,q26[qbi;s' );
define( 'SECURE_AUTH_SALT', 'nL)/I2Jkm.!gC1%BY}s2Br{U{LBrR2l5j@09@o0VK2CgUOJ85#FJnC72w?BaG[UN' );
define( 'LOGGED_IN_SALT',   '<WtAi^13eUQJEC6XUaxLD2o~_Z!ja{JBs`C3cjJk/IJlY<C7,2lx{zo4Q~?CF/v@' );
define( 'NONCE_SALT',       'jf:d{D<P6m^xE}HQT+,{dP/.cYrpY$v3AzI`Ib#op3)wv=OA9Kry}<u+SB(1&NY#' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
