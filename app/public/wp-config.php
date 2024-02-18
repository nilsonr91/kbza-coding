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
define( 'AUTH_KEY',          'Rk!$2:u&wYDj3S0jtNs11DKYxNcHt$CnpVJkm:MgBF)e2(}1*5B#;LL[dXb<TA`N' );
define( 'SECURE_AUTH_KEY',   'ja<4~ >]q_#CJE=Z^2m1+B]NNs?%5[/1Y1}W-v3fJA#IucCxyS]z.Pvj B3?z+()' );
define( 'LOGGED_IN_KEY',     'gtfFS8bWRkQ+ mU=47if2nwi)3:z3<LYfZG#!8RxT}NCdUvdJp^(+$~Q1ZqikAY=' );
define( 'NONCE_KEY',         '?cak/h5G6t[;BVd;jcjS=m$5t(e]iPar/0>:#kD!}!e$.:)TrwVJyu4i#4#(u@IG' );
define( 'AUTH_SALT',         'CP*X_#bP^kq4G.f!^PfnEc)WS{(OS&_6H^&#:*AJ:`/l[>9JNM[e$kA;>~tVwtq/' );
define( 'SECURE_AUTH_SALT',  's6c1H*!kY$:bWn}<4ZE=.u,1?R]Efaf=lGY4J?8oUJfA]vYnAGWLS?iw[6X8m]F1' );
define( 'LOGGED_IN_SALT',    'T%}%bXR<q$Wy}d6LG1z~V>Rw9O_LJev}BaC=F=w2(wp1TXu]Amh/bEzWrP!A]c/~' );
define( 'NONCE_SALT',        'FATxcN;i1VlQ%y8tAYWAFw:?v.FDedcNDR9T3}-i{,)Rsk0k?j~xpj.8}O?jg:+u' );
define( 'WP_CACHE_KEY_SALT', 'UuSEM:koM~{bY3vT`wF/C5ljaGpBbZGIaYG|]mUH/j<0_{@e~opxGiu(s*Z^{o};' );


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
