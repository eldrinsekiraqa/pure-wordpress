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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test-plugin' );

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
define( 'AUTH_KEY',         'w1NlC7tVB2i5MlkM6hyG48UZPwd9nz310BWhtAF7GkbgKNyBJkd0CBZt8B4YuTxg' );
define( 'SECURE_AUTH_KEY',  'xLBhkUnw5pJfNbMLG5siaMmPJOcT1dEKjxXWUlAmCbG4lJ9vQEB7PtIb7dkCoMxT' );
define( 'LOGGED_IN_KEY',    'nxmNEQeRdQORcGQ1zp3GodhxEhvbVEg8ZyKuZtmSyS3qr5sFjS6cybkLCdTwbkcK' );
define( 'NONCE_KEY',        'ojaKnF9sGdf3dwi10cVivSKnyzuXyiTR0uM0qfh9uJxd4Z2zqct0L44sCPba6ecn' );
define( 'AUTH_SALT',        'Hx4jGiDXDvdAajRBNEOfVpuVY6uVgMw83MDrqtWtrNI0pOuxYaHmbcZmOk3VaDFF' );
define( 'SECURE_AUTH_SALT', 'wSK6LWt2uXSgdPoO716tQNg2dVLKHHuHWlWw0FTRrVKNQCQyszWF6vCgbaq7VjID' );
define( 'LOGGED_IN_SALT',   'CQaq2K3MLDFHq7M21DNEWbJYNRicKeO69MTI3mndtVX1BydwrLnLiIM2wtLCaNQD' );
define( 'NONCE_SALT',       'DHPRgYUQE2e1KWcWrs7WpMRAoTe2oR9eJMWoMfFcyDMmSrR6yrg8RNzodKHQZXzt' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
