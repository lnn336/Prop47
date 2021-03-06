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
define('AUTH_KEY',         '5qjW7xjoct2oUJcLNUD0INNdApnp7Fht8DEJstYKkHvpBBomk5+u8cdP6E3jCKmFHiyWwRTEYzwZUz0iMkHxwQ==');
define('SECURE_AUTH_KEY',  'TQZHvSuLSnASXduabQUJc98NDXvGfzhew+YMCjNEH1LASHd8gOSpj2riUDPEoG3y1pKTATSx7zzyjzceauvXeA==');
define('LOGGED_IN_KEY',    'SeaGC2g6xtSHJMvsTPc2EoNF0YgUjG4u+99FBs9bQBryzhFMZzGksQlYwmWAhSXgpLRYKdVVqh5N4s21y418lA==');
define('NONCE_KEY',        'ZvjquXVJVL4yUvqVSSYdeh/EO8bbZgVIOr5LGRt+Ff5Z02myvlRIomKzYhQiZ5nI3aUjGrcp3pOc9hPZd5TxNA==');
define('AUTH_SALT',        'B3CWRrZ0hurPg7xHA72oDAfjuvCa8MdUGrL0XrBa7Q7w05/DBhxEzj5ghKbrHPVEiGnEijt7zlXg43827kMLqw==');
define('SECURE_AUTH_SALT', 'K2fkHTVAnKmfFHC7gGDv8B/CcCktrhuU8yTEYXdnts6cQTt8SYO8FjBWxmmUnjzZalcGyeac/W5woBQMpznAdA==');
define('LOGGED_IN_SALT',   '1zPcruI/liLiNsRe30i4+D+FKSBbCnu7PdVxZ1C9bCY0jBOqBUadytXN67S9LuypDkIZMe4Xu+MzCuaYSWMxrg==');
define('NONCE_SALT',       'WZh2ELf1SWKJX32pbTcP4jC4KNjaspIGepEyETlmIO0Xpsidu1Xr6infWf9tZYtoVkbX2gDEsxRzl2B1h+F7Ag==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
