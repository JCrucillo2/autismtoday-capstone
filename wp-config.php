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
define( 'DB_NAME', 'autismtoday' );

/** Database username */
define( 'DB_USER', 'autismtoday' );

/** Database password */
define( 'DB_PASSWORD', 'jspydhK28bmiIoc' );

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
define( 'AUTH_KEY',         '-)&IN1#<qg9MGU@g@qL7;eky:Y*I4AnD)s>S~1#GcFEHg^(Lo1hmWJ9^e]b^<$A)' );
define( 'SECURE_AUTH_KEY',  '&n]6(eu{!kc=_~pb56bO!7Z#Yc:tW<P?9s7}?~6XJ0/t=@WMq/% svdl#!1H?+@b' );
define( 'LOGGED_IN_KEY',    'OZS|_:zVB{Zj1ov&{)ld<a Zy8EWrkw/E9ScH{<Zq6RcB;- <WMXtWX9]=;C*fd4' );
define( 'NONCE_KEY',        'y!T7@+u?%(pT7R.u2cq$Af?3$?aZpxWsRM+D Z,9GrO^/hR .+|!j8Y%7Lx=T^*#' );
define( 'AUTH_SALT',        'XOC|)CuIWuL@s8IU4&f^q{rgZ!=LY]Q%N2/m4o2uBpYAoWE.z86|dlJO+,,tRIF ' );
define( 'SECURE_AUTH_SALT', 'boNV3[UH~wMER:p(/3NUKol*n=u2=0Hzd34Jikujq_*~_aYAKUB1d9lA0KD#)+W6' );
define( 'LOGGED_IN_SALT',   ',2(tq5/>vwiy~<C;|MA:]u>i0RNjXm[R!D^s!zRzAg*<P]GT?Sg(`if+KVj]#U;.' );
define( 'NONCE_SALT',       'HF]Tu<EABJ*5Gt5EJi8?g7F-1fKhYd^8zi=y6L#1XWgWXf.irW8#ylwzD?bn=_wH' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'autismt_';

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
