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
define( 'DB_NAME', 'orangdc' );

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
define( 'AUTH_KEY',         '27L(>,V)O^=*|>zv5cXpS]y-B<2w>fXD(.aZ<gY_N0HQCRl4p#O>7JQ3{aVA?(QK' );
define( 'SECURE_AUTH_KEY',  '[3DNk{[{Pr>p`5E]<Pr<e{q$x]]Ij@^^lQz0Mx9hfynk7dwyl{(.{Sku47B+`3tS' );
define( 'LOGGED_IN_KEY',    '`i,_<W`g$y#_&X^q)GgXbd-eD3ul60!1PQ<-NG(<Jx|C9QY+Z:|][_q LVe`4Qmy' );
define( 'NONCE_KEY',        '1scFRP!mWUhO:I9e9oy[WHi-]Z?v#;B:K?6<#m11jiDN[&4LUTRxcwA%o!Y;htLq' );
define( 'AUTH_SALT',        'G_J$Kl:|,L,U6EVr8hn>nXVwo{oWBQG9CC(Qb|H4v$l#M1K!/?v<#?,.?^p$8>(f' );
define( 'SECURE_AUTH_SALT', '$xftWF-vNaua~uZRS$)~~Hda@XjxGlh#nxNY!:%S.M&hMQ)a.yvH?CpDw*;cVjK>' );
define( 'LOGGED_IN_SALT',   'Z}  vm8rBI> et}vCv&SI{{ys06B.:U2BD,+j!a[ZsM((:sZbb{MTshU`<XYE|#4' );
define( 'NONCE_SALT',       '*ncpd4Gqf$5OzP8a.U&Z^!EH5A$^&UzTI&*Yf[2XHrdE7=)m;+CXWD PuZos3s@}' );

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
