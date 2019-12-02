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
define( 'DB_NAME', 'misitio' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'd6855835cd5f20713ad38db797c6c594b61a6e3822afa939' );

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
define( 'AUTH_KEY',         'K~P4dUu,- 4?ogd}kX=-tv&mfdom.NxF.&bKUAfn{[{G<a5-NiU7n}Ac+7W>W{y8' );
define( 'SECURE_AUTH_KEY',  'f&?vJoQbrwz+zfjAL3_VMCy@];Xdm2;k<sI5)9zUl>4o:*$:*50:L?gsG$+R1gq.' );
define( 'LOGGED_IN_KEY',    'J=!:c8k[*t7hmY5_!`S`~&{EIV!S+#40*l5:%mzOo`W7L}:6uPg]BfGow4R(!`p3' );
define( 'NONCE_KEY',        ',5x[/)lA!Ci!$$*cj=lR_~6oXn]2hS7?#NjS{k4HzU %L4uyMHq.&J^z[]-~W<,#' );
define( 'AUTH_SALT',        'P4k$A{T)Ldx6=~f[(2=4(YoT#OX>/`K9|_Mi3kzY=zYju8Ao?55s3u;f2iw={N?R' );
define( 'SECURE_AUTH_SALT', ',CiB^**zmc3%$LkH@:7y`xr(0y1h`_4{l4xm)ty4Q-Am[v6k4&j`I^qFmh25T3Q:' );
define( 'LOGGED_IN_SALT',   ']{Fi|x0,24is# `5o&ldNBl;7 ;Cz/%1)Doq=E@!9_4JM>W_eN_U>/m22GR-QRn!' );
define( 'NONCE_SALT',       'Cj!&Y@S[~~nHs0eR{;?5~~NUAunHL|(B>BSJGnpek*%VJk(hEZ !387[ GLlkdu[' );

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
