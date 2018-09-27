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
define('DB_NAME', 'rahultest');

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
define('AUTH_KEY',         'eBQvsu]?J?!_K&v#0MwA n&b.v[|;J~~]K3/fw@NU5dBHv,p!R$T#Vz:7`F~|Fee');
define('SECURE_AUTH_KEY',  'w.P{/xO!yHpH}xPh2+yf265ZA76o:D5<9a[,wFPEdGHHbO!_,rwL88sko[wznU$U');
define('LOGGED_IN_KEY',    '*l@c`Sdm J[]Qq;BAowh,jSfHd_hx4A7|>.W`.(0,FyT+ns^AJgl<iV:o`MzHQlO');
define('NONCE_KEY',        '#K<z%Gl=}F-=1)w*wMXRj6dltGtXi_SygIj$r/0Df#oR,I=~V$#19=CS0KMg@(]j');
define('AUTH_SALT',        '-AF:fb+&aVs5ZHYv[mqINVcE0n2n3:,/<*;+2>Xm*ZRq>R<R4pcC q*sowEtcQ1t');
define('SECURE_AUTH_SALT', '[}7>FO3_%_u )XWY;wljF@htvX;lGdioEi&1jZgT{/=Y_)L2 r:H~pLu)e6AQTL`');
define('LOGGED_IN_SALT',   ',GG5bgJ|jys]wvK)4rSUK`K=SomCCfE=L ,Ba{9(GmIM/Qff9qkhT6>)5UOubMHD');
define('NONCE_SALT',       'L#xI@HA)XtAvtgqpf@+1Asw}EW<4)+Cj%RjrUcQ*+vFpxOb_;w%U3]MN$oHE+Nk4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'project_';

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
