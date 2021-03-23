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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'siraad' );

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0;_[NdqS>=WwNYbdaAAxRV:#!3_>~9UBtxlHb:Db5T<U,jiJ0 59!*/~.R1-j^m$' );
define( 'SECURE_AUTH_KEY',  '.8-maa&s(UF~2.m,(d?HQ)GTxt-#d%6K0tttDLgn>)U#*EWuZ%!gHC:[o_a1@`3:' );
define( 'LOGGED_IN_KEY',    '.r[v`^>N?:sCvY+doH!=p8X)D&MF,QA|-Jq%[&9iX+kyJWU>!1bQg..5Y-} IJ$J' );
define( 'NONCE_KEY',        'gs!^1Zl1B.CH~R>)kb:T/YF#:>-0?bl2zb.CUG-R!I*1{[qVi(D+D[xuAyRqH#u]' );
define( 'AUTH_SALT',        'Tz11sNc:UhOzu25i1&P4tD=o-uxc^wZhDv0bX{KwtWuc%qfG|lQAe%Tk3F:m]HKJ' );
define( 'SECURE_AUTH_SALT', '&Vct-}7@o(dhh>Psgq{KExL6[`%F`xi|m,j[f.)#^-.hR,Eh7y)txF,[rR[WKx_R' );
define( 'LOGGED_IN_SALT',   'Gz0tfe~YgeE<_B[1R5u5KF=&1!uA5M1%vUXYEn]v!z^dAn:2xLje_j4/HAC!D>*N' );
define( 'NONCE_SALT',       'VrEk@5h$h/SFANn3/7Yw?%*(|j:ED(@7@lks`ww#:*wP<8akiR_ZGee&/-fxKvEs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sr_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
