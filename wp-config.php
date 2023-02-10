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
define( 'DB_NAME', 'blannk01' );

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
define( 'AUTH_KEY',         'rOzY}Ccj$ydE37~YnX_yd#sNduEfN{2w:GIAw#`c]j>x0q&w.,2wC#,;<kAgWZ2y' );
define( 'SECURE_AUTH_KEY',  '{Or^5mpnd11;W/wq{ND*{9|E?&1tHVbCN,& ?mW0lRR#x6SqOVMEL`sdM6{tRsMr' );
define( 'LOGGED_IN_KEY',    'sLzTcQlp ho7#6}+>vG/y=Twa&s*OEu).h=+wnR:2<#4fU&%c#T<lzz]@uS]d>Lx' );
define( 'NONCE_KEY',        '%_x++0n7!*nNJq=TjJ(:>GW9pYAq/.1J2w5du7Y;qxC.-xM;32#)s;>P[sw+DM/S' );
define( 'AUTH_SALT',        'K_$lj`bdiUEmLw=#AJOk|/J$:Jp_gJw4LD6Jo,2<;A[7]zHLNb;l%j6Ao/Ai=c,Z' );
define( 'SECURE_AUTH_SALT', '7bF+mUM)a|bR3f@y1p$2dd%+okZWM=X$deD#^i =TGEIgX9&n}dyQdZ[(PRiu5W8' );
define( 'LOGGED_IN_SALT',   'm[~e2a(1Wxh?8pzBcah$I?rG[1.Zjhkn}^QPLAZI^1s5L&_x-;X,W~rr /E2qA#$' );
define( 'NONCE_SALT',       '<%zZ3F|N%.HFEDEyUl$L ]Lxk6!cK>Mq5C^~@V6V>obx0pY,#<JYICMKdz|w+ na' );

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
