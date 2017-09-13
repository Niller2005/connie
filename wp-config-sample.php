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
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'connie1234');

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
define('AUTH_KEY',         '$:U%EMU|IG8m^om+-|0db0HjU3%~kxoRvVL`D,8p!4|7|P1:& r$]-Hv~CGj~,`h');
define('SECURE_AUTH_KEY',  'Eeo6P_C1|PhL`2-hB+a,+l`+/+Ct,Nd@-@OSm_7a+fahw.gRWBS-)Sc#IvqziGJZ');
define('LOGGED_IN_KEY',    'KeoW|Kq,!M[3`~OXs<FyX>@:|m1*M~fo4B<&$5A~5L<<BzAQ<uJ0l+1,L6jAOU>;');
define('NONCE_KEY',        '+odAfLTUfn&CVeGK7_Ny,uvYqk4-%/9t=|5,}-}cZQ?|tm;:eX-nA`:q:0[Z8oe8');
define('AUTH_SALT',        '-jV+h;s-egkw_y)dE|Jl+@_<od)^?:8^l]t++bM2;c[B9$<Hg/@GDk_cv/Dv,RD[');
define('SECURE_AUTH_SALT', 'wL8Cc)xAByq.p1@q6f-/e}f2{2>x oy4.0h3XQfW:0[=UmXV8lsO4N88nh0)l^2@');
define('LOGGED_IN_SALT',   '{v|TVi-/P+gqM#bi>Nz(PyDO>glrA+K( Kxi*c {2>Yh]fI7eo4{E3VY-pX[/H0`');
define('NONCE_SALT',       '$HS%h$H,;)w)F8<8,$):5e^Q~.{dUajTHzAuK+!d~suR-)|v<N-|/T/RnyfjvkWk');


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

define('FS_METHOD', 'direct');
