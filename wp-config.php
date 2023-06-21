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
define( 'DB_NAME', 'ulan_db' );

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
define( 'AUTH_KEY',         'qG%z{%/zUz2^7{Q#Y}m|,oN@1vgu-KWUl@G%ldl9Q]`(a)^Ev4SdrQ9gSv.E-V31' );
define( 'SECURE_AUTH_KEY',  '%2;d}WE},?CiLD8)fgdB=^]kaVZkKG%yr6064.sytWn+j*c_N5qWmBY8OnJ]Hr5S' );
define( 'LOGGED_IN_KEY',    '~.$42I 44gtu^dEQ ])b<xq{zo^w=B|eWJ)W`a+.t1z?>L294)[gGyBOy[J$0Y/^' );
define( 'NONCE_KEY',        's|abTn-5Z!)D;t/n#qt?*W7KuZYZ.PPJsfT$4&Gx1.J7*&~I#1/R&/@s$cTa l{u' );
define( 'AUTH_SALT',        'io-2/UK<.UQW_GV15cwDzhD)v3z4BHOvE/KQ7}e=hi,%^T#FUqiewY0Qh;{gpubj' );
define( 'SECURE_AUTH_SALT', 'k;3Q>>ZZek3oB;iVQpDUF]n(]1rbR*:y~q/-K:+5k|z{|)}9RIKV7;Nm>+%5.eRI' );
define( 'LOGGED_IN_SALT',   'qzoD.C/XA@G-|{90V^w RKI(IjbH]a9&C.l8V`$?U{O`bv(B7o%WTnZoRq:;<;K)' );
define( 'NONCE_SALT',       '$|9RM;2bZHjpQ[T!x;5/>&a}a&${hhj!KDyT!/opm+|s=8M|:YXRc-o44;knm]G$' );

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
