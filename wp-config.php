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
define( 'DB_NAME', 'panitchonp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'b++KvD2js}:H.d6NfAdH2u+sGZnWHa_,]907a3ET#+uF,dbH>Xy$#eRI`NIb,8_p' );
define( 'SECURE_AUTH_KEY',  ']7ZhX)V)^;PY0%_nP&Fn<{70.</5kGZ/%AS%;Rqpk-Wz(b}1s_<IZm&ho06qc@>8' );
define( 'LOGGED_IN_KEY',    '/^6PZc- 08LgaN9[t71&&3BYU7k!1j%L9&@N,%Gk:^$t(_Ju%V!QI5r<=19i$?BU' );
define( 'NONCE_KEY',        'q#O~^4#e~r)em_k4a(}=dB+AIX=;gpS-entYv=vx[ 6w-5#Zt(e>Bs+^vD*B04US' );
define( 'AUTH_SALT',        '~%]&XSqu?].#v+oM>Nc!42:!@3_o:%#ht_Ulm;mIVJ~c,5Om3FN#%!po3s}pHLQm' );
define( 'SECURE_AUTH_SALT', 'GDe(E|3k7gr;]^~>}}w0F;@}OG!@.j=cYWRf8p&?rHt%7k=>Mc!8]*Cb|SUwcLds' );
define( 'LOGGED_IN_SALT',   '&&B.E`59=~maH_60=z8FMg.`yjWFu&TPzCPZ_!4W@lW-IdI~gb5{LC*q&DWnq-`)' );
define( 'NONCE_SALT',       'I+ZJAqvQ#[[+u)?_<5dfe`2=o=E.B^r%EDKqV6 R,Pt<+oKl(C|yZT*I`_TN}Ou]' );

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
