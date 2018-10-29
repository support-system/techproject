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
// define('DB_NAME', 'rahultest');

// /** MySQL database username */
// define('DB_USER', 'root');

// /** MySQL database password */
// define('DB_PASSWORD', '');

// /** MySQL hostname */
// define('DB_HOST', 'localhost');

define('DB_NAME', 'wp_myblog');

/** MySQL database username */
define('DB_USER', 'mohit');

/** MySQL database password */
define('DB_PASSWORD', 'Password@123');

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
define('AUTH_KEY',         ']&:g/mzVi#r!Cv(vo+q`+XxoNiTva-#8B6 +6|KM=!+xN:Q&{QUk<]l7i`)t^l+,');
define('SECURE_AUTH_KEY',  'B.dloCwnl>E_@<;Nhah.!wTOFOYR?ZY,ifyW>Zw|KT+$SQ3nHobZ7]A>z/:U=(w)');
define('LOGGED_IN_KEY',    '9ObtI?Xeqqi!jR8xuXlOz3y:V%,EJa8mu3c(_S_!8v|E8yG2B_E5U?J[J3!X3l?C');
define('NONCE_KEY',        '^IHU9slb)34a%Qw uPb!JTp:9c^6&pZWTM2V8*8- (Uw u/^kzA*0AVV/]HQ9QPY');
define('AUTH_SALT',        '2[JVV_RoHf0N?^(d#$$)&#WJAg-IgvZxJN]Yz }/&]YaP^`o~TBtroIX_(=} 4Pn');
define('SECURE_AUTH_SALT', 'Xh6<2ZAb~Ht3~^h#n(]_ ,)=nq*JEt,F3AtM8e*<yy./<9]OZuG+upP<D|M%E]b#');
define('LOGGED_IN_SALT',   '?puI-GW>Ao-rKPRY;g6^tZWqhg{I#,o<)SaYM`@HkNgkN--/c!Bp0 .D@AT,X9>l');
define('NONCE_SALT',       'eNj)^6(~FQ^7EPo&<@ERq_AOiGw^|cvoE1F36I`^pm;9[ 6oy-%e1gS2XXb{)Z$.');

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
