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
define( 'DB_NAME', 'themageg_main' );
/** MySQL database username */
define( 'DB_USER', 'root' );
/** MySQL database password */
define( 'DB_PASSWORD', '' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'memory_limit', '100M' );
@ini_set( 'max_execution_time', '300' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':_,_iTj@g q^J<6}Bv;J&Y(%@:Wa+kX&Q}M<]YfjH5AH`p!QmhL}B+xmsRuR,O&U' );
define( 'SECURE_AUTH_KEY',  'J14-*5p`et0Idbn~9]yV9F3hgv IIfAc%t&a/$v!Su+GeY/Z<W,&f6E!kSnWEF=s' );
define( 'LOGGED_IN_KEY',    'rXVMN5Owoq%{}fS5/4br}gMY.U_r(A;qwlqXn7[<th_/d?aJvD e+fgFZ8K#`k[q' );
define( 'NONCE_KEY',        'o?()$V6og^!cF2LR?cH(oCPlO<}a&X8H%3p:Q#QT1If8edtua#dQ7,0(Gf_8l>c0' );
define( 'AUTH_SALT',        'ReU_7Uxtpk^8=(%6}7{hC)tS7>ptgHyW#VH+pPTX8%:-z665iQh(@cT.?R#$f/(6' );
define( 'SECURE_AUTH_SALT', '!7}j)T>am0(-Q~K>&A$j(:c2z<;!Z<rtX{sfK`0(}zVYH4t,8w~YZ=DyW{vJWx%_' );
define( 'LOGGED_IN_SALT',   '/0l@/o?!y2^oPkht~67)|qT#T*!Cv%9L5Tzkb*43_4ffbBGXWPr+O6J=~_BTqtb#' );
define( 'NONCE_SALT',       'Fvep7}LVhUT9v]wmX_fxg&}Nx1W>x6))6,eYOuZY:$Ibg(^2B.atSJ4nrAn]&I2O' );
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
