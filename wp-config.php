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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_troyweb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',          ')FlUYKB8-0|tq1GTY-/iQwcVAD{CFW^l3`mT{}&@t($<}y~Ux)N`$!8ASy[HDk0U' );
define( 'SECURE_AUTH_KEY',   'c+ToU.b@QIf3,x[6jli(5N^$)F1%|6N) TCI2W0Q%#W;@msn3ZtiVNr5zaFbmrdW' );
define( 'LOGGED_IN_KEY',     '?@2*.jr:~Qb*4r[ yeNAeNCv=$wMp)OQ#y9KsxKbc>%+5FjYcN~s7d2;$ZYm4K.k' );
define( 'NONCE_KEY',         'nGvj8yLS>cbUqqq_Pl4LjmL5O6<&L!JR#:|_F >UqDT(Fof]y6J-Q;]CxKC f(^S' );
define( 'AUTH_SALT',         ' }4aY6S+&LM%x=M*^[H1w%y]`TS_aW6hCh;cC{JRPR jm8qw%+xA+pLXvxN2k~ C' );
define( 'SECURE_AUTH_SALT',  'ga=s;@UEAybz71jB~%|Jvz!hM^64EO^K/>uYVV{cKXB6wC0qT!9atGO=+~r_&Qu[' );
define( 'LOGGED_IN_SALT',    '+ J`(W)ngX<0jXg|JD9Ost@aO y3z>)?;8ds0lMCQ0+a?ql}TW;4u45[`KTP;L9c' );
define( 'NONCE_SALT',        'qxMaLNo ]tB(.,+wjj1ONJmNwVEjX()nHbCq}E5}9,^vNFk6o#o1KQaZ7]>j$5)P' );
define( 'WP_CACHE_KEY_SALT', 'As:2ae[fSw)3{.STnQ-i-c+Ty+bp#)0!yp?<a@FK3O6@M vSd`b`@R.C7bkqLA6b' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
