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
define('DB_NAME', 'smart_tag');

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
define('AUTH_KEY',         'scl[O!w+6*&}AKa(Xe5bg^ji>rm^~4G]gm3el*pB|-5V(w[/Ox *aF)1=Qqlp>/X');
define('SECURE_AUTH_KEY',  ']zW2rF|G5^I{ `+wZTUdX:}lJ6/e-oTd,XRNH@*<D;(?U Vu6K|&YzD,Fs4sxL->');
define('LOGGED_IN_KEY',    'O=;SGN(@6]jzIcAJ]GDcn]uOTn}hJs5@~`$U,,z1pdl@bP_z^ w5?Jt_$LtH {hU');
define('NONCE_KEY',        'Mz27?,rU_Dmf7*JOX.f_F+;tQ:`uv{:&-0.y@`Z~O2R&bOPmx::LCnb/5C gQ^GO');
define('AUTH_SALT',        '0c7SS+z/wS[S`Yl:gJm,w,j66L,3f4y&3T80I6}0kqU6]<*RN^6!nb!(o;`8@N0[');
define('SECURE_AUTH_SALT', 'Pj3viZELgHxwEYu|FI8r]OVXZA?sI}=sH{0R>lC`%9 ^&E~G*H39%1+v)7Pwl:1&');
define('LOGGED_IN_SALT',   '+T|Acd^,3 iUGm>=xJV3Hs!jYGf2kvE7B.-AhPW4V_+l0l}TjK;yf&u${R:1`veE');
define('NONCE_SALT',       'UK/&S-b>W$l$[.uS2Y-ndm7>LU:[K(-Xb_jMcfSH_NJl1jWU]hBe6^{=o7@uH`c_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'st_';

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
