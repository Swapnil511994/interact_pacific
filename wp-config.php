<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'ip_db' );

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
define( 'AUTH_KEY',         '/DH34V83b.0Ai 40Nw1$ ;^Hf@$`;%_9=jT07!h[u eL{P]fv<UF/WN_BP}WmRBO' );
define( 'SECURE_AUTH_KEY',  '<*a?LCu3-L/x=*]J*-eC/blMI$1}]j:MdaC!5^BF(QH5zhV}hY^|NB0T*vI-8$Lj' );
define( 'LOGGED_IN_KEY',    'qDSN4nDZ|U&dk<K7Fgoa2TzYXed=yoR^V.VjW:kC,L^(&jtDl$19j`]*:-p/@W0p' );
define( 'NONCE_KEY',        'N9%c>jOCORE(5&n!lB|g.B3)op/+,OjOkUvRG02km}w%pIo$)c2-l~R]l_YhVs]l' );
define( 'AUTH_SALT',        '&z[%h}^iSj6O42>134$dfBXsLof88G Brh(zPxNkeb&Q^#k95G%<%XR)$IW9]oFX' );
define( 'SECURE_AUTH_SALT', 'Um%jU ?gS.Yr`jL >a>wgQ#r_Nim7OISqQjE{16+?|WJE`qyvFV({++P^@I[-z,k' );
define( 'LOGGED_IN_SALT',   '+ladJkH=R0nct(uX9Z)0*Z[UFW#W8)Fhs.{yJ<=]n[KJ gk@Fg^po4m.;,w1l;M0' );
define( 'NONCE_SALT',       '|)f*!hl3X31GXB_(da}7B~Y AYF&04ACm+Z<#.R[ I})^;=AMkfy(1P_H{X>1)}&' );

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
