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
define( 'DB_NAME', 'wordpresstest1' );

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
define( 'AUTH_KEY',         'e<)fhk,0w{5J[Sd%* /]Pv7mw#taccV<]ms^:K}D|,.nt:!#9P*K;3i H3}?a:IQ' );
define( 'SECURE_AUTH_KEY',  ' 49spNX0{Qy,e!_H<1~5[[4oNvN2<SS?&>.;$8m(=RmR=SrJ?Am i7T#W+OT=q1=' );
define( 'LOGGED_IN_KEY',    'Iz/K ~i3O|S0x3X|u#it0uK:+h C_|GR.f<ep7F0zC4IzU}d/h?/I$^j`gNOw6+(' );
define( 'NONCE_KEY',        '/j!U^T8HlflkY)fFc{q]u9rX;Ef&X=i2%Y~^#Z~QpWWjv^~EbiaF 8wJFgHm);>y' );
define( 'AUTH_SALT',        'IS;==NiKyx#.yEYi68}Vy0#_WC.X:rLX.~{Z/dQ2R;xG+3cKf+s&-c3Jxyka6/l2' );
define( 'SECURE_AUTH_SALT', '_}k5+Rs`aCRj+Gh-8O){ 5ru]4sTW>K!sXZ=(>~2szuNkNw&4Vs]w=k`jSTp3},R' );
define( 'LOGGED_IN_SALT',   '<SPSgR1i!vdHOID *%ryV3]-gWABF/?6QDP@u#-<F7DxW8uOg%)MgH6;Y<*d|Jn5' );
define( 'NONCE_SALT',       'SRCB}wg9hY@:<z8M}L`-G+0wFBlRn|e2|uB@xX]$0A7eDY6mPqIG,JDI6.-PZ18J' );

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
