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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'laukbersatu' );

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
define( 'AUTH_KEY',         'VYr;DbtT >5Y@O#O49f2uY<>)=Ek`l3O+QqB]|-8+mR/4qdHz;]c;-tDx#Wj)4NO' );
define( 'SECURE_AUTH_KEY',  '?6:ANi;y|,@]|:am6HE#<;P[vFQo3-X}iW 8f*.nVx&4QRe(FS)kW$^Ew pb0WIs' );
define( 'LOGGED_IN_KEY',    '[e-z96]5<L)=!ePZ`yyO*tsol)]_e8:[aU ,)5VaQ*ReayGVK?/JH5];-j-k{61 ' );
define( 'NONCE_KEY',        'Tee[n|zN!M6Z@;~iJKIFTl+6gfsqbgaqXQUFm9p}NMp/gYyX]lYdNQ1du<4sS-aD' );
define( 'AUTH_SALT',        'q%{)#Ne&!r<DyxZjBkpMXDW^Xf5t~MP3Pc>jXWB=^Vz_`i63JU2!0K3UUV@irtLI' );
define( 'SECURE_AUTH_SALT', 'X-5r6s !k5OpTLj9ERVVj64!ZDdF Q8C0nFhES}jgi n}eZ%&M~tiMhV#D~@gZ.B' );
define( 'LOGGED_IN_SALT',   'JH60$:xZ)##68&3U<5}ytyT:TcP+Jqo+I>0NH[y(Wn_6pk hP-fxY:#Bcn/M9#EJ' );
define( 'NONCE_SALT',       'L.+cT!{hPY+x9V+R_NasiTm(Z`j@lF-Rd_p{FDy7fP#(S,,^i=~s/_ADuHjOSsO5' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
