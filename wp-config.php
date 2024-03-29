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
define( 'DB_NAME', 'frederic' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '*X0LDbYWp@nRnN>n/Kw%LP/MaAT,z=[d,)(:AQNmR@^`93bg1JJ>*ft04^=qHV_$' );
define( 'SECURE_AUTH_KEY',  'rnB%+Bge)bbKhiC?m2ajlxx*uB Ee$FqzLS[k4[1~/?<=[8D?8dkm7@fTLA@]2x*' );
define( 'LOGGED_IN_KEY',    '8!@-G)LQ0HCIQ1x:WiEZH j07?fDlzsozY(M_=0dv^>l%B3#gk`IgN1Q_j/U`}%1' );
define( 'NONCE_KEY',        '(7fsCCB4Wac`*4{g! b%^iPM+&IWOq/EJ2;nAcu`;oyBmWIMT!&Y1I|-Co|t|n2d' );
define( 'AUTH_SALT',        'kmA#%7Zl6TD{}if4&S6ih3EN)]i^K65U7<R<X6,R_keVxW5wy])o^s sHLfN,E$L' );
define( 'SECURE_AUTH_SALT', '=m*ISB~^H%*7db8abjp){cw?ek#wu/&%e_HCv~>B;v{q$ h[R_M+&Y~Qs|w=lN b' );
define( 'LOGGED_IN_SALT',   'GL(q[/rXqZ,!a>7HtTuVsj87x[K8wJ{6!8)%gi7U]&/^73R)f<Rw?]AJc)-Pq>}w' );
define( 'NONCE_SALT',       ' !f5qLABHd6l.c)v:Dq{@J`3JICFw5q7:uT>Z:8ZRDQtRgFaL|%h2?c) 8=`FGn}' );

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
