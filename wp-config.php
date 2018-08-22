<?php
if (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && $_SERVER["HTTP_X_FORWARDED_PROTO"] == "https") $_SERVER["HTTPS"] = "on";
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
define('DB_NAME', 'c9');

/** MySQL database username */
define('DB_USER', substr(getenv('C9_USER'), 0, 16));

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', getenv('IP'));

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
define('AUTH_KEY',         'j<R+ mt+d:R9| m!j_/oJ.Bk$s-9K}R,_cCVi}c]Y~; e.u]No?(!%6yN}%7,{GP');
define('SECURE_AUTH_KEY',  'Tu>qQ/t6i$%Yo<iHF/&doZ}#W5>k+cZ&s$s,!tqWW<2S3}%8y(HwN}|Z]~S0Hj!:');
define('LOGGED_IN_KEY',    '*r3Vr7n0D7?E<^ME?&u_9Qh )7<.{F]U5!s=QZtN(%Q[Ma`bf)tMe[ck|&n0Lc{|');
define('NONCE_KEY',        'a^Y~A)8~&.KwN~De.fE<G$g))a~Xo@$X*`>x{tyf8O.kvER-KIvPM@=VzKwtJ-5m');
define('AUTH_SALT',        '4hh$xYIu1H cu<!/*l]!EA>D)&1VYWiogY*-uPNn|z10k?%u-=h_`5 }Ay1<,glL');
define('SECURE_AUTH_SALT', 'T%r{6.YSR#Kw+iWl{`4*j9WSX+#>vr^+(/kAH(5-v[k fg >>%Yfppnd-T.-cc3m');
define('LOGGED_IN_SALT',   ',;_M@{g9sLyx[%eH<q0KI0(F BMi2m?-i77/?3cOM`({E^4OQhZ@+{Uqv G#?+./');
define('NONCE_SALT',       '11|[2[K&Rmivn!y]m3mV;v%@AJ?tN6Hs+a8+kKJP%>3=hKY|>3g_6Lg[`(f`Yib-');

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
$_SERVER["HTTP_HOST"] = $_SERVER["SERVER_NAME"];
$_SERVER["HTTP_HOST"] = $_SERVER["SERVER_NAME"];

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
