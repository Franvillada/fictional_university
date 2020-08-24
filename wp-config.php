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
define( 'DB_NAME', 'fictional_university' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'A<?o!H~X5oV/1^w.afIyaw3~JIdn5SZ]XFv#Jy<y,/JQJpS~wD?:6jLy&U578Z7F' );
define( 'SECURE_AUTH_KEY',  ')FY4jfy{^vIvh}%e4C@gT6LiPbEj6BwE]>,ZAggCi|^R~vF]Unn~t)>u}UVOV.NI' );
define( 'LOGGED_IN_KEY',    '_tvwX*+nyen;93rKpp5Oa[uw}Gfg6#fBsu*51ndLl)/-x*TxWylf^j-OdK1?O)7y' );
define( 'NONCE_KEY',        'STNw2:OFwQsb[cWXF6snlGEw3#7dfO><<I#ZO+eUYuIf3;#g1?3!D^@w&~`Z+i9=' );
define( 'AUTH_SALT',        'K+FuN$.YP/0*? n2Tz;n&%_5$TLjgA$9$G*/:8{XnUVlx0d$k(yd(!GvN^f#^&R8' );
define( 'SECURE_AUTH_SALT', 'bVz4!?a^W},0Koi>@q5hdX{@]mrd1uC5X?dT%1WcDu>wU.>O`6UG1D^U-GNlL9^q' );
define( 'LOGGED_IN_SALT',   'gFgGmn}.Y7)d>~wn:ZwOE!1XqF01n>zuZ ;->tER02/i%h, e?:<ix/Ce*b?yZ&h' );
define( 'NONCE_SALT',       'suA**4(&N#q7y_OOyj29CTE+M*~F4zq/O/ENQ%SO<gX|sm^Moo^?Oa3BD1AEi&Q/' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
