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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ccppuno_web' );

/** MySQL database username */
// define( 'DB_USER', 'elvis' );
define( 'DB_USER', 'ccppuno_web' );

/** MySQL database password */
// define( 'DB_PASSWORD', 'PayehuancasJustos' );
define( 'DB_PASSWORD', 'F4ssdfFsd*ds2*aSad' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
// define( 'DB_HOST', '134.209.64.227' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         ']cv6D%[1-gjWsZL_O0QT^W3tLN`+]u1JNAh1QttY-wl}Y^7#xoW)(<7b%Jls%jiF' );
define( 'SECURE_AUTH_KEY',  '_6]KN]dR#+{^oVDlKZp}nS[+saS ]x`KV&2=4{0ZP*W7H!a{/_88HB69M&P~4x}6' );
define( 'LOGGED_IN_KEY',    'S!~*[jy4ps|9-az;f.2)K}:aunaQ3<$|;G9<!S]d0lTo~]Y-uEEn-}Q:SToF5KZT' );
define( 'NONCE_KEY',        '!EAw08a7@GaK2aKJhZc&2B#I=,]?N3rj*.<k#caiaxFlVvr@=<JTj&v2)aV[Zj[S' );
define( 'AUTH_SALT',        '|Z3GFcww1xz7CVVDf[?w3u`<cG_G~iMX`c<5}3Eps9j%6r`eS!?}f3M_7JOx?<Ll' );
define( 'SECURE_AUTH_SALT', 'fAY8Sm~j*ze {z|=*JU0P}[T|*g$j=+%YX-Y,S{/e{Arlx^A6;@+@bC;ZE#]@dMc' );
define( 'LOGGED_IN_SALT',   '23z5e`ZI$-v){G-<x+(t@i]LS &:KBLRuorIcI|G,N>]B]uEan+#}N_FY#R~85k3' );
define( 'NONCE_SALT',       'oyJ?P+J&%!L%|T;H[a{zE~</WDDz/a<at-s2Z:w 8cZmAFQ7?aql8r&4[CQ;cdK8' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
