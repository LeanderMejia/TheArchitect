<?php
define('WP_CACHE', true);

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WordPress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7OTisMK1bLUWe8sLsXwy6vAt1L6L5dN8luS17RDvBg0Un4w3sQr3rY16Vzlj9akS' );
define( 'SECURE_AUTH_KEY',  'ZglXz1hLrwMKa5Ygf8cHCGGSfvWcS3KWRt6AXSNgwGyqjVBsOLe61pZnWr9NiaM1' );
define( 'LOGGED_IN_KEY',    'nqjujSkaPMm1MvLLOM3UNSnBP4josD2aLH3VuQR7qnDMAyEXa6ExY2WZ2p2DtB35' );
define( 'NONCE_KEY',        'TVEiElKorEvEtQuLc46CyypK5aOTP3XijRNkBAHqjvMrwfdVgPESB7F266oEoVRE' );
define( 'AUTH_SALT',        'F4JGbYUjuMN5lU5LbAygue0KDmx2Q5febUbQTQ5Ieu8EM4MRSlQ2v6TT8eIYO3Lf' );
define( 'SECURE_AUTH_SALT', 'BqnUdgfKdbcBl6MOfccrxdwOJY0896zcxsDZrUMkk9niODN5btNXk5Cc6dNOA3kd' );
define( 'LOGGED_IN_SALT',   'fkWvFI1isH4Lqiofh9ShgjA0jmIZkhUDaDftrwKRozXN6lWc3YTBXOakPihybwpv' );
define( 'NONCE_SALT',       'ur5bVMN71FObtFXzrMlj651nJY0kEPyErucfjVcOqlLRV7GLIqz5IPKRoLJ1RBtE' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
