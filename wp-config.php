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
define( 'DB_NAME', 'dnncoolingsystems_db' );

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
define( 'AUTH_KEY',         '-Qfx#lJyGE0:/b@Rx8rlM30FkMlv.X>NDm917rSROEGpk$#^.baFI=~{!|(jLi6<' );
define( 'SECURE_AUTH_KEY',  'f|iRt82v4Nl-&9:^:p?mK,U&VH35 DpC9%rJ,sb@{T`F/$&|{{J4*0J5)9~6%?OY' );
define( 'LOGGED_IN_KEY',    '5AET@uRgc#Hq-OQn][]4)_gm%e0hPr`~BwvcurTbtX{kgeE^4@j!#bD%CV&;H$>s' );
define( 'NONCE_KEY',        '4> :V=HY#:X3lGx3R9#yT n dqb.A<ccn U*<Y.*S)CY#$t8SG/iqln}okx7qYOJ' );
define( 'AUTH_SALT',        '!*DWFn5lF)IC9PG6p,]G/a0EJzY (wDJ9?nK7!=l?[_i|; _}NtNa7<[;]c`I%cB' );
define( 'SECURE_AUTH_SALT', 'Sy,DT[gKY&aU2:!G(vYUd#E(n_EP236;=[^U+GY hVSb=r&^,}J 1~iN!WHHaqJx' );
define( 'LOGGED_IN_SALT',   'lY :7+?+rKVMYUO|?EUN5t}lGUzK~vW>9$)-V4;s!DtE%v#1@Mto2_lAa~-B;rBa' );
define( 'NONCE_SALT',       'imJ+m#H*INh:S<O5yELH,wR+,)Mj#glv_6]{%#k}+?L8{d?eZBte]!}w,PAr-l1|' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
