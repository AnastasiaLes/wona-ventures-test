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
define( 'DB_NAME', 'test-wona' );

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
define( 'AUTH_KEY',         'M+$2#h|V(8N.ov+F|O93]5eT#{0HtAX4Ez0 {~TD<K.PN.H$n/hHEIX5]~(:t`uL' );
define( 'SECURE_AUTH_KEY',  'D .Wz|mlDwbndWW97m&vM^Z$nTAFBRZHy;Es:zzic#z#xUBSXMtER^YU/1s<VDO5' );
define( 'LOGGED_IN_KEY',    '?(-9b/Tzir,F)E+yn++thg*1_j$ITW[HO}Cn`H:z_5RK?R=HA}Qo=Q*fhlKzV7xA' );
define( 'NONCE_KEY',        '%AJK]|i$F,|ULdT<9[A{8Liua~e8F#nm(mS>TQYaDp#|ls`wJ.20H*5>_K{dq}kF' );
define( 'AUTH_SALT',        'q3AWW5| ^N7dMJ})h aY1F7z&CsJ^TT:NBU8W[Gg1TX{u$ON2gy*L@M}+/8X9x?[' );
define( 'SECURE_AUTH_SALT', '0tsSw#8IwgQ-$iV$*;Ox@i(b:(>a.8B_}P.6*lf988a&x ;-9}?{uix^H0bAtaa6' );
define( 'LOGGED_IN_SALT',   'cl2qlX%k`Zv+QNQEndS0cif!r-*:N(XfcjGDX!3NJR2Ak~$dW7#M*meGg/5Hxvig' );
define( 'NONCE_SALT',       '~I#Y )8zBQ5Z|(ZBGM|y7}oG[8T08Mx.E.!kG0IaK^OOF4XPg&G: ,#&Bm7@2`0.' );

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
