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
define( 'DB_NAME', 'ghumakad' );

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
define( 'AUTH_KEY',         'fyo+Y] l.$.oc?AWLl!K3%$}ey9V{8X.sqCKU)*)Xyv^!Jw?w,2kNI*op&Y6L4} ' );
define( 'SECURE_AUTH_KEY',  'MnjrE8h:(PF9p|B:MP/sI4=v??#v%tE+|%-6/r wRT1h+e9TPRL-(__N<$yU2n!,' );
define( 'LOGGED_IN_KEY',    'H0XyB2h&`F3:bCxNo8TTl +;-V!K,iLRd?ti18GHbaMq5-a wWh*iU<e]~ H.kQ5' );
define( 'NONCE_KEY',        ')p= 4s9=Z/vN)n*xo`bgx7QDWF`$tWla$Bh){nt,4etYX}Z-E#.g-,BM[++g9(+>' );
define( 'AUTH_SALT',        'irF+T=n:w<j`(w!@.C278MF)01P wFGY=y|~nQA(*gKBt7euR0DOMy(+qu .xmkv' );
define( 'SECURE_AUTH_SALT', 'Q&xkpC=vfE+^_=GkU*`7q[#fA@m8q:@E_S>LyK8I:>vFLi.3xz%{KQsbf`n,SS6.' );
define( 'LOGGED_IN_SALT',   'eDG4|iOZxa47m qQE1.rNzQT)]V)_)Ro7^TB2KP{I|;4Pzgk]+IMwl@;.=qoD&:B' );
define( 'NONCE_SALT',       'Bjz3F=-$W,/g+wWWV61&?ve=-EB65;e]sOTc+U1oF$e>U;~XX!!;I*^Gk}WL8a.b' );

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
