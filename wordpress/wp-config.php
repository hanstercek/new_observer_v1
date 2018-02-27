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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'chrx');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's}<}=ZVe^|WSQ]i%@#H3NNBGKC2u) Y_+)t v+CaMabJu :>C]V#g~~wg8FW+i5g');
define('SECURE_AUTH_KEY',  'qK<xcIU=6b;qC6Iafw8YXr!G:=r]$.vqYv$P2,VMdgj-06z6qAglSE^06H;`]G<m');
define('LOGGED_IN_KEY',    '*;8&SWi_gG,bqh{[8;e)w5h={8~1n;*[iGLxInt_dvOh4Z4lW9?_]b|npQ/WKV&R');
define('NONCE_KEY',        'iX!x$kbyvs!`{#PW^ZSfrLNJz0C(*Q(-1__B/,}|&nZu3rs!3D_@Y%{)U:&aEfP_');
define('AUTH_SALT',        'q!dmb y$zaN(&rJC-s|}FP0D)pg}NBJ}bqXi]d{s%W,6ad^x&;huF3_}F8DAz~~F');
define('SECURE_AUTH_SALT', 'h)w`RKY`i,Ce>WOG@q.w.1Np)6O:e=jSxpV7wa>D(Z1Ao,Z<-L?:,;hYM,2rr|vG');
define('LOGGED_IN_SALT',   'jVGwJ<;M:x~|5r!O6pd31_xM ZI_Z)%)W<.LtF| s0c/Vpg+L^x`uamMF`9c[g&G');
define('NONCE_SALT',       'ghtx;H:NUKcV0e^SnzooKfpQn[t@=,NxS3.rfptl{;Xv9pp+e /o}KX*S4BSay:c');

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
