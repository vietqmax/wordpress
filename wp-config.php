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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Etz!shoBx)Sg:0xP>jBfl6;m*h+gh+~jg=Iv_Ab)zN7Y:)9V=_:${@9O>Eu/liE*' );
define( 'SECURE_AUTH_KEY',  'C[j;j$z>.~E -.hT!^pFtHerhyZxSsU.l*+q lV`}TR2o^R4=}t~+v ~F`>g;Dt(' );
define( 'LOGGED_IN_KEY',    '{((2PjSZK<j Y<EmChMgQk.8Ga$8g6 clHb61k[aZ |ByZ}mBt,Op8g0y~@Je?N8' );
define( 'NONCE_KEY',        'Mx.|TwO(1<u-;K/c2)d@6MUS:V^- :,Ok55{sCn!eoF6&()o&v;{:93cxLLQGjoz' );
define( 'AUTH_SALT',        '2u@D?V;cVW`<p+vrD*u/.MA;XGoC[L1a$+!?Q*x~&S4bBF$dLT?tfX~.C.yJE~o|' );
define( 'SECURE_AUTH_SALT', 'S W/tA+_h[_!_h56UjgW>4a8Utq4$44J[l>bCAzru=YZ<3Ov=Mi,(1G.lq,0_is_' );
define( 'LOGGED_IN_SALT',   'RUe-ghz3tEX0k0 w5qaL{ZTN6QCrXZu}H1[/uE?JsQ_6HAL~1.f6pT&A`M9ccpMv' );
define( 'NONCE_SALT',       '6AdF8d^tw/il:(EG(Gmt#VM8ZP0-i9GyOvG=YrR35<!z[8].@K%jeb1`,FK{t&KM' );

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
