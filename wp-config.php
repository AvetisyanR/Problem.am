<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
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
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '`rjhZ[Lc!cdaD[>,pSN|^--.&08T(FT}uLLW+|e^^N=zD3? qM)RcqOEL%w#Ma3*');
define('SECURE_AUTH_KEY',  'nI=,1xz7+8 (H,z6<E 1+MQc[UE?IdS:J[3$0qGH=@Z73P.:hm9p71q|Ug=P<8A;');
define('LOGGED_IN_KEY',    'pcVEnv*#]!<|^]L3y+$>Ao4CPB}ncM;*wsvXW_]4Xn] G[^[A}LTmp]e@1p:!(X(');
define('NONCE_KEY',        'lYHJn(_`22W%>VuO/-B-ftH!l0T6Hp^0+.|Gt.8$.9Wd!ragdC*W^1vv-3:{Z7mn');
define('AUTH_SALT',        'X7;^<GST]:G~rZy`>[|wh#~JAqAmU.M+/$/f/J9o^z:/{H0JVN77)X.o;)*gw6^G');
define('SECURE_AUTH_SALT', 'V:)IMCqj&8p].B=+K+jB9!RSN,GrvngJCFTp711cVEDEHnzFO#:aWOT%_mE!Mb{H');
define('LOGGED_IN_SALT',   'e1E<S|MA8YBJ8zD_poO5DH&1n0%)UT)>&=OW c*-+_IwZ5)ku4Y/`(kTe7iFAW`7');
define('NONCE_SALT',       'q%+1^~RmEcbN_^sXJ1h)@xU}(z?+ZA)l]^W30;x-z38#j@S&Lk~/hQxV}Tg(G!tD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
