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
define( 'DB_NAME', 'headlessblog' );

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
define( 'AUTH_KEY',         'vhU?PxG1:]U.8i^LmV%m@@kHs6NJLLrb?Jz2Fi<EecBF*UXq~e^0 ]_Nv<U[;cSu' );
define( 'SECURE_AUTH_KEY',  'V94#[VU2bjEK:vriA;d&a-#qLVoBUCAa_xidhg8V$>tr:.fXkV+[sIe&>;&m^+@`' );
define( 'LOGGED_IN_KEY',    '&G+5mCPgooMW1zwVY8~uE1}),[xnT|Kz{!=`mVirY q~h{0gPmOM~O?iF?s``N5W' );
define( 'NONCE_KEY',        'J$.ww)P4F]h(zTPt85sqwm>}O0`ov/7fcjvz%BF%{(rCNdl!m2[76evM8t|)2T{H' );
define( 'AUTH_SALT',        'K8KB~N%7_-!VYP*0Tztlo_f&?r2 @&`u18`LmwZhY;|RQ_U&nWl8%MbF/)nQ[)0[' );
define( 'SECURE_AUTH_SALT', '<=I;T2B7DxE^qLAx$dPS~5BzCcwP+z=)c#5zJc58SHq){ms_b|:v/EBU[Uamm!2i' );
define( 'LOGGED_IN_SALT',   '(`:YZur/gko>dS{qD>BxSU&wBpEgT0[[0zcmB:DM-AX_KF_h2{vA[7q)71YT49)v' );
define( 'NONCE_SALT',       'eL9QmOwA`2/xO=~@-iGqkOG,<E_IZjAsCcX{W)p8/Wx^|!YskgH&GAOD#@*g1=ny' );

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
