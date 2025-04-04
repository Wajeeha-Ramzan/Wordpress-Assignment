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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_assignment' );

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
define( 'AUTH_KEY',         ']7/=$$*53^~egYBWBFJ!7%V/vTgj=/bT(i:5xK>Z?171>umG  )oZzX>jt}efgc?' );
define( 'SECURE_AUTH_KEY',  '(y}#`]MB.pGL6A)}<b?Hd+AIbkaL/9:QLNrT l|J28VCzREhZ}Rpv+(h5$10d#]8' );
define( 'LOGGED_IN_KEY',    '!,8x*nsc$N7HA*`=yN;yS2jZ,L_h1>`ea7>`[` E#SDz#|{<.nL$ 6cV-4hO!n]|' );
define( 'NONCE_KEY',        '<C*g;xogL5mH83G|MQ*$q+43ImOHuY_:T-@[8&4ljmYg`lO/PS3N.:INj@wEhbp8' );
define( 'AUTH_SALT',        '3G;1S=$(NAvpCp8}+glRcXukQwYA>m(It;G`zF0KxUjW(|TP5h^u ]p+9]6oCV,v' );
define( 'SECURE_AUTH_SALT', 'i@Tw^F@XVH?d|3L L9LtOa9S??/b<]xDlcSYAR=?~mAFYhH6Y%8?k_J2KF={=QD5' );
define( 'LOGGED_IN_SALT',   'KWW|/@|jWNDdyZ&wWe!iD&gK[RXV!L2O$^#N 0)?xx974Re<5O[(5Ar2990M[f.R' );
define( 'NONCE_SALT',       '5y$=vJ&Py#=B@e}rHNG>Oj(Vyl(n%595ZBEio:@AG|ei*{^P$XfivPzIHZ*~#:WK' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
