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
define( 'DB_NAME', 'cms_myntra_life' );

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
define( 'AUTH_KEY',         ',?QZ&i]BQp_lo:^Gca`?t2qHL+0?nVGYS~eHgcJ)t~MC8=7&&wj_91.oktQX_U*I' );
define( 'SECURE_AUTH_KEY',  'k@zXD/ph7J^JqF=+H(`.V$.~/E84~M]xQ<6k{qyv)[C`:s{@8R.z8mA`th?Gly4M' );
define( 'LOGGED_IN_KEY',    'o8LHIoJ,GZ~{rWI;q7atTs}#N?t%=MB;><J=<iOqdS,eb=5]i+1JmDy|aFrpM jw' );
define( 'NONCE_KEY',        '^$OcE&h ,hlE=Z Rklng<ndH[:NA|$ |V03G?~wZ|e(4h]Dww[h@C%uvkmEdc#,A' );
define( 'AUTH_SALT',        '&#`t]u`gIDhg|z@Wm;XV/(];fW]G]vrm!wm[B..M5G(O3Uq]py7E6;}vSs{kt)$2' );
define( 'SECURE_AUTH_SALT', 'j.?)IUNM;u8tFIx8#wm=}446!cxhk/(H%}o[20?PUKqXS+p:fr,=)4D0Q>$A.S6]' );
define( 'LOGGED_IN_SALT',   '4`i^9^_^Gm+|b.toE$/d4[EUn,g`9^t?#>(JEIf846;bCoa,w90wBCYn 4>uMN`#' );
define( 'NONCE_SALT',       'S$HyH^ >GJn3,{27>LsCOvbTaJO#Z]gvnwE$FRT{FU.1`s+0YLA>IKHoCk5JiCXW' );

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

// force SSL
$_SERVER['HTTPS']='on';

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
