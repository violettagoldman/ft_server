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
define( 'DB_NAME', 'ft_server' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:16' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tF@6ydH[f]~J2l){l9o|_GK/y.xkE_!T>j&|%Mb+<l.IjaS}-]hJC=,kZ{$]D^W|' );
define( 'SECURE_AUTH_KEY',  'AJ{}YxyiZKP*->3X=$KyCik7u-0>cE58%P#VWk~:6 3S/JLl<Y8GmXo9E3de!V8]' );
define( 'LOGGED_IN_KEY',    'HZhIP0KJEBOyT^Cx~C}2vv&:]jyf0Ispr@Z3~Me!cD7|33mj,]OPoW/%syfRJyF@' );
define( 'NONCE_KEY',        'DDZpxD4`oL4F`B!55?V(xCm:5WiyeEz6o<<tTI2g6RjX<$Ze1/#BZdz5K+@ulo[6' );
define( 'AUTH_SALT',        '3vC#zEC6vj(%fu;JWb<!8QTlHj1.GFo^jp6SXW#j1d{ $C!6J9L7!Je{!bIr60u5' );
define( 'SECURE_AUTH_SALT', 'ne]?~;#wlUQ#``Zi&lbE :RTZzB)J%XP7V3g}3j,T88NAl&=RunN i(sm& 2n$_[' );
define( 'LOGGED_IN_SALT',   '#roN,`l,62$05GPq`-M B#S4Z7oTkY|v7Ynw*%{M4naT5pi:n/zS0XDx!/n[rez*' );
define( 'NONCE_SALT',       'NLl3,?EOuj]>`DAt3qsey6VFQJjUI/g/sx^v~P)e~xWu*DSuLwoc(upZ?#V;S7y ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
