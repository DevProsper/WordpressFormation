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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'd`W4y35ly~ThX*Wot#>B!dh}{|r|Z5W~(,pJ6RUaeaNR7`7H)6EhM/nr[+Wtl|NN');
define('SECURE_AUTH_KEY',  '?:rM_mp9+DXt_=V.9G@N2%^F0%*8CxB~V4|+*/:8;6,KQy06y<mh89yt#w{?u9A<');
define('LOGGED_IN_KEY',    'QNc)O<#,i|Or3 ;,0vQGBxvq6$WGa+mc&}6TrGHo=AfIKVi]ne<b:9!@<plC[`Y9');
define('NONCE_KEY',        'bv#:S.hhdI}z.+mo<h43olzV:DA8HK+T1BHlk,q!n]T#c2@R`_G0NISZKM]>=~yz');
define('AUTH_SALT',        'dh?Ptk-q{JX4{z0vIywJ4CN#~~53K[<1TE$4jhag{Dx=]0G,*S9!FTWa&LduU[CK');
define('SECURE_AUTH_SALT', 'oLCUM:suJQwK{-eDyr55i|fD6mo1kO~njFt~$KcHPUei/FjFPOt~w-KXB9&8:oa?');
define('LOGGED_IN_SALT',   'aHKJ`/Mv|hRw9vxnqMm6:H7J.?v@PI>/3mFqdab{CP[FP]1d4mkI=cixQlV?-1)O');
define('NONCE_SALT',       '5|~(Sum,k4sEW@RPJbg732/7};&m=xz2Q]Z_T8TZjlx#-CH)o`%h#mkPH|@N1MV#');

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
