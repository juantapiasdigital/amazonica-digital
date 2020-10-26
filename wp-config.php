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
define( 'DB_NAME', 'amazonica' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'D%0gJ%5;guQ`lUQmkIi(Ur0N1_SNL; ]MB}wWb2,/69KklI.n|r:z$~<Q|Mws^@0' );
define( 'SECURE_AUTH_KEY',  ':!mo~o}UBvnN!2!G>9-{Q:1Cj[PTjlgF2/0[DB_L>Il,#23H6;yk)5}lvqSJSOPJ' );
define( 'LOGGED_IN_KEY',    'oZq~qnJ;orYoA<}g*SY:N[+Kpjhvy`cYoH3*-OxwYCq_w@b.;)~Bnrig^B;NQ1L]' );
define( 'NONCE_KEY',        '@r;0O}h`wKd;5:t@OXJF/3rKf$`qsZ2ZQ0(Md*n/18[u>q+}@osJPIPe<sW!.mzw' );
define( 'AUTH_SALT',        '_b4j^r17*@O~{N>[l p[/,jd&$IjeT1DZbKzSzG^G?S- rMtl4.@Xj0HomNd)2RF' );
define( 'SECURE_AUTH_SALT', '3senY.W1}A >~>#ceS&xPSlmf%th:6-h}p5?6?jUD4JK~5M5Pd)bqdF}xa[1e0Nv' );
define( 'LOGGED_IN_SALT',   '^.UCa0P#`G2&S|7NyQ>74EP?o.fpTK=? +yUk*WVlkA/ddk^{(el2?g)^T`T34=~' );
define( 'NONCE_SALT',       '},0nP#Vg=;$^Kkivdb_FIN4bj#A|Ub^oulfo$!6qs `7>o|IQ~&2m^Hg`;lHQpET' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_amazonica_';

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
