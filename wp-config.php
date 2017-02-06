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
define('DB_NAME', 'pinestone');

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
define('AUTH_KEY',         'x$%J?-_(-ZAOB:aW9!V&+KUSkpLNGdw^rUa(y.-it&Wy%+k}YVM|C*sQ377`%hlx');
define('SECURE_AUTH_KEY',  'lwlm%x:mH|G?yQ.%XXI1Q|6K26LrH+g@aChcW%J%bX%r-Gi%8xJ$/Y][[c8K4*jY');
define('LOGGED_IN_KEY',    '!V_?cE<REK?3pqY[FC..ld&uQ1$I~-m!}8G9yv`_O](ZqTEX8<gK*Thj2b-)5UX!');
define('NONCE_KEY',        'J#@MI58NL#,Cm>W&TO}%)#T{ZkH;,9o>-LT%g[up(#vjtrr(#;%jvXG^im~HKGND');
define('AUTH_SALT',        'LC{g&#(~#2G0`YlR/&bjpRu5E3*|uf{SA(,c5t ifS27LR[DQL=Z.4c/2lzydWc|');
define('SECURE_AUTH_SALT', 'M_qV&4@ab]vFY+!QzT*?o&h@l+SxH,T)n{= GyL>t)o&<#;ZX`Rkh*>dZ Eq. oF');
define('LOGGED_IN_SALT',   'fZ/v9LX)~XMYUTPg8%9=)pWM?lG3A`Yh-2LE%>aGB9Ia]}<!FujGDly@c|Vx|v/]');
define('NONCE_SALT',       'A<Ev2h?4h>!{Zxcp^H=t0=^cAg6kXOg~B`=3C?pz(KyQGgQC6`|U%3:[)(k:cMbY');

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
