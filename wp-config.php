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
define('DB_NAME', 'colton');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c4j%u~,bvk*Os,i>cDy9YL}oE&%!+V6Dq$E-F#ROn=cnnces{j3kw[kejWQ6yOWP');
define('SECURE_AUTH_KEY',  '3A_D8YzFRwx7V2V?@aB7u=D)kC|HiMiUhL*|HW}Yzr,b_t*gRbexE};AhPo!?vRy');
define('LOGGED_IN_KEY',    'v{q#~ 0+F&(HOOVAu+x5a9I)8]q/^XVDjxIIwHxR>~]~mZ;B-8-1 3kTDWwg%~9E');
define('NONCE_KEY',        '{dc5Hf*6kzUQ/Hh*a?gFb$W#{PUUZ7W4v* L86x&LbC,,v /Vb0uZy;.W9B~e@Fh');
define('AUTH_SALT',        'F%((}/k-z)r&}s<fn52H<i:0^&tM]D!sUKYLTB*rD~yuE+&=rt$$  ^~=w#.vp_u');
define('SECURE_AUTH_SALT', 'OzB(fFj5~yrHP;qozyTE:<U]RO<GxOGaAhZ)2J}E-?[G=m}95~l~reZ#&83$u?tx');
define('LOGGED_IN_SALT',   'gucLZQ8_DQf=aj6&bB+{<3nWU-4f-<K<5%.].kfRDA;_49[rZtUhq&u5RwS@OE~d');
define('NONCE_SALT',       'B95g<p6xr)cAut5tFni4Bmlwz.I*3Qgf2SBZ%G3_IVdS]ta-j,Xcsp]nZV9q){zT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'colton_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
