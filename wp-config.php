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
define( 'DB_NAME', 'Comrade' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'R|2A~23{Q0Au,6FY*mP^PY)GENWk.#_%E_|+$7!@kE4;^:`X-;(4Uq#i=,EMh1[Z' );
define( 'SECURE_AUTH_KEY',  '9uNMdi},lbUv6V5!jtsQ0/&kJy+&af,j+f&6SExs__ON#$$]5FaOOzRw+ytbBlQ5' );
define( 'LOGGED_IN_KEY',    'f&~t~ZvsG-UP)4^,.d|V2hzFJ{L<4<Rh3YUZVW~44T^* >s;uH5,`_W{&I#|jR}o' );
define( 'NONCE_KEY',        '<4NlO1i~FCCFlB,)cl3J]N~)o3mRtmfqNI(0un3$CGHdf{*[:Dv<B>;J?dz/y%JU' );
define( 'AUTH_SALT',        'n]lu`#WW|7Z,TzsT-J[m:]-S1_ 9h 9H4;37V!FIso^=-leuV{ubN#=sFRE07{u ' );
define( 'SECURE_AUTH_SALT', 'C[A}ehJ7RP|,B0xp/X#Ovh4k:j9jBni-Uh,7Wt3@940uZTA^X?Um}n*D=p(w%sFp' );
define( 'LOGGED_IN_SALT',   'z%rNO7Zg@&K]+}mi$ycDoRA% Who5^MR.B|Z3K*IOi{/;~11.PHT]w|e@36gZbzf' );
define( 'NONCE_SALT',       'qj6k6rz?H|hCAC-MIGG)e7M/_p$fl0B2oaMP?#: 1 *ekXa+L{}5 O]O@x+ckTS~' );

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
