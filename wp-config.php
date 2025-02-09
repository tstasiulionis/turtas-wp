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
define('DB_NAME', 'turtas_db');

/** MySQL database username */
define('DB_USER', 'tadasdev');

/** MySQL database password */
define('DB_PASSWORD', 'tadasdev');

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
define('AUTH_KEY',         'Gp*ssR{C(O=mY]HzdADRbpw5K{<JJxW1Yp46+z0f@ bc:.5=DJ_O&7=V.#nV|#_I');
define('SECURE_AUTH_KEY',  'uiyJ`VLaS0*B>GY;$$ JrKH[2J||mw?t*Y{pA23i*j5T+k8HN4hA!P#*nj>W$G|]');
define('LOGGED_IN_KEY',    '*C06QG3u*psZmW9TXmNh7ZpTI|/yh(94yKIy?eo-BmC7@cDA2gfAs<#E^ukKxgr=');
define('NONCE_KEY',        'UE_M4#5B7^@P^q0lqM}r^GhZ]ES{CM|vRADC7V;, Q$_l1Q*Pz[bB4{w<e5LVPhv');
define('AUTH_SALT',        ';*tr0g+AsJ_M$DOWJ5<7X5go8Yw4ebJ y;=!dp&_=>W8VC6r6/)G=/wG2}9[)?-E');
define('SECURE_AUTH_SALT', '0W0tw]d^l:_o,kn3rwW6;e-RVJfiIW->S5ty~t{SEd3m7 QeZM>,r]-|(7*OnO=4');
define('LOGGED_IN_SALT',   'm[[yK3njEB>#m739CZ.}YUJ:wS+yhJg:b4_Lp)E&K+-OqBW%?U3+5~D:o81;%,SN');
define('NONCE_SALT',       'n3K@xd:EXV-8itU%m>d+3|I<*wv(`ct!pp:aAuT1[0DRapKE<;$Fwt_(M7=b`Z~&');

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
