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
define( 'DB_NAME', 'alquran' );

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
define( 'AUTH_KEY',         's2g Q-W@G+43*4HD(s*lPyJTWN|1]#QKv_T.aK.&nozs+;ep!f@nSXw4!Q6Cs~84' );
define( 'SECURE_AUTH_KEY',  '-=H<CTtD5uwM3$/uoY7fxPt~2#m4`f]UXA}Y3Cg0(EeeHz`tZVpucsW3F?AS:c^:' );
define( 'LOGGED_IN_KEY',    '[}:@w9:1T=i:,hJF51_[!)wcNPa1jHC%{BO:oJ@!7X{{!hhpk}s#)::>^E8C_KT,' );
define( 'NONCE_KEY',        ' A91By,7`PSBtb.|FjC$W`Pw2csok&~qe{hCCcC7_pU>wm?upy+jU^Z*:t}&dO?O' );
define( 'AUTH_SALT',        '=4_C1;T^3RB/7Srefz?fSsdw|94~>Ky{7/ZxZk}L[~(TMG[9f3~Um#BP5:y9ix#)' );
define( 'SECURE_AUTH_SALT', 'K<{SWb]TFsZ}{m5rzH#ogE)VBVv3yW4zZ@d4|<0wI4{IQJf2oS,~[l`=aPZNp.L!' );
define( 'LOGGED_IN_SALT',   'adtW/-k~A7h!0)-qpp=SO 3{12ni0.yD%hV=I!E?>{1=L#?LQOTgB$B`=Th(zEHj' );
define( 'NONCE_SALT',       '[&H$|1h}.g8|-Wn>^saaXg!0q6c)Phis4 88YsJBr,q,5ke6>=eR+LKq:)1NQY s' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ng_';

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
