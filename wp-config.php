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
define( 'DB_NAME', 'sidora_plugins' );

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
define( 'AUTH_KEY',         'vmY~}+CM`fgcUIUV{J>!yro^&/VPwPQuF/;U`eqOsi<K^.RX@_ ewP{O :2fR=nK' );
define( 'SECURE_AUTH_KEY',  'ztR_ojkik==TI2i#05vf&,VlZ0!9iS(~L_Cmb:kTTdDPEXTu_inq-_V5;o@lyp2+' );
define( 'LOGGED_IN_KEY',    'F|+&jES$@y4pL;n3~Pk7%.6<Iwdur&omg-/P+b9JGxt%?LJD%(6j##@tT=`rNa`<' );
define( 'NONCE_KEY',        'dz<TN96}E=qcskin|!_Piku:!yQ1LMXQxSQ#>ydRFxy){&gJd6:o7k:&QBAK|uUw' );
define( 'AUTH_SALT',        '[,+_B XLPYGNR!S!;`{1)RIGDK|LV9ptga.m*cO:)yfOxr] H?~iaJ.hACSm([a&' );
define( 'SECURE_AUTH_SALT', 'R}3qZ%w}TW&#=>kvg,/.(wx0dC%7~}TR]FErI@iO<nORd3}y>h=7BQ=IlwsIX_wm' );
define( 'LOGGED_IN_SALT',   '$0-3Z4;(ZgM:);2E9V*HN rvmQHS4o2raVlt+x;N/KIAlCbX1*L)%HG7PdgJ)s!2' );
define( 'NONCE_SALT',       '(]E|_:>[gUiskN*ZVU33W=gcl;9ZK*[Us~bnS@Wd3MrU#9:rJHIHq&c+O;+F0S3l' );

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
