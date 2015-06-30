<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'coretheme');

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
define('AUTH_KEY',         'MoCc+sL<G-oG2s.m@]6aALw/@7q A, @>W+IT| AKOW`it|-j63wq{Dqk)=EA|z<');
define('SECURE_AUTH_KEY',  'h6{wv2TGR3*Y)1[U!vc+peD_+d37-8AewYLJC,^0Mk3X4KZ+39R8pI|$)D+|G`1.');
define('LOGGED_IN_KEY',    '8^N!jo}p+kbb- c?lW!(bY-PF#%ZzOo+CdqprxTu]I7rL:Wlf($=mvp?upM|GG?+');
define('NONCE_KEY',        '{,)~qIojqQM|^Xs1<.^M#e(|{:s3DJKvZk3H8<oC{8rDWG)ryvc>w3TRKcHVL@;d');
define('AUTH_SALT',        '}bc,vggA+T`I2/lW>JL!Te-5>)OH5jq?--h #Y5)b^V{Y;s}|T]]Wd3-z-RuFgZ<');
define('SECURE_AUTH_SALT', '~7.9pe2&?VpXmj!-~A4v:y.Dm~K,cYy=CS@.bg6WjZE]vLs:/^~|G,&`o^1z-L`v');
define('LOGGED_IN_SALT',   '`x$=|h-<->Fk)J-AHK-K2CxV)<8kB~;1>o-cCM4^jP&+>*~D2RY,*}O[/+3*!V/D');
define('NONCE_SALT',       'V;H#l7Rn;p`-{PiZU/I]1)luV;YvB<RSW2*`H!Oc3arQU|%)Lf$)DJ9P/ :`?2Ni');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
