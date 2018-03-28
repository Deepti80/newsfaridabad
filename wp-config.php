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
define('DB_NAME', 'faridabad');

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
define('AUTH_KEY',         'i{R]NSY1,k@Uh2UuAX<Fs-B-docSG0$opU#{Rh>>:;(M[q#L69k+mqw)Q0<C:h+7');
define('SECURE_AUTH_KEY',  'Wd~D^vlU8VoB(_m~I)&OEUNGf+E=6N 4Cf4`y@2;SovOUdBpdivDivl5O  >jp d');
define('LOGGED_IN_KEY',    'u.}ZQAH2C32h~K&sbC/:BIT%?3$b$6$XwrV>IIW 6GR*P$-*?_B@i2dXfq-c;FpC');
define('NONCE_KEY',        ')U]V:dK0zg]I~j!$W=GGG3XOshzhX:V6?Jswa<Up7u-:_W,H71EzYl fOG0ZRYg(');
define('AUTH_SALT',        'j_5f4jmdu=d]4EH/zjB<k<]wM+N$w.B9Y;a0JRwf P:`v5(O,wPw?Eh/-ukYa)7Y');
define('SECURE_AUTH_SALT', 'h_?XqJO,Q+GUYeuZ%+3)e74^]~m}?lo=o>I^oZY7it/P$Tm~^sP$@#<aerq^*(wu');
define('LOGGED_IN_SALT',   'Q7&,E@rhHn#Z[Sqx[2;hTuuP}Mu9iD1d,eTbUd@`lH:}D0E%%oxy686 ^U.1>jX.');
define('NONCE_SALT',       ' ,D@TiOi{3Wt1;y62QiM&yopFF_.ixX&Dk<Xw!~z7+qQ%bli=g08#/FDYHObhYD-');

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
