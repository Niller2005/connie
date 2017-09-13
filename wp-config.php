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
define('AUTH_KEY',         '3v.GWSe#.6LeVom|7*VZ{WKJ}1q:RC 8&XuS.!8rH&B#f/2|94wHe5Xsn>{*QZv=');
define('SECURE_AUTH_KEY',  '&z]xYTnwb^N .rGvPtv>zk@)0FKG?>/o^aV;K0!/A}BIvc}Kr#x<c]ho%WOcDL|u');
define('LOGGED_IN_KEY',    '~=S!0&Ju7xBtrk)5dpk)[<!HW. 6k9zd}GHikJ;<O2[@5ht+&EI)@WFbM#/Vdq0W');
define('NONCE_KEY',        'qoGXKOq$UNd#4`IYaLM}Y+T5sjbAu1G/qqZH5Q51iiptNg%A&<iv=K^w.AF%041n');
define('AUTH_SALT',        'z9|_#N!mVLQRezzQea@P`0DgxBI7YNjt%N}YU@}cB/|v8/z_030~_tC/6VmuU|cZ');
define('SECURE_AUTH_SALT', 'Wx!?*z9i:U_`4MMp5~YLx8Y()&~[utVoYh]RqicT`F)<p%f]RTh#8dNRW`%ug|OV');
define('LOGGED_IN_SALT',   '8T<@},.ofaE.~2rNmmC8v3XF,2+EI29Gk!M=2xEr./fzlw6(Q16EpfJ<5QQ]Z2i!');
define('NONCE_SALT',       'H+h6Z1lp@ ~M*2 oS(EZ2zKyH>z78X^`b4RtqAu.Z<(Ca&LN^;[ge_].syho>R-!');


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
