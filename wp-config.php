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
define('DB_NAME', 'speed-singlepage');

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
define('AUTH_KEY',         'BLF0++ojI[{5/3miY{ p#>M~a,^k=i/v2StVLOgM(}%sitZ9W)Ab2;OKbZq:HJZI');
define('SECURE_AUTH_KEY',  'jr9Aio<*2B%zJ,}2=33$Ly0cNY0151eS7.S4QW2;hBfr@[=|_dJ:Ro2sc3N,f94-');
define('LOGGED_IN_KEY',    'K4)[Jo(-|E~GN[NyrY;ax+@o)5LzEH&l51|W#SqRG<YDQG+tb!NiKmSeD87btEfb');
define('NONCE_KEY',        ' Dw#tKt~17nE){K+w5T35yd(~ Te{,LuoB?zJWor5hEyzKJ)+koCTAA5u7/)p=KP');
define('AUTH_SALT',        ':CB#AcyiZA>] mh7>gr,0O2<x_q<BFQky=kz)WK>Z bV-/qxL@f]M&7.>xA2t)P3');
define('SECURE_AUTH_SALT', '-(s2JL5=|Eq<zq<QE-OwPDx3YcP7n]*Hk|ue:|)&e*:js2@|KErP&e=W,v[32mbj');
define('LOGGED_IN_SALT',   'oU D=^4Xe%ey{TLmZ3V?o L$Y%lY}-Gq@^yNmBc56;6t#OQEf|zxwWPsX)9fWte:');
define('NONCE_SALT',       'n`#{965N%oVjNl3>7rYKe8TuoHhEHx;Y3Z#0&j8eu)3QsuAT}<R5O:r5Z-e&IpW,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_speedsingle';

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
