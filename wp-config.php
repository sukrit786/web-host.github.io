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
define('DB_NAME', 'ghatakbase_db');

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
define('AUTH_KEY',         'K62NQkM,-UCgMh]2_oysZ*m`@U_.*(C>((^& 0Qphn/[_|UpG)9]t6ILN8`>Tr2-');
define('SECURE_AUTH_KEY',  '>4L_cE}?6(/-[U=? Oiv<n`g{uya3tDaxluLQu(Aw!Ark3L69pNN]?!&)B4LH,._');
define('LOGGED_IN_KEY',    'qkc9qskMW1CS>x}KM(7Sa.kO~v-YelAENWL*+b@%5C$.ifNar=:w02[Jg9Jn_@/S');
define('NONCE_KEY',        '=$3hyx|M}QZq!+.&gpVanhTd.vkrpZ7cy?ptZ`5CWXUf511_m>0x$S<~kgNux5_p');
define('AUTH_SALT',        'xGEFOr#73/%Hjk@IRnv6=4xsf#XS =67|(Kptk#qWAw&:VSe>Ba!v1h7LOu+A9K.');
define('SECURE_AUTH_SALT', '~_np{P&k^},!GKX`B}|oeo:-vS&;HG}q<I9`?=knx~J`U2|u5`|pv$@@DR+=.G0m');
define('LOGGED_IN_SALT',   'l$tGN4JVI)8Bz`9TM9vhbj)@F]~6D~<Etkvqo]N*0mO+NU*V1K5V~YIW/aFEs/cA');
define('NONCE_SALT',       'I4~7u!,OS?w$IP;q|&c!Gxj_O0_3MTO7Cr r+-~92O7@ 6ZOt,9>T-!%,K65)c`d');

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
