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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'KMmZxZh1wB{_*z 3t-jsb$hI,CbvXq=fa6x5#(c,Y)HOS5`Op*LB43eHv66Tcg2T' );
define( 'SECURE_AUTH_KEY',   'AmG`~(n[d#A%=%WfZpF@;g|X{D%z2MQ}f[x#j0A7Yn!a)fMs;RzC<>:SbH&xYD1_' );
define( 'LOGGED_IN_KEY',     'S)pgnLvc_F+@9xwtue>HKk%v`-FA!A;+h$rQGn0<R0)DTw}hOkWwQ5PAex=~ihaL' );
define( 'NONCE_KEY',         'AS;VXSCv2>jb D!F`-!riO.,VwWII,|r5btf-T@W~c/8Gf 9!THDh5=G:M>t({Zc' );
define( 'AUTH_SALT',         'q}dX-;cWP/GZVhH m!.s}`rbsyAfGhS6Jr]FUKyYeDhE&%*/x*zIq]{dK{7vq%fX' );
define( 'SECURE_AUTH_SALT',  'tR9@%l3ywl83&I~~?wu{DPBvS8?0UF7@VV;FqPK6Op@(&[q+2ObZ}4u2kK1sKa<P' );
define( 'LOGGED_IN_SALT',    '<h bY%ei6**m:*/xf|jM&>)AwC:XMo6cMxg=;MB^kXajWw#*$_fzS%/i(Gw{.N$p' );
define( 'NONCE_SALT',        'FsYM5!TV1SV27Cw.Lj#JKbRS8&f!.=7m}K2WXry7^[3!:[YV0B=|YmOgu8R:`hql' );
define( 'WP_CACHE_KEY_SALT', 'y1r*dNs6H.pHqq/qTBuV:xZa9?EUk>EF%c-cr;1$pL<L{9reDJeZX<Cs4l>p+Kx`' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
