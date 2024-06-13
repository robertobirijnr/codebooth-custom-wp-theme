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
define( 'DB_NAME', 'codebooth' );

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
define( 'AUTH_KEY',         ']FZ{-O[Qk%3=J97Aj_-r5M:j@xEb(z{zA^WXH4n}NpE;xoH}7FTCg78:=ii|>Fa8' );
define( 'SECURE_AUTH_KEY',  ')$z |D7y+/gxU3GK&1_HvXKhfd}/IY+eI,!(@0#z(5KX6J4zK2(twUu6%3>=AFG5' );
define( 'LOGGED_IN_KEY',    'j<g) TNNTOV>Fik8}^$t%7D2^p.?9k[o/{($lZB^uQH;{LTSgzFmU_EBX]39s{r.' );
define( 'NONCE_KEY',        'WR}Q}fZUR;kh0[@vEvkb&0=3&]NFpE}7i#hcuO!49(@q$-$NDdlC>(uxH. !Om}v' );
define( 'AUTH_SALT',        'Ct8J|cCrj#M$i|UWeph0utM`Qt$J]]XO`X-kOW_,r8H;~&K74iP%#8[W51u*%4zs' );
define( 'SECURE_AUTH_SALT', 'T81}sPwm= ;`3;W?>1F)oR/v=nDwTNbS5-/OLy.?u$+Bd?QxMPyQy!]K6vgz:V3n' );
define( 'LOGGED_IN_SALT',   'Na9@=rkhsr&!GWU]W!}HlQkjLAz}@8v4:>`i<Ok#lV`1l`m9errzwO5X-$$9D|/)' );
define( 'NONCE_SALT',       'i;>d7cb>9^Y#psgc<e10YpUPymrq<[*5O*v_-[J/K/x$7K)cwC}67lB2E~}d8sb1' );

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
