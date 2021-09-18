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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '.jR;~3jP(+YkNdVOe`WVtPR|Ol|?Eb#_{*nMgYtYjy+ZDH+uBcW3|zJOb,^ &;Ra' );
define( 'SECURE_AUTH_KEY',  ' 0o=Db^kHu9=>8K`fWN|%>(OM,c6rjCVz,mxwVz?yBWcl~:(t&A$GK@j,&Z8?7c_' );
define( 'LOGGED_IN_KEY',    'S4s3MSso>cza@QZw)h>D`U35z05b!{EbftGZLRu+oxSptSH*7w_6D~/>)Kz7X@^1' );
define( 'NONCE_KEY',        '9=}Y->T1|MyFskM ~{L[WsDtYOA?Sg.zzicAQ?nXCxj3TjJ[ho^gRSGH2L5F`H2c' );
define( 'AUTH_SALT',        'u2d*S%~2/||0thJ}u&UCU|l-4x:4n qnX^<6O4>lSWK sg1i9E#3qJGHO)RnhM/k' );
define( 'SECURE_AUTH_SALT', '8oE.&k{GeGVh04}(4)~(4%4KTc@0w(^M`vCM8R_WwA2.KC]d,xDR_DHg]MaeVwZH' );
define( 'LOGGED_IN_SALT',   '_S5{~qorSJQ%<?p%XHorYv}_|@q6m5t|y16g6l@vqGX9)Gcf|6jx-Wi2y,RM~X68' );
define( 'NONCE_SALT',       '-]T_;d0}E+|>kJ&<p<4S[}eMeF}8> *SOn?(Ye^ DbxpoG zmH/O>Y/MnGJgdfi:' );

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
