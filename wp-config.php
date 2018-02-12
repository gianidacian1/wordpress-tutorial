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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'lol');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@!kEk7|L[spM_Ik=I]:1K)-8Wo+j%lN#8o82tUjA[v<DtG]gTL9(xYP%F8)4izx7');
define('SECURE_AUTH_KEY',  'bupTmc/uz{l6D_]cOa.o|27uJ@8U>&@|^]C`Q0VufP~GHe^,tsk(Ex-8%9w3.PuW');
define('LOGGED_IN_KEY',    '1_.h~g*ryzQ9c3=@fv>nm]WtmRv7&H?`o=9dB4&JDF-?v!yC:%ZE =P`Nx1Mw:I-');
define('NONCE_KEY',        '5~=/<,0v0>VXM2TusO12d@PQFirOV8&MjPP{MI$e4hW|%Q2dcjoHx(@z(Apr[S`8');
define('AUTH_SALT',        ' )`%`F`j_&2jXR9nW%D^{f`D4->lbE>Ilx|w3q4^N<jh,}.HP:IWZ0|cy)L$O@@C');
define('SECURE_AUTH_SALT', '`~>t2>lCwbNS^p;UW*wF@3b1D>k`dt{;^!wrYAt+n}58N;AmyhxNxwzejT?ar<{$');
define('LOGGED_IN_SALT',   'cX7[./H[UmK0=#<w<E%z@{7x2es.XmL@xz[@*tP`pER5>7LjmFi71i2i%n{.Jn|O');
define('NONCE_SALT',       'jB_m{D(8#n=SE5h)RJH*)tz<DYq IJ_0Lo@1xS+{2Uz1..?s3h7XMzoIiY4dzsD<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

