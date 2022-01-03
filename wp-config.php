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
define( 'AUTH_KEY',         'w;y=Hp:##|o;XW>;buI5P~Kd6e{[bs=8v_ycwh+}./MOkO84N.p7_K4V#4F4QUrk' );
define( 'SECURE_AUTH_KEY',  '/(iKw:$>ZXFQoDmQKqnw~:[ET(LY|;Dm1%(zRta7Gj2vE=aG`HpL%q$j$pFJu!x1' );
define( 'LOGGED_IN_KEY',    'k|.w7}&lesMAh_l`%R%mn;5TTzSXO8gpz7WEANX&.+AH=IzejIi4a@UZ`SuX^v*p' );
define( 'NONCE_KEY',        '?&B{kVM?:`k0uBVs8pUY|wZoBdBPQwps{i+X@3bBT>81^b5Y3sISQg^_sdM4c3pX' );
define( 'AUTH_SALT',        'm_]4KAj+*auz;WR>Qw+JyowvH>D[-.N,<+I:|YVhojlWjp`g +!zdSBziWBoK.&#' );
define( 'SECURE_AUTH_SALT', 'd,F$7?imKI$W3g=7#4-w;cf$rA;!mS2TphZKqc%w`SF#XFh=0X;RA,#g&DLmf%k1' );
define( 'LOGGED_IN_SALT',   '%9u w9g8fE,mN.5]*(QFI0`Y~j5tDMQ >P<##xan1aZ^nt8vOlDbK~lJ[bT_dWX4' );
define( 'NONCE_SALT',       'O`%:YD U6[51LkWXww4$lWI(%VpqN-H;qb}o(.u8vUQSJl$_<L7*]VPt~$x:/Wq.' );

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
