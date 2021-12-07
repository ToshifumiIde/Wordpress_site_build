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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6drm1NOy0A2vWyuqzYRQu49bLWt55I/gpLRUkhVmcXqfjjTsePdhI7bSnNwxOB7CwHUJjU20AEP40sim09L0Vg==');
define('SECURE_AUTH_KEY',  'VDEQ0Bm+keos5aj5klJemASkvkZmZg7srWoVF1PyyA7EjxEVeiyl8bsphlnqwPB0tfC6eqSmMFm+YgTXUAfN5A==');
define('LOGGED_IN_KEY',    'oj89XdmU6hNfMooN0lWsTA9xcnpZZR8uJ7QZM9CxHjXSO6hMvGP3fhePqGEjWX4OAFv3bGTaNO7eZuVLb9zh4g==');
define('NONCE_KEY',        'pKGQDjosw2MkDeH5EHKYWeOZvmzh4jveV9lzaCW5PjqEXgzt2xBTR/TlDH7O1XLq8JbrvwV713BFTw7b318tBg==');
define('AUTH_SALT',        'hDhaRqGU+mQNMDUxvL9YEeRhEffZjlui8nfC95JmzTPP4/3l3w2pIOkF7xfCkNW9LKLpBafShB1SrnBo07Ea2g==');
define('SECURE_AUTH_SALT', 'eEASXKq/dsrV6xYsTm0UtS7x1aU4rrCgByvcE6q8P+xBFcNAMfgMvxFd5EKDhuUJWgZsZFzQSMz45Z5nU5FDLg==');
define('LOGGED_IN_SALT',   'koJBMHkeGOA/J1abMa1wTfHudzknItPvVCy01HHDFAPScHiB/pFieHxIZ7n1bEyzRMA9HxzTlZMxWMAgNXcqDA==');
define('NONCE_SALT',       'GnpmpW/gWOKDYN2fOReOiJKkDK6nj2wFFHQM9iS8UrcHrUG9Kuk3D0WnUfMWFlaN01OmPYMYeuN4ha5UaKqrkA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
