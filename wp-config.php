<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'newstimes_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6R|,1,ldWqFuY~d~T+x`pF@B-.]xou{n8p}QD}z|_cGA!~auK7J@~r|@o=@Yj:b*' );
define( 'SECURE_AUTH_KEY',  '4/(O0WOYdSgzh0)#P|Z^EDNkP1-fRJ5W%3xTW.zC?v<g/04Ze)~KfCX.cc,Xu!gO' );
define( 'LOGGED_IN_KEY',    ';[<YPB^z}+gGVHb{pE0fM=ueHu[sK%;vRfww<+Q<+.{:ig(R#sAv@,o)9=!}`>YH' );
define( 'NONCE_KEY',        '{.bS0!b_-r.Rj,,Q~-0`qpxl?w&I:l9dH[?AETi;x6O|unDH.:hJKHHEAA&=0d%3' );
define( 'AUTH_SALT',        'td:~+V>(<=GDjuh(]&|--7rRp{-8q+C_&=0p1}v1+XBcIbG90P1<FIvmMfqvXRPP' );
define( 'SECURE_AUTH_SALT', '*;TUyP]Fr5:hWWFKg$rdA6*~S5&>goly-lj_QMKMcT3vqj>|jh#PX;SGkMn]4k0;' );
define( 'LOGGED_IN_SALT',   'C$Q8pbo.>EhDSg]6errabtErnuH*_{Py0oxYr(:V@bJ1HVO?n|R6C+l;|kL)6Xh ' );
define( 'NONCE_SALT',       'bZE+(v$/ch&w2~W?~wQxpdYYt_N1+Y[PbmK#Qah(~u*[Dvg]F!t~x5g/Pilmn=&#' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
