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
define('DB_NAME', 'mge_online');


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
define('AUTH_KEY',         'l?R|Eu/JYp~@.[VVP>H;l4-bJ.Qn$dA=o./ydUt~w`,6{n!4vq9S(yA|Bua5/+RV');

define('SECURE_AUTH_KEY',  'p{,x,Pz)u{#?x4kylcKtd-5 dIhn}?HK[3UU[In-LXhmaK.|X%E#f{87ax~fPM]F');

define('LOGGED_IN_KEY',    '5R. |<4]qnrGh.+GZ6{4Vz):x[n]Yz/M7<yTLLCh}K`[hYCo7VHuAMoeD{5kv.C:');

define('NONCE_KEY',        'OSNhSWpn0[HyHpL-xh2Z,P_smgx.c86$]U%(D;@tB~Ny7y2Xvm7+?0ai-D79pJvU');

define('AUTH_SALT',        '@`,0Gilvip [sIKpjB|3|k-9 ej<meJhTIW/bw44gM;ckR1*2fn!Eo-eV|{lx8j7');

define('SECURE_AUTH_SALT', '.:_-^9D3v]~r>BTd}qdagRWfBiZx:JP@H$oe:};V@a#<Tfl#z#M.<}?yZB4$buQu');

define('LOGGED_IN_SALT',   'A%|8N7D^]Q}h$ Vk0t%SZ $eKj:Ur8-qBTBW[6/?yrYw4j//oQLyzPW}V9>+rA1-');

define('NONCE_SALT',       '`kD$RF+X+`7nSHq+|Iz;]vxVd~[BTe[>WpH)t{9@_+4rk/HE%+4iwUAman1e^8G8');


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
