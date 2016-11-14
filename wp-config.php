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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/yjdata/www/www/wordpress/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'linwordpress');

/** MySQL hostname */
Define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'FN#tIe5/)/sYN=*Tn0@UblHDl9^>`A0~Pl1]T*>8g[4A-<gx@{. ly~2UU5Ev;b(');
define('SECURE_AUTH_KEY',  'q47CBPJD:%]V.;0r3( pl_!Nhh#;e_8/zu[cP$O6uPBLh`2G<CtCR-zp-?TK[$2B');
define('LOGGED_IN_KEY',    'l[W($qLF^R@HS(*790-[OZnMDRN|*9a+`%>mO[q&_^!WjH~?F4t8jk`B-9wQ=tS:');
define('NONCE_KEY',        'uJf^fgYCwlIR7rTkv),+~v%g&{2wd5Z@`;?VY??!#N>8t7>eU7)<G$`__nmsl~JX');
define('AUTH_SALT',        'j[]tzBv}{#GuE3n*q^{|=|hEJbKRv:5l*fX{ovr^vm9Uet:q-BIsj_IHGf^k|&nR');
define('SECURE_AUTH_SALT', 'N0cr}[CG%.f;|anltAM;OeD/2h{-7^Axl?_?S&8z%(t;!_j`i/~DnL,vz*@q!n^t');
define('LOGGED_IN_SALT',   '5QT=[;HPi1%lJl!r<f?Za^AD&.g9=;-nxfC}!%;<WnV{>R/Sw{5}zswx]-Y:;ew%');
define('NONCE_SALT',       'Zi*:W;wnsYYmUO)8K||I#|%C!O/rw+#;gj=x`{tk]L=V)_S/}B/xFKkK(!$}6[]`');

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

/** many host */
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
