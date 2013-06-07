<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'campiers_wordpress');

/** MySQL database username */
define('DB_USER', 'campiers_cameron');

/** MySQL database password */
define('DB_PASSWORD', 'Summer9(');

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
define('AUTH_KEY',         'o b7=Ya!Le}}+HUeA#<c[iG1U}+K: ?]-s|IAYkC+KxwHQ:dQKH^Hf<AudqEV-?P');
define('SECURE_AUTH_KEY',  'rx?;_>~O$Owv[C2m )QS;x|{VE&a,Wz[lLo+?$v+[YvUos4a@nZ7-<HTRl8E+SHb');
define('LOGGED_IN_KEY',    '_S86~xU(HT|vZDV-euY!} ;6#]A`muYwnp_/3}nsnA6q>@p`<C|S+}4_-eim986U');
define('NONCE_KEY',        '9CG:ET~^Hw*q-;}QG^+Fj-$3zN4#jgb #o`+{+3uq-Croq&~jwSQ+E-!%IGE5ZG,');
define('AUTH_SALT',        '&xbA1UFmU{}%[.W}mOS|+bE2-Y~vI>7!@OEb=Y;B(cD;mLn}cq&|3H7/=8{FYOIv');
define('SECURE_AUTH_SALT', '0 9@UwQ_aV7cSv+7DY*-GO&N4_-N-xXO5v{MbAVe+FrDil-OR+[Bgy8w/%s gTRt');
define('LOGGED_IN_SALT',   '|Ns.%.&nkrV(n#u[:~!E-e|,3E|H4<AL(4Ck0{5[ZPxOI/|9=LJt+w*2 }dnbOjT');
define('NONCE_SALT',       'iD^nH?x2w:/SuF|Ul~+ {KB+zH:uMurw~K{@6orO!8*e~`R2*? j#:bPwr{P1@_6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
