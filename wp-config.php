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
define( 'DB_NAME', 'jeevananthamfl.github.io' );

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
define( 'AUTH_KEY',         'H5;DA2,uEVGofuIK=*gq#(xKj@|hDm=1]uUq}/WKOlaenejLCqM4+kwTNjd4x@Ro' );
define( 'SECURE_AUTH_KEY',  '/_-v[?P2]b+B:gvBr-fK)d6v#Fqfvn`9rJInY%vt_XXZz yQ<[Rg(<tjX+5r?n7M' );
define( 'LOGGED_IN_KEY',    'GofV*n$5O81%L`xg&F,h+w/*D!xZ9Ih2`ARmmOCIPs|,~4jl(<U:^!nR4ulm.#/(' );
define( 'NONCE_KEY',        '%k4]|?,mP$as3wud<^7v?fh[1LJHj2]e{k[80IbAse4il$O@<^O`0t<qsZJ?;G9F' );
define( 'AUTH_SALT',        't41r58FMaBG];iM?g7gz-)X<p)UnL_zTr*Q/lxjsZOc/+BwD2 YnP4x5)?E ?AnC' );
define( 'SECURE_AUTH_SALT', '3:ZmRNoHz|+.*P6!BNii.<F>HCQSPmaR6Yug8 l[I=!mTq[n/Iw;s,tOof/+(x5M' );
define( 'LOGGED_IN_SALT',   '+s>z0C)$?3CvdJ_@p,zOIMbHE4d`Ku@]>|##/gM>oG-ATv[-+V1vQUWuSJtP/0lq' );
define( 'NONCE_SALT',       'MoXQCS&1Mz<UzG}t`Nux8(c]G{Rz-#QjG$Ki0*lISF<a4mY^aOexo,WcL0Y?Ndm)' );

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
