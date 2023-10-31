<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'e-commerc2' );

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
define( 'AUTH_KEY',         '5.b5CnU9n OFqSG-j4UoCY$[ZZ<Ff-Bp48qXXGV[_[uz6I#qp?5R7JE &NHN!o5>' );
define( 'SECURE_AUTH_KEY',  '3)A_W<_`SE)dW968l~QPB}]0mKGs!N3/=( pvD!l@e2hli{QE+#+5&r<e#jumuP!' );
define( 'LOGGED_IN_KEY',    '1$8ct~0@hc-{&qV1*_ExI#I/OHuL729!Cc}<5YhQd,Vx]rHYhzvA9t:tlY0kC?8 ' );
define( 'NONCE_KEY',        'l@4.gbDg:]OF^!hwR2)W@orrakvnYHhjC3x#p?][4[^7ddehmz&A4{1Z@?]E`_tn' );
define( 'AUTH_SALT',        ':l3a*X{!]?,ixrHQy/Kqh.QY3h7cVIQgFr%`_lbbym_{h}]VX}Qs/R6`@KTt:^AM' );
define( 'SECURE_AUTH_SALT', '/u),*^^qp1~F%x*UqgD{+z.E4Zl9f(A?wL0aC*6T~0338O2pgNj+W1G_Vm=(4]K)' );
define( 'LOGGED_IN_SALT',   '@+mL_]f%7*WH,^6/tW.o@>4;@ob)q`i}r=>pm=hF-kSJ/qyaw6dnB&FpNxd9|S`#' );
define( 'NONCE_SALT',       'YQ!7$*3rNI*D*6 v[U-6N+fF-@.j;y.No#I$D[_N[q_g(StzH?nTSa3}f%e*m,&1' );

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
