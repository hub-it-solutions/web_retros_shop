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
define('DB_NAME', 'retro');

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
define('AUTH_KEY',         ']}XmT3CumAO.[Y|Emv#JY&D*% /+ZAQ#Jw/E^wTaYfWA~R)3Vv2KBEvm#|HgWLtF');
define('SECURE_AUTH_KEY',  'eW+5l6SFe3hi*UqS&QVh:-:q;!.*9JY(<UfwD GOT;aRk>bPe^YXxCR % Qc*q3e');
define('LOGGED_IN_KEY',    'C{|h 43lO:Ll,?sxrbC}hMNml i)9pVFa<l/gB8]:!XSv%=;2|+Fel>3/g!u^e3W');
define('NONCE_KEY',        'd~}dbrcW_y~/Pu`v1j^^gxwzs4MQf{4o-)M=`*V3-s/G1BR5 V;2jD4u7*flb%OH');
define('AUTH_SALT',        'b_O&@t/Hg%Z_{K>9]H;uz_PzY?*jR:&nT.X#mzP:VZl7hg{:M:,+p,y*I&be7k~]');
define('SECURE_AUTH_SALT', '1V^2]f,,>8mzsTnjPqtym%O(xu`238g8urJ_o-ZJ4}>!Big[jg*}F_lIre]]a(CO');
define('LOGGED_IN_SALT',   '+/@B7tCRI~2Dz#8t5ZxJ+?h}[qR 3&mpvCZ:<mj lh[MqE#t#m>3~UAIXWM;t dJ');
define('NONCE_SALT',       'U<oDn5^Ej@@LUGJ_gB.VXb~gter8wCN]h.tw|,fU&wwzA :xrR??l>lY[POZeAv1');

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
