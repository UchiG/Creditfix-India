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
define( 'DB_NAME', 'u133866772_sQc5J' );

/** Database username */
define( 'DB_USER', 'u133866772_IsSsZ' );

/** Database password */
define( 'DB_PASSWORD', 'JGZihPMsZw' );

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
define( 'AUTH_KEY',          'QhxD%.)tUwvg_u+wo!khC;`}U4M$}c4goa[PLvp*c2pzyQ=@5bxdReapy`QVej~r' );
define( 'SECURE_AUTH_KEY',   'W|KgDXACB:yLGl6)PKE8e+,>o#k3202VtyB_|7<=7^xAU_w1!(@fF7!O3`Ai6X-^' );
define( 'LOGGED_IN_KEY',     'S`{|h=eOE-v$o-;B-?q;*GQ{Cl[s{Ig~O4SrYzIf4[,E9qO6KmshDdF12OD#^u!(' );
define( 'NONCE_KEY',         'NSNpF7G)RP08;hu~r8JPN+_6)+|,*KTpY{-@i e6ld4GW4|x>0X]Ga<Z%9X#J0>g' );
define( 'AUTH_SALT',         'J%[%9mVte`p]YIv  5P.-<7qt}V5T~^!j*yLjwk$FfuloCk<qB-SvCf$r,^~s!@z' );
define( 'SECURE_AUTH_SALT',  'dDlQke,hF>j?U<![>2,a4lig>_J2Jv_Wcv+AifK^/$[D`kwq#AzL/CQ<xHIl+{T;' );
define( 'LOGGED_IN_SALT',    'ZR4KT+`3yNjsf2}YY{4N;LF<oc,YQNH|w%V9OyB?}8KZVp_nBoNaM-DIKVWhS9m:' );
define( 'NONCE_SALT',        'C)087A|c_HwQ;W}ycJ%o-cm|Fw, <9qD^s9=Tt;`^FowB}M|wmtN6u@R*%Vs@Lj~' );
define( 'WP_CACHE_KEY_SALT', '|`r{i`0n8%c*% UZjaN]U)u. *|cML2_5:7yr/Fqp]*Vy$-urp.HR!,=$hn=yL3Q' );


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
