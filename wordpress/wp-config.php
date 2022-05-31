<?php

// BEGIN iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactivez l’éditeur de code - iThemes Security > Réglages > Ajustements WordPress > Éditeur de code
// END iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne

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
define( 'DB_NAME', 'chalet_ovh' );

/** Database username */
define( 'DB_USER', 'simoncestmoiOVH' );

/** Database password */
define( 'DB_PASSWORD', 'Lamotodu26.' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '&)S< Tx9{(::a[F)Ym,;Pl)/Q59qI#3m|wO=Hyl:RB/biQv14ZLbS[f09d}KgV?3');
define('SECURE_AUTH_KEY',  'J>{NziFCm6?`})=Rx5tD&FJYj2kx/TK+D^QGAGOK,ij3|d/m~P%HOm/|tV7JwotW');
define('LOGGED_IN_KEY',    'eJ5sgy{5$X`0?zJ9Tj>$|LDdEPDu-$U&^5;>PI>[JTWSW(aeL9[|prq9X9/{O8[G');
define('NONCE_KEY',        'wJ5gU@;?2+d+T<Bi4W0e/D&`a-3 v-,mLyZF|4E4-~8J]8s|!Igok;xk`]oJ|d46');
define('AUTH_SALT',        '8TINiYwb<Yaut+`G|QVr>33ignWi&F!sYqat>~usl@g|O8Fu]wZMe4D+j1a]}qo{');
define('SECURE_AUTH_SALT', 'P b+0:L`ib+&}~7;~1vzL%0[i83r-%ESs.m$tzlR ,)=|HG&.X}//4ZFJQ-y20TX');
define('LOGGED_IN_SALT',   '9<@![?f1aU`Rq4MrW^=nvG-%`E[lydB~D!x-(;mF|`nvR^5r7/::bp2jc9kw-;|w');
define('NONCE_SALT',       '+%/ossfY+T4{lv^sa SQ=|5a7ruzY,-8-X(xE[J-+hMgXo2V5>S(de-FROd>|L7`');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'PRefOVHWordpress';

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

/* define('WP_ALLOW_MULTISITE', true); */
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
