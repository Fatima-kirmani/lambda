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
define( 'DB_NAME', 'lambda' );

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
define( 'AUTH_KEY',         'nbwJpYEl,7#ND ~&Ems,T:G:atP{tp<6$n<f/q`Hk6i]M,{D$pyK!@e%Nm!-]}2&' );
define( 'SECURE_AUTH_KEY',  '5Lvcg5P-ZA9sou{&mZlbue!()n542%5+}m>3?~u~U.i5 I|7rg2kn<Bcdx;c1EOq' );
define( 'LOGGED_IN_KEY',    'z5g)2`le-.^VYj|3|HZ[<]GKeuw 3D26_>P~xWv.2E:UAA=v7Drtc;*m4<WO1_f5' );
define( 'NONCE_KEY',        '5M]&_`z60Z%.bA_O[A~3zV](KsSk<5S_fSH^q]?JYlye#J@&Kia##24K!LVEMBG#' );
define( 'AUTH_SALT',        'g>.Z.0z^d~Hr7VY~9_tO-x2D_M|lR,VF<-Waj5U9|fg*nE(&]LAWG=T>ANA, `zZ' );
define( 'SECURE_AUTH_SALT', 'eV(*GDx-U%hSRu:jTO<((T%I4^KM>f_65RD>2(|,Oi6~dr`-;]CUcB9RTV~*89t>' );
define( 'LOGGED_IN_SALT',   'nk=R}.$wTsO9K(oB]UbL?]9rv6tz66*hNbFbFm2I|pnW8r]u7|@zJV#ZHA_@: SC' );
define( 'NONCE_SALT',       'G0(_*4(/8)z~#y}k>9M![!#PbdzzT|uF;f?S6+{XK7@,1NuCktb;lAj;oUC~)dyj' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fz_';

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
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);