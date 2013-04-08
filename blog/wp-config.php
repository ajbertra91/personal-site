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
define('DB_NAME', 'adamb13_wp_db');

/** MySQL database username */
define('DB_USER', 'adamb13_admin');

/** MySQL database password */
define('DB_PASSWORD', 'BtLomsaatiwm1031');

/** MySQL hostname */
define('DB_HOST', '74.50.13.226');

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
define('AUTH_KEY',         ')t,)-|P+B_lzMuVdfFYKwb[`-?c|36lrm@%d*S!Ib6D0lWN7_53hEQ`;tk${F%9D');
define('SECURE_AUTH_KEY',  'SX^AN%:;PO-G1aZJT8;Yn `N56i]jJ=I[%oZSM,W0|&~Zj-K!`q2kjCj:C6;D-#!');
define('LOGGED_IN_KEY',    'ZY_X+<M,E%*hc/#;)-;ma&=EgV_a~qVywLuMPnLZR|<dacYz+S#{hMQkm2,kl[SC');
define('NONCE_KEY',        'gov-6E)E+ .B!6HL/-Db.{P,wlyncbux!JVk-K3(Y~gcx3*B-!_n+xY5@vc-zpmK');
define('AUTH_SALT',        'W>D&-Cq;50_7iMy:=.($*]sba:-3M=fSWl%_E%p~%BbR}|xE/vmi^,{hH,-+NY?]');
define('SECURE_AUTH_SALT', 'Y&{EK<_TR+[;80*nRA<UKc !{nHJ_p#o}i8ZJ`Gu7t&MB|WGGM1dReA|K;pey@5p');
define('LOGGED_IN_SALT',   '4_VeOT^_w]<U1OqoTbi./.yTQ#mC|*>ci^} wHGvAd+wf{w^*{2=r>jClT-|A-OR');
define('NONCE_SALT',       'NqE$a5C{QOVQJKn<6x3R|_C!l8p*B*r-Z#!Q!_r!~gZB&Im>r;WhCcWbSY.yXHc ');

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
