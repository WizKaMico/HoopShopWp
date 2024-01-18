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
define( 'DB_NAME', 'hoopshop_wp' );

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
define( 'AUTH_KEY',         'i- 6vf.uoUId~b]+wgmt%Tz8g`~SP$i?/@;U~!1&Qid[MoSM }3WATL)J&5vd/2Y' );
define( 'SECURE_AUTH_KEY',  'Rvileo7OJ9Tyu5a>z(6v`WpDA<wLd;[}a/Ds,1;zF.kp,g+UMkJ,v/%%5YU`Z~<7' );
define( 'LOGGED_IN_KEY',    'dM%r-%A/U3S2II$ED+l:},(Mx?tRWUmOkm<!f3&INCgSW#CAg_#[gB!@n=lxBH@h' );
define( 'NONCE_KEY',        'JO%JeskOvfk{&|;^Q[3t@=N3ly0Aj@O,o2yW(}qFO8naExOcaW|*QHLw&4eU!qzK' );
define( 'AUTH_SALT',        ']RZe:3E?{7Vv3]D;,(Rk*F;wx1MKsa1#D2XQozEN/E%^(c)mEmi,Ijq1rmE(93*c' );
define( 'SECURE_AUTH_SALT', '49%1d$A>Kl>6]!xFeKVCb=.b(r}}FgJyNc8y}~5jdEe5$/oFKDbjb`UNLsRCwce]' );
define( 'LOGGED_IN_SALT',   'y2-(`VIj-c`(%a=#Jg|h:}NbM>3w|gzsJ7U9ZAJ[8.Fm*nP8!Qy#07A;yp0Ka N1' );
define( 'NONCE_SALT',       '>y-/~Yu%bCPE}t;jSJfYkloo((]WVOFkUblzkLtGV3rsB|;]ypkmvf$H.q[/39r]' );

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
