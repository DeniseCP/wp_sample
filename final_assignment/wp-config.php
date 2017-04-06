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
define('DB_NAME', 'final_assignment_artur');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '{s&3JN7d:?Q8q@)9QT|Z8x#d(RgO.~y$Q7mBB5Q%|Qp%93f,q.E?:7Ske&c18CC>');
define('SECURE_AUTH_KEY',  'A#1/ERQ]+`Uw8#RUHh+3 jGQ3`E@k_=%/.)[N4nI@>0SN?M*!u4CHWM%X}0T8-j7');
define('LOGGED_IN_KEY',    '*+L31pXsR:}D}:B~kr2+-;M~]f7;8r_^$KJ(rWswfV}41)i_*T%aE.?y${}91n1I');
define('NONCE_KEY',        'P(. &RZr*jq<2/J.pns=zc-C.htCY!2@RR{vK^OH+Sk CWm=|FNd(U2B)`[pee@_');
define('AUTH_SALT',        'ztwig:]XF|jJ>~yO*wnNmyx/?5TA=2]<e>UF5ag8m)>4JigXEURxzPnlBg=d=FP|');
define('SECURE_AUTH_SALT', 'CH+IF{<1ClY.qsWW~`YTlRPCIZpPT<>9MmLKI5^O8#k2Vv/~X5C`gti ;_>]w((#');
define('LOGGED_IN_SALT',   'ALY?TaEWA8T2980)e#,wFFFz0.X^>fa;lE6c&H>~!?P:s]X(41aF6*DHe(>G,NyV');
define('NONCE_SALT',       'A~}$O(OsB3h)YaJo|!FQGTabEhEnl -rZ$@n]t5;dJIVCIDI^eM_8L}R_iYF<hK=');

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
