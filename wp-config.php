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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'netlifyhub-2' );

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
define( 'AUTH_KEY',         '4l<fMKJ&BgYlmLQ3[HS@*_0UvzeZg#h}EosAV)mqd7uYDL=a|MyK#cO-h%&I`{ZO' );
define( 'SECURE_AUTH_KEY',  'iO.6qJ2)BmXHzH@c;W<he6F`WDJP^mKFjUJb5[-IBh&Xte(^{J/=nzi+azcW.-og' );
define( 'LOGGED_IN_KEY',    'g =^V>;7_:e4y`WO0KJ2M |Dxr41*[$sR^-Ko!e5XRM+lr[A<~2sQ8|<Wu` QbZ$' );
define( 'NONCE_KEY',        ']s#L,lr;5lVRWp=3amC|u*f.O&1rcbTw:XV<ixs>EAZ)<Q;~`YR<~qY*a<gy#~7|' );
define( 'AUTH_SALT',        'UW1dITH[RMDTtme=kIuw`K8/nLs[2StX<i-{NG,#~dNfBDu]2!Kt]rdp#(Xd_1ND' );
define( 'SECURE_AUTH_SALT', '/]v}MMF @H&m$7Z^OSC]| I%XF{x5DFcUQ%!A&27FXNn9K:IqtJdRc@X3h!V76{ ' );
define( 'LOGGED_IN_SALT',   '^$yEXP-g-#{@ZgDX}wyA^ba`}3y)zu:FEM6UWG&@WJnt560t+tC]YC$41F*0uvJx' );
define( 'NONCE_SALT',       ')48{LD78(=@]i<C_LFUI*~hS`^SXD^^15Q|5OEm?`EH#L!D2G8)BIP17<es15_.t' );

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
