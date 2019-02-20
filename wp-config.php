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
define('DB_NAME', 'wp_edu');

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
define('AUTH_KEY',         '0[&Y`(HPkV2PWkr,,uA|W(-pVI1R TIO[t#_t!t(8UpG|%Q_a$^p ``!a^m?rD.)');
define('SECURE_AUTH_KEY',  'YWK]EO~/O |o$`Np;]ZV1%.r9j9S]xT+~WAeB=%j<+]e$t;6$syr kEq9Kb$=r7O');
define('LOGGED_IN_KEY',    '[9.*<Y:!<1mr;?<~nC7A!W^GpRe<vuhbHN!~+eWFMAaQtPM-_:xM*h6SJ?$k_Jr-');
define('NONCE_KEY',        'OWHWt_mjlN&){`>W0]w{ySy0W&oO>BMAxwd4iOZZcy3Rf|qZP`FFEc&C9s(_ Wda');
define('AUTH_SALT',        '|LQ<3Nc[9,w3tVpB)Mk$$<%H1seVg!Hw#,#`y2AVf88n/D>nre:Hl O3H6~xP-%t');
define('SECURE_AUTH_SALT', '(whw[zb,C.CiBO<L|Y1q`!}}!Qu_(qIP8Y?)IvHK~(r0XAere/~k>6zraKSC*TF7');
define('LOGGED_IN_SALT',   'O&`]_(pXW(5b8wi`Pa#J%J`?8B)Sx(_t3z,lWj3hc].KBUKzZ{+)UYX6A^%nopvP');
define('NONCE_SALT',       '~2yR+QSKWtCQobF&K%`ohd~q.Q>WB*nE5Bk38#D*AM~cW+yJpHMWWTl-Ds!{_=E!');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
