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
define( 'DB_NAME', 'thr_cs' );

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
define( 'AUTH_KEY',         'nT<!e5*wJfW[=D^.5zA}=WRl Pt}1s1nntXYDRV~[?^hlS)+)ud`/RtJgumU/#6t' );
define( 'SECURE_AUTH_KEY',  'j*&VxuF2eh]g.(A#{UN8hW<d|{p&<+cuvCmM*5x|(d(]0{I%.`eIOWYs>lc2JGV3' );
define( 'LOGGED_IN_KEY',    ')HcCx(tW`xY`6-Tv_Z~ok!8BZMI^,J^zT ohRg{o?U4)3ptO_tkE(LSh|TTB[pDA' );
define( 'NONCE_KEY',        '{,=#<B@rTM]Xe84@@WFLcOL:W6I@iYO*:JL:/d;mZzDDJO]`0:BT{psU$%*H ;[e' );
define( 'AUTH_SALT',        '(9)Opum$=6uky}|V0ei2:<}MijNSciEajHXHyer{*_%$eW`u1O<v{79~<sAC(=bY' );
define( 'SECURE_AUTH_SALT', 'U?-mt[D5X3[O4V9.LC~m}irto%5XK*0yFj}1RYT[mLHTyMTH6SBfn] d{#>[roD:' );
define( 'LOGGED_IN_SALT',   'mG<h(`3V+=t!v@OL-gT]K5VO3^JEK.oh6CwgtO1o;$]5wNuP;yfJvx.[_hI9J{( ' );
define( 'NONCE_SALT',       'W8x(%AQGCCoe9Qxyoh~dO2@KUeUS%b|whNjSzD/.bbhZ=<t$fM;Lb(Q)Dez+V}?W' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
