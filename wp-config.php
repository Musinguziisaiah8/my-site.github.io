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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define('WP_ALLOW_REPAIR', true);
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
define( 'AUTH_KEY',         '+`rUYi6aWrmig`+gz5+a?Rzcs?_)uT5q(R{Ko,~1B`g,Bcz`;cN&99R&t[2Rg&ms' );
define( 'SECURE_AUTH_KEY',  '!]/15+Fb3nBLW=Hy:t,0.5_Nnd40zhIp`h,K,pQ~x/=w%1RTX&>}yWFmN22`>ZFW' );
define( 'LOGGED_IN_KEY',    '=S1o9|4r<gm^`ca]gdh{$DUl{y^%/Xe7?5mpp)0v$3R7:}n,c:K@LaoG]AjpAYC:' );
define( 'NONCE_KEY',        'nd>WR)^0u,yt)m`63)AQOC0IB*+bB>~}},+Dp78`xDhj1OEjs@DC6k~hc>TE;c,X' );
define( 'AUTH_SALT',        'M5`A~|SK**WbM{23K(K.;IS5Yow4,n1eNT6l*jt5F(MTX:=)p&7kPIg_Z4.`%]Aq' );
define( 'SECURE_AUTH_SALT', 'G5zl6i>9,Yi+/s`1Z2QVm1`$^vN/3DP@}no{S;E!Z0jV--cyKuQ9-Gc>T^ew0-yX' );
define( 'LOGGED_IN_SALT',   '^hz-j F)z){w]l]==<]/z>br6PHX@2fjR;Sz>m V~vjka2waH8?tF9zbH[qc=a)q' );
define( 'NONCE_SALT',       'Fd&AGnA&vzB7vEjl7=#^[D:58F.}5Z;Cw-9CY%s)S0^6?-IFRX9iP(SeI+A<K 34' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define( 'JETPACK_DEV_DEBUG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
