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
define('AUTH_KEY',         'KF4h6Og+3iJ7jglfeBRTsEbwWqVxWerfKVratqW9cyBQq+xLjD6cPmi69Ro7SRwkHr/0ZV/wYmEKhHtFNtes/A==');
define('SECURE_AUTH_KEY',  'cvDQ5KMoyT1Gn7nPgWWyX8BWd/Q9I8JsFOvO5TRsxXMcI8f6oE5fwOEp6EZrwt4fwLapr1h67PA3yLzq7mrtMA==');
define('LOGGED_IN_KEY',    '69P/aPUD8jDPWbgvOnoTtRZytJSf/7kwZ3jLVx59P3Nn7bcPiusFJxxmB8MAc1Q057ZtKto5dy2e6v3tEobhDA==');
define('NONCE_KEY',        'jja2b9/Q/jGC5dRSlgBErB/ytoVnDl6J7sfLil5PKXfYmuVpxE2N9MakwTDbxkrvUZapvO4g26YgfECJ8Giwng==');
define('AUTH_SALT',        '2+wcHYoRTp7Xe/tSxUPpoNPLZIgHEdCiKU7a3N/GgUv0ku+L5AqEoc/2Bst1eneJ6vbZHJ9L8wYiquWHVjwcuA==');
define('SECURE_AUTH_SALT', 'B/1p6+AC9T1Q1FP8Cv3lD5vtAB1tQv1HpyZKFI4KYHY309IlDyOL5Le7kK5W1XMmRL53mafe2lbBbdrhViwwFA==');
define('LOGGED_IN_SALT',   'yQ+lpsIVaiC0R6/sBpYgK+8QWiTXals8wkytTesWWJtyZdgvrpqzHdhMS70RgO745BN/B/cd0sBw02D80tSZrQ==');
define('NONCE_SALT',       'EcAuCu4r3Gmo/CGtHBAFpdbfl9z/U2enA+2NLHucvKdlvsMsS9g4X82SPUJDlQetfrt3ZD5BpWs5hFE6RJQnBA==');

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
