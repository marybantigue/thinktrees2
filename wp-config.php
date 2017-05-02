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
define('DB_NAME', 'thinktrees');

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
define('AUTH_KEY',         'o2;tfWbj&ZQ2d@xBF^9(i`yJi%$x-QiJj}54FF;JP1X)-N `-/8FO3`WWfKGc^c;');
define('SECURE_AUTH_KEY',  '/oabSWp,4>C6;~8Ln%6Gr;`]H[&K!^3iT)BL? $o9[QN[Y7t(9c4ViO57q3$g?W[');
define('LOGGED_IN_KEY',    'i_-_fort6:N]u2dud.Dj2g.9!T(xFljvh)4 nxKO|n8|Z|K*:j_Ec<i-KYZe,1}y');
define('NONCE_KEY',        'e;yK?/YS5xYT%V[iKk_>K!GfU<#;la_0&@L#|oF?7,Sq!;$oIvmT:lKY1V-^]ZD4');
define('AUTH_SALT',        'K+?-l%=d`o#H<Tk9nEB5,$:QS1r|+e[>F/<XlaN|#(yAF#Kria8~l.:n3A=h+WU_');
define('SECURE_AUTH_SALT', '4>b%K?r*SHJsq(r-Dr o@na_Wf=T*([n.zl|(99-G.73HBh(:m;=N),},?h_B;F]');
define('LOGGED_IN_SALT',   '<f0,Lj#<3yIbE-:ej=J^#G7,k#@Z_8R XARWs{&U#$WyUkSBO=<d%D8L0Y~%7@!Y');
define('NONCE_SALT',       'yw4}trypk},l7xXGJE%?)i(dkT,Y-y=a_?5-F(})`^nn6oJ#7$vt2mU%uA0F3a1w');

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
