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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Cozy' );

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
define( 'AUTH_KEY',         'g (ye8nX*UNX|?@g[gel:!Ra-:q}ak~!Y*p_}{(pnoNd&F~qg[D0zZ9wYx=:PopE' );
define( 'SECURE_AUTH_KEY',  'b4IO8qB(Z{D]xMSz`c&7(Y*%K+3k9E<w}S]f^B=>8$Nz/%jzM-u!tiRiwpLaPg2j' );
define( 'LOGGED_IN_KEY',    'e2D-{ik>srCz5^!93s#VXLHI[uRH0-*H&2iUmQM[TWO`m!eVhbJbS+>v`8,G?4&`' );
define( 'NONCE_KEY',        '{S3}G~_ rJDqX@GJq:Zhm#^Pg-68?XUJEDQ};CMv~#*2^wc4ncyL/0 m5>sp~`rf' );
define( 'AUTH_SALT',        ')UA14ak/gj)[Ts)jN8WOK1na@Tg!A&^9b*mQK7HBBzl>q=tStc2}.tAD-[:~Od]6' );
define( 'SECURE_AUTH_SALT', 'SQ|IFf:p;)6twR-#j.EvD@+^-KD(bpuAe-i}X[4D;`nyS`W/&,lM]##ja}M1T7>[' );
define( 'LOGGED_IN_SALT',   'n:tA%sv5]m}d,t@Qaj;0iy/=IxMU!p]_nSY4#BjfzZtgGwzvKs,1Cf:[L$wQXF$>' );
define( 'NONCE_SALT',       'CURX+qhk#);Vvk3>~}/g59603G+j.%I+VZ)W/n@B0W|Dz?*(}b&.=eZ%-7EYBNq%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cz_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
