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
define('AUTH_KEY',         '`C-Dvfv%V5wJnQF*<2WSp!6PeQ#29YEfA%&y}}~}X*y-$$zP1JM#bG)dANo.I RT');
define('SECURE_AUTH_KEY',  '%b-f%C&k)_WN3+4y%?1-V)oW)CZ/8.!in#13>m;p>sL<RCSxkeHNrE8az`J0:uoB');
define('LOGGED_IN_KEY',    'eh%v;n1$Hh6>(AkY??8Y?dtE[Rx2.g_?TltF[}]|$qNu7Ij3nG0d:gN}BK*pZ`Th');
define('NONCE_KEY',        ']&=4&u{b{n|:5Eztyy|yT45X={jhw2Q<NvrB=yi5Z?oeh.jQ>a;ii[A[=((4pmH1');
define('AUTH_SALT',        ']`?7>|+a!-p;Dj.ok=Ea)HXInxT)Z*QZnh)3?kb8=|;F[|]%AJJs}%d~qVfE?6dL');
define('SECURE_AUTH_SALT', 'Ou$KIhS8c.3A?e}Cg*lZ)F.1L(9*?%XbUvn 6v,KK{_+3yBjjsmoC%-i({boH%oP');
define('LOGGED_IN_SALT',   '7|}m5u<EA*)Iubc|K%.,V+Xn{/MZob%t.r(~{*6<#Eommh<53]?Rg7xrZ*X|%`ys');
define('NONCE_SALT',       '?3*`vB]o=kcgg&t}u*,dP:<}/el!s!b<{SJBK<u]neV~-SRu^/V8vqfHpqS~-Guv');

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
