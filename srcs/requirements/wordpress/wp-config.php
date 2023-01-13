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
define( 'DB_NAME', 'cool_db' );

/** Database username */
define( 'DB_USER', 'tzeck' );

/** Database password */
define( 'DB_PASSWORD', 'foo' );

/** Database hostname */
define( 'DB_HOST', 'mariadb:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'qxu;40fwEvwPNQxeE(X[ssiZDzb+G]eS/S|]M6Me#y;}%GWPJ(F`yUIHotz~jbB-' );
define( 'SECURE_AUTH_KEY',  '(Ox|*qpsa>kk!T}FG:C+Gd0?2*Y0-Lwl(klQ+i2VBuw7vTjtccm8#+Kp!ECi;(*f' );
define( 'LOGGED_IN_KEY',    'VmM|wbp4Ed5l,KoZQS%e$NG3ezkV%m^=i4.@~L$5U:&=uG_C>QOD}I$t1gi^i$t3' );
define( 'NONCE_KEY',        'Y^*YfZxmY8S^e=5N]c)0#pgaBo13EM(F[s@,+U*:41)}P6`CGXD4Q}yMbU*sG6|)' );
define( 'AUTH_SALT',        'p u}r7aCBA]! }#~{6Jxw^6RDm9kK.MzQ<On?cvyfb7`*6r1.-12B#j%/S1:Y-Wt' );
define( 'SECURE_AUTH_SALT', '|vWW2^C(0G}LMAY@_80N(<C[mTUF4}$;^=5Gv]`5xW@oEx<kueu3 {zxz!ICOg&e' );
define( 'LOGGED_IN_SALT',   'jGa CfZY+uz*%!T$3+nVZjRDRz,O7j.V7kx[UIf28uaF8NvAEfo_=uFX3hyJKX{g' );
define( 'NONCE_SALT',       ']NLW8jmtd0cUq}neR:n~5CKvdR]Ksl~G`b4p4Z@Qbd^d6F.5|x31]Q%w4rm2 1s(' );

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