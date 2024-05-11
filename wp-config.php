<?php
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
define( 'DB_NAME', 'Fatmaemir' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'zl1PHeUX8dBH0y8dKj2va8VuYf49Yvb9fwE0sHcw0EaYH04VVGq5VlTyhrv7N9Pt' );
define( 'SECURE_AUTH_KEY',  'v0y85wgJdfPjJVg0UbAoQgbhv3AzEPkbih0GbfFlCbCWsHEA9eZQfS3wFaBsxLRd' );
define( 'LOGGED_IN_KEY',    '8EGIrlbpMK0WC75QzZCA5GxunukdO8NZdbC4YneX40Qc3Bu2Yg6SsNiWByuTpb2G' );
define( 'NONCE_KEY',        'NPvrBsMusxeM3IlN9CLvAQ6qAcC2ROBfX4utxpaOuO9Bt35IG1sSuqV52ODVE3Yp' );
define( 'AUTH_SALT',        'zuloYvUdhivpLZjB4szxxCpVhjgyh8pFWnYqifG3WyYI0LiLciNhf9DganCjX451' );
define( 'SECURE_AUTH_SALT', 'zXzP96WpuFxcTNVN80eawwQq0om0SPSaO6SZOEx7pOsPJQEEhxF2oo0W3XXf59S1' );
define( 'LOGGED_IN_SALT',   'GKbxTglrUE8n7tttZt8g6UDlH1A4hn2zlLBDVPbETt2dZZv28a8Ec7q3ThLkV8dw' );
define( 'NONCE_SALT',       'f9yfduyq6PdT6diSauKxIxEfzyJ52Kw9Edauy0wTp0SC6QC56HFWKTl6bEfundYP' );

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
