<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'NHaAbYDsN35dv71nzhDj1eheZKwVkQH6Xk5nGYVjtP0MuaiCcd8Qwt2bLAU4IUvi' );
define( 'SECURE_AUTH_KEY',  'Xlh4f5UDb3ERfOSPnIreomVTUXBxhNlUZJqBmyNUvxo96DpP58QTyoxEALu0kPqx' );
define( 'LOGGED_IN_KEY',    '8fMlX92hVH418JuVdx7Heok1EVucbsihd7sQM2GLrauMMonkRGtdk6I8OwRKFllj' );
define( 'NONCE_KEY',        'HoOi6S9WDTZRmuGbuDg9iPxRejxRtgzRBeDhGDUkl2GAxCGxQ7MwLTORm5tkX8V0' );
define( 'AUTH_SALT',        'jnbkCh6NpJjimt74e9YWu9lAYPn6dhwaoQ1dZbk1gdpWJBRSLoJh84AXa4HHVBTC' );
define( 'SECURE_AUTH_SALT', 'ijEcWs0cPsmSC6kqmvjbsWdzIYAhoIta0iOm2259cInaULzEVRtLpzDjUemy0MvC' );
define( 'LOGGED_IN_SALT',   'ncmIB0MpBvB3i0RPVOZaQfhCPCeNwvUR1V0CM5fHBwodWjfG182oAqgoghdIxc5v' );
define( 'NONCE_SALT',       'Avj1oQJV2byIm7iG8LihbZnRixXGu4JQXylXq1ytbCQ7iRvQP9FkLWJzjKbBBMV8' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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