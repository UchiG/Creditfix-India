<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u133866772_kNlRP' );

/** Database username */
define( 'DB_USER', 'u133866772_XS18L' );

/** Database password */
define( 'DB_PASSWORD', 'mdnw1UPZf0' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'X)xKJ$-Rq]S&[2T+O:D/{Ul,,6jx7vA)(7j:e[=[R24$Lo#n+lP1/PE=HiPoobw6' );
define( 'SECURE_AUTH_KEY',   ':>2^p[F>b&2-_l850);$b1T<qf5/c[A=?At%[%*9pbwcg!TP]I)ZNO!vS;s^xw*S' );
define( 'LOGGED_IN_KEY',     '+FzmE!].q1Bk3z[~~D]bl!IT$@yA},NZnpLO&DgoiD ?cKe^cu$fyki7Mpr*hm~p' );
define( 'NONCE_KEY',         '0:z./wSh4Tcp-1dV*-6 HA4+Gh9x/2WfIEN4!V4q`k1%QdtT69LX=BtV4!T<H{7r' );
define( 'AUTH_SALT',         'AL(>0]~@#.Vrx3-kR/G>r1Xe6jq(4z5@@QlfVW{BICT9^$CO)$[D{<$g.:kOLZ_Z' );
define( 'SECURE_AUTH_SALT',  'qhaz!CxVW<+(9Z^fZU*,yRsw{[i*c*9N*n6U--)cgXcli.l5XxSmT2EP170l}CTk' );
define( 'LOGGED_IN_SALT',    'XZh$lJcqapMEF]/Jj,|x7pz|] Q<4ey.+jH0N{2_Y}%4ad-wetIXnJheGV4<Jpvi' );
define( 'NONCE_SALT',        '4-yU2uNk,A@Tb8GQhw_*a%(/Y>$JA1tzt|yVeZ.4zu1vID#F>r@[S*{^I7p;Gba&' );
define( 'WP_CACHE_KEY_SALT', 'XCs;$KX0E]; F?nGct#%9KnjC |)QE6#wl%Q)`(TnC3W4&]yU9Ggqub^ `d?>hE+' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
