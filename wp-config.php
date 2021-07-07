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
define('AUTH_KEY',         'hOoqGmvy9rHzfix5nGawgvqDoYA6ParZAgV2K1QHlT6uT/KazK3gwmwot5fKu4EQFO4Rb32be7nbBhxCd8LQhA==');
define('SECURE_AUTH_KEY',  '1f+EQz6aTETsENCOD0tMHC2s0ETNOn1ymWmAfFOZi+/Wl8RCj8E5x5uz9yUJN9yMZERu5Ksz5/z8I5+e9NYI6Q==');
define('LOGGED_IN_KEY',    'hZt1EaejEeI0XBUFKD+39ecpq3Nue9h4ixDqLK2N7c6CZZCNFSRoox92FMP+dY/oY3O3gdTBW3qDslpHB4QGaA==');
define('NONCE_KEY',        'JuFeSv9fEXuwn19/LTaki5UWdk324pOZS72xgEj+8uzMsABXGEIntXELVnX/P5v8qcvRCcSUPteg25LDIJOnMQ==');
define('AUTH_SALT',        '2xLlXz/+KYmjSJ9LNg6757ZTPKhkd4K9dMVdyCWm+T0U27Q3n0ke7t6Vijg7u/q+1VJdYO/seZzOfyYHzPlBsw==');
define('SECURE_AUTH_SALT', 'levL8h4xbcV0hsZK2hNre+EPEsXIPNBL/ebIIUAm7kO3rplAl3C4izczkEIOVoBcQFGHJXQWOzcCFxZ0oP0Reg==');
define('LOGGED_IN_SALT',   'P8yUfB0gBIdOxvEnd/U1psCRhiQnT2CQiA8SpFYhrbufZ5kmnSlyU96g0eYWVAjZnWiQYXXeL36L1ThGpKmR0w==');
define('NONCE_SALT',       '4Sn4mbnWZEuz89Jqyil8ETy9ZFY/vDUIRuVeW1C6euxOCwiOOxotOAlxIMtzDJmMaxqd88bRwTYQQfUwYCij2A==');

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
