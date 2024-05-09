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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pinnaclepartnershiplimited.com' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'gCV[W^A~0h7Zg]f$piM/<zC0YM^}-<I0h&&(Z8A{U9^774F^E]5|;M;{Ox]Hf3,{' );
define( 'SECURE_AUTH_KEY',  'xD+yj&px==+o9h{H,2Nkq=~H)<;1pMW5F%^ D{7-?8wEAd~YW h-)TeL WQJDnIX' );
define( 'LOGGED_IN_KEY',    'MQ<;.%R(!`JVqblf=9VeGn>l8uoVhJou1/Mnj$E9{2<l726/l.:rlnxoSG2ZJ3)$' );
define( 'NONCE_KEY',        'V7C5C%.X*bWkLb,m)r)3[]b[Q`guof<Y+W(A?Tuh{HLFW2pbi!h@cn3SK#5Nfx(4' );
define( 'AUTH_SALT',        'b|7U(`/E}rCf41y@qu6A.<E&8.e!kcd5Vzn*az^Ja/=,e;ZrFF$&*T?ELuO}=q!f' );
define( 'SECURE_AUTH_SALT', '3bb4oM.4p5I&9E2<QYM@6]WAv SOBK@aJ(h7r>&D.qKWEMkLS[Lk.>i5e Z]MA/[' );
define( 'LOGGED_IN_SALT',   '#D{xUz6+jkC1v:n3*Kj3mjx^tVH#EfdlVcv5<j4!i {1PI<&to_qzHF}#Hppx^-)' );
define( 'NONCE_SALT',       'AV5Y5)j8tZrtoqg8%M*tH%4@uBoJ*s<Ey|1se?{t&{^ODbw:D!tgw`A8TpXHU@9#' );

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
