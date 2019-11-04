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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '94adf12562ddf705fac955408231511f6896509f13236e78' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tgo_r8iCi[PPj~g=qWz^r#}U$mA/=t4V|bD]ro,W}j@!W-Ab9=mdv>VN&DaDEqn4' );
define( 'SECURE_AUTH_KEY',  'Z-U9~sY3^~h;EcOGBP~@0sO+ZVN2@S0]uHg[:einrq1B0yEq2Ion3KOeaKdH4T6U' );
define( 'LOGGED_IN_KEY',    'xi:]/,3xr60FoldXOhz.-/ia5Cdvi.1lS.rN?d969Jk$?#Xy!=nz<vMY9$~WH0<#' );
define( 'NONCE_KEY',        'iU&8$2` #|%9QjN9C2zeS=CVnQ`Q}!uhdLP=.WT-HqoL0Aqi^Kut_0N2S(n$.A6F' );
define( 'AUTH_SALT',        'owkySiu31drfv>=#U!1YOoitf)3{ ,V]S!9NR2koS2]b[gMPqOE~D<P4*:2wNG/]' );
define( 'SECURE_AUTH_SALT', '[z)6e?Mf7>yz6Y64 2]hS#5qxtZM!,_7E/B>M/9Ot-c`6V>`.N}+f}<l*!+oXW$x' );
define( 'LOGGED_IN_SALT',   '4z40McVHCQRzez,^GUJ#D_jQ5=EAX,oMVGn,% j#R7!0N]ZxlbwQ,Ugrx;FgZP2{' );
define( 'NONCE_SALT',       ']IbPZ|D;ZOM`ZF7zO{l-1N^hx%IdAQ_CY#Keq%DY-{ xY_x W|iQl?xEhL[.tokA' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
