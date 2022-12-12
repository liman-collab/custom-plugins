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
define( 'AUTH_KEY',         '8Wf;Bk^M4,/]nz^,[`oht;VD[Vq6xC:{!1_/@Ww}}G(h>rNRZv,kvB4Yc_K{q! s' );
define( 'SECURE_AUTH_KEY',  '&Mue2_Old3PPuY8zCckg`0(SojsaG$J:2<+Zh)#E?L7>|[itrDA7l,x=:bJx]G_F' );
define( 'LOGGED_IN_KEY',    '#jYU,Qpo;bb/Dm<G#9[@[=b~]s;)G<o/m~u|;xrXo|- $U:);Om!p(Q01I{* 9Wt' );
define( 'NONCE_KEY',        '_A/*$<+AHFx=BOj39cUyb3Fnp S$$I%=YA)z!lfl$6Am-yk0f.Bl{hbpuA#?I;G-' );
define( 'AUTH_SALT',        '`Jz~Z!w{>ihR^@UQ5zpl]hiWA;)J;>$dJdcPIB7c(A-Q[ :[),/BtklTt-YC+Bw}' );
define( 'SECURE_AUTH_SALT', 'pYOsub|A}uXs4o;Xjkg@j_5/vsh&j.n3XRFE0D W vpDFwafH6GqJUXDU3h89-fI' );
define( 'LOGGED_IN_SALT',   '/{pCkA$?ETdw>QKGM?|9|Ob}_qlqrI`7r>D~_`T|{:=g~Bo}x(H~YUQ))g}pMb8!' );
define( 'NONCE_SALT',       '0&)DB8E3,Ei]L6<wb@Ql;;@~tDVtS3?c-x=`E2Eo0(ups2uS}p8(|.eEO}>|xM&{' );

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
