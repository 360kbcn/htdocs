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
define('DB_NAME', 'mywordpress');

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
define('AUTH_KEY',         '5[j.D>dO,S#yD*y)B!GB;-eF)X#kJ![7cZ=@:n68kPo%T$#L}&b[x}:u}Hl.d8oJ');
define('SECURE_AUTH_KEY',  '3__S&LR%E;w9HSXpB X:~2v9@5.6Sak+Zvq9U89~0b1{qjThHv50L3SpOop}9k%s');
define('LOGGED_IN_KEY',    '=J(rxV|oprGB/Kr@x_t]>1K]hP.dF^ un%Y;id/k`Bj:8,&t%?PRZ +mgX[3^9cT');
define('NONCE_KEY',        '`|+(s]fn=|B=W+{*]?u!zK9CG|flk{:C@gv#l?ZL?uB}#dpK1]eI<$TCBR4!sxe[');
define('AUTH_SALT',        'O7{-H]$rz~hFeMRL@.^eF$4T7FY?jvKglC!kcX8m~zlxgGV~`_PjPy`k-Kt`VzXN');
define('SECURE_AUTH_SALT', 'Sl3BBOFp?0I4&l12hKD4Cwt813963hA7FBTn8:X,4H-Fb)KV7yNYE0Lpi~(=j+P ');
define('LOGGED_IN_SALT',   'zkEl qCsw:,ZMI{dc>h.g(?QR$2Afx|;<MLcnl8a5bp0/ieo/qMhw[Q!U 9W]OhN');
define('NONCE_SALT',       '7LsV[dDtN=I(8lhu9(3Fl~{() yzb/xCE.RHJzQbW&1gYnEWj],/_%{4|OWy%6N6');

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
