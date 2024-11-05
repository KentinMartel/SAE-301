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
define( 'DB_NAME', 'sae301' );

/** Database username */
define( 'DB_USER', 'kmartel' );

/** Database password */
define( 'DB_PASSWORD', 'Prayforwin123?' );

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
define( 'AUTH_KEY',         't)qf<1MRkuZzGlih<+=]Jd?8b?zdHg|^!FCV/(NclMin]ZuH0FPj^b>L]k[aA3y>' );
define( 'SECURE_AUTH_KEY',  'qIxe>XJv3Rc!Iy(npuy18(R21:lKqX?:_3F$s^,z1&0VP;i, 6sHd[s`dd|mF^-4' );
define( 'LOGGED_IN_KEY',    '`iVQQfx mgT|,3HZ.#-kCWA0=gN|f=J~K  RD-`uYcI31HY/8vr7YP>BQ!W2ST({' );
define( 'NONCE_KEY',        'KV~V2CAF_s>RN[C3ZHewEBr}o/-Hv8f[1HwarclT xZH)nV]t#m!a?V0$QY5ueP|' );
define( 'AUTH_SALT',        'L}Q;kAR>4oOzL!bAL?1pjm&*5L^68G_/#S.(8Rx=5iF)Cz71L?)|>GMH3BIh)%B,' );
define( 'SECURE_AUTH_SALT', '4FKz^ CXm0#;J&hD]Z:0M=YJaXAV8Y#r5dP>hh!S1Y8Ewm?bu}$8pdPCpTwW8,T7' );
define( 'LOGGED_IN_SALT',   '$RZGGU:Q1w}:rdr3Oog>TR4w~TQ*&a`+M!8ZM,QyLPc3[F:x&~@twz8?kcFNDK1.' );
define( 'NONCE_SALT',       'lzp3FvvKllqRcO{c vCRyqItE.$U*Jr-p^{0QklJVeubMCxr^%L|gVY[BtZ9<mRe' );

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
