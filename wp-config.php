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
define( 'DB_NAME', 'customtheme' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '`hk~6WDD`Gxr(8bs/6uhS$AgkhR{,F6|FQL|e1E@i]kKeoru]%,5ve=>5spVy4:Z' );
define( 'SECURE_AUTH_KEY',  'wK91bg8CLb@ :Ud#~?Uq)bbp%E33,a[cJI%;HINlswn-lO9@Sy8%cT=MJv)_;%w<' );
define( 'LOGGED_IN_KEY',    'U1`^DKv+hQQWX0s,P^slt_J*!P-V[ia{;$6zz2WvgZI?UHB3J:;=4,e83t%9pv;m' );
define( 'NONCE_KEY',        'nr!RgZK$TSck:9>jyS@{txQTk=vS=NJn`G{UQp/rW%7DHLo8F+0E<$9}Hau+3`ZB' );
define( 'AUTH_SALT',        'HTWp6g%do)buVuoq&oTG$g P[p-!RF04~!OO!6?R+z:,A_NT^/^FTj6JXUYx|8jI' );
define( 'SECURE_AUTH_SALT', 'h6-&@qX/.sGC7M)%2p({~3{ca3uGmAX~4]8) IM&gFh_w_AJ$hyyCy7/Y+nTIjA@' );
define( 'LOGGED_IN_SALT',   'h<8A+h+vj$nYsjCTVeBvQ;F[b|lau3e)$p:$YID|:$NJCD[L,^{ +f(pW@f.HOBR' );
define( 'NONCE_SALT',       'z.H45l_vFhA]54GcCs|81v:TZQ4MZ)xsG.B(eGu=Q+auGtY]8a1:n60y9fn29*m+' );

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
