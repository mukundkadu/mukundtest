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
define( 'DB_NAME', 'mukund' );

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
define( 'AUTH_KEY',         'C{f1`:1Dt$Fl:*9VQDLtd,kcZ]DA=+wQHKWo[L`H{Lo%;HtLo[s6SaZ`&gwWq#S7' );
define( 'SECURE_AUTH_KEY',  '>cj?<w,0AL >7@-.yJ5oPu^J3%nv$*Mqhk6,t|6O-xLsRT@?]M$rO:lcF4/(91!;' );
define( 'LOGGED_IN_KEY',    '-h#OY%^p!aYs*c/a$#hqu(48B~>;Shg1WJVBZnPN<=F2(l-}pl1v};I}UiD2^mX)' );
define( 'NONCE_KEY',        ']>NJJ[V}! /|9jyh.JU.GdzEAQ/FOBtFWf-38*jv#toX5v@d;N1E,?Is&sKEOY>A' );
define( 'AUTH_SALT',        'qr#xhj_mYw_e09Zj+zLxX/j/5S _V`F@nfeU.k3!qC[ Uca:_t(r.ELY7!_uyz|=' );
define( 'SECURE_AUTH_SALT', 'nqj+BO=CAp<%Ma(2(:cGT2yzQ=m=(yB&xj$pOw_g5XR@>3WAgFhUkxVzd1IGZQ5R' );
define( 'LOGGED_IN_SALT',   'x1S08_=_Z|*6RAo54w4TU>RP1B/];)p.GR2pRDx:I07#Yxbn$r_=#tEQ)+IB!=Lh' );
define( 'NONCE_SALT',       '7Thv+.(#h@v@C~V7b]}P)zA$_1.D29zt2gx-C2uWLhJzU__+G2TDq&w&#*s8-O3g' );

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
