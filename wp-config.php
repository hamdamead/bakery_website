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
define( 'DB_NAME', 'website2' );

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
define( 'AUTH_KEY',         'Ny@sjv7@(N{+:k17X}DR[tiXqr-^,Lh +z_tE]o_S7+KLe9!8jVgh<OO]dYWnix.' );
define( 'SECURE_AUTH_KEY',  '{wBMd5~R+x~&-b)RpOQGs0/cIq9 z`A$BIO*affyc~Z(32taPJr{W/4m&BlWsm[O' );
define( 'LOGGED_IN_KEY',    '+`}_RL Eacrr7}|JA@th*:Lr*8aX8n|A(R>wiz%if)zJy6{hm9k$yh$9.zf&vAd:' );
define( 'NONCE_KEY',        'p)}Le344/M!2Xvz4l 8*PyjDg--Nq&~c8jHpfc`B F.d|c#%R]M8<6&e0GxuAo.3' );
define( 'AUTH_SALT',        '#Iw+-MyQ0Uzt%sdH;{bm.({^<!OAewng=7CuKaf_(#.>YbTYsQ[:>e45!g|#xKie' );
define( 'SECURE_AUTH_SALT', 'EtbEyz0$lXJOe,{3,r|q?x1Qmt=a.-O[56Vms9gQGBFytUxykwxc*{k!71+0,IK#' );
define( 'LOGGED_IN_SALT',   'WkUuN!3uHX|XLcn( fw5zeru29H4#x_-}%T%jAE{J0rgbndva8yY8@^ZLTlimN^x' );
define( 'NONCE_SALT',       '`=d/WfU@v]c#x=1.b8%>2BJF877E#h5Nstj9#`nI.y7b*a!$d$6ka>%]l~RuKr*A' );

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
define('FS_METHOD', 'direct');
