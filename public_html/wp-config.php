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
define('DB_NAME', 'vietshoe');

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
define('AUTH_KEY',         '2R/p6nx0d{yq05>MVRFVKMP1v|U6W5m7DrchV~]{!FR|huk)Zs{=O:xQI=9n*_Uw');
define('SECURE_AUTH_KEY',  '^d?SWI)-kQA-rBKck>cKA^Yb2;c}UOua}Ze]f&<}UE0]sOUv::Ca{5To1!znQD /');
define('LOGGED_IN_KEY',    'yMni2`9?)60G/Sl{dmxoq|ByH?gc7c Mgpr ==QpAP8TFNDyif)hH~tL0;!*/l.W');
define('NONCE_KEY',        '>uKl+|QqU@hgT|Et-_DK(.Zp=p cpm2&/}wHv:<C3L-_v>HH/UBiDh$SX-r:u(~}');
define('AUTH_SALT',        '92lZc  -y^IEm7UQ4d@b}$ZG*D$lo+}^>,ur>S-Jky1adR@xRk![q~{~;a?(-jt~');
define('SECURE_AUTH_SALT', 'C-}^%s~o[ez=S$%5vI^?dY(tTyEHHOoBBg0x[emL~&S,e:t-ic!4Y`cNP>Y8.vXX');
define('LOGGED_IN_SALT',   'Y[%7^m?*0s$<JBq1O5nbrFoXl~s>oPf^{!Yn-2ayK]u)SRPc`v[!kR2FW^wH&m,e');
define('NONCE_SALT',       'sU [~dvrV^/y2%P5<kyNqaO`F:R-$`C$FL/T)_K57P[PWA;ksQ%Mn~rYWsSc;kXD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'adt_';

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
