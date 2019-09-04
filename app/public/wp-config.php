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

// ** MySQL settings ** //
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
define('AUTH_KEY',         '8h8pVksOEJEyZiHTB59cOjbifuMHk8TSUysGpp49nXBXH2ntFEf6BMrH4usSzXCHJjK4Mxk22KOiVKJzFwmjTA==');
define('SECURE_AUTH_KEY',  'JkR5KQPEVAh6Y5VRU1/ItZlJkaVWafcyCjZGWkpxPvbomfSYAozQcPvwOX4X4xkwjudJmVio6Mxfomc5MWCN0Q==');
define('LOGGED_IN_KEY',    'WRER0S6r6sZ3n189OiA8H5unZGXQnA3qwqsP0PPzd9w6/FCEopU+Yi2n543R1eDFCuf9iNdvh1UKnRWy1y02dA==');
define('NONCE_KEY',        'C/qkki4g5W3g2y9xhlhxuZqsBvFHc5n29qaa3eWkIY6OHXQfJ0NWXilKkJ6bTn8OAYy9/1xJnYqvKbsmSuwp5w==');
define('AUTH_SALT',        'DnFMyXlq8A8cxW2xScLe4Tf03febG0LMEnuwbxovXIJem0QnDb2oZJ09NFBFL9TWXsGIeA9tuSKSwNRYazqJkw==');
define('SECURE_AUTH_SALT', '1SlqLfvGjCzyXhCb03NdhE7MG7Rfw/oOBHjap7CiVPDDuWhKHc6388A0GYYiilxtx8jv85D17mgnSijkRRlTkg==');
define('LOGGED_IN_SALT',   'LdzP9GEoXt+5i0FEA0SaoE6lrTDvs4F1P94McSyqccnOilMa08p9NU5fmZKaMubWCa0PVQI7AYbD1GcvwDXKKQ==');
define('NONCE_SALT',       'TeAIlflFuMXEgpZBtypQQdiHvIp2kEHsRH0IM/ljAm7RszqFhLalIj/zKzP7094xBmrBzalxyG7jaz8Sa9ka0w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
