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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'U6H;ld|l5#~v[5lwBy~cCy_,r~A]5wIqo<[k`X&NfiW 4UPYOmo4&[*Uw#HGE)nW' );
define( 'SECURE_AUTH_KEY',  '8#Uw<E2kGpzL#b)&~@|flDuG4E(!<pH3~$m$IXlcizWjc5cZdZyVbv+}!cokncn[' );
define( 'LOGGED_IN_KEY',    'c`R5IjJ66psRcKhV1nyw;{Y!kbnU,>|otp>U1,pd7VOAKM31#W~EyGL29,D+99eM' );
define( 'NONCE_KEY',        'd2xcPNqS>ZKaANS){K{7D%+=y-7$iz]WPV86P(&v$@:wNqCe~e,dD](<gQMLHNSe' );
define( 'AUTH_SALT',        'Mzl5:2{{p`0VM1)9:TO f?}Nf>zpJ;rKrb3;UrhSpZ^t+xYH!0<$v??n6:5^3_*N' );
define( 'SECURE_AUTH_SALT', 'nEP6mEHzG#J^ JLd^xOTBx@&7Lvl;eZ;S+p[_CQCy^pYI?KZvJ{tZNVMx.V:o.$L' );
define( 'LOGGED_IN_SALT',   'NG)@_vuVPqYQ(.yIY+q#.8e<H=!rENt@J(AZld}Q#e+ h)A+n2BQ!9=LOhx2Kk(!' );
define( 'NONCE_SALT',       '%=~,<NoCH$FH<8G<w96f+!JlHT /S71hISe(PK|l%T7 7/[zxCAUr)@^/LT9Zd W' );

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
