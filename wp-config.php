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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'EmOH[|YjdA#ye)L ]/;k}dY1Pky@?Izr{m^-?ZfM 7[wB6e;,5$Y%H?W6 1#}J+z' );
define( 'SECURE_AUTH_KEY',  'YXl%1pf~.zusx#Uql*;rMMkf`[@@?jq~8+1|W.iF<$z2z8#PuC=.XGq3t[lkL5;8' );
define( 'LOGGED_IN_KEY',    'LhMsvbDRx*EdZ hjQM|[A3Tjr;NO5=<^v6o/kGa*stI!.X*vtSrk}pMN;<*1ETl%' );
define( 'NONCE_KEY',        'h]wSD^kw:PFNu9t G;+>zfF63^R:==2upJq./H#q*vm.(! M%K<,SxLa9A[)!,X<' );
define( 'AUTH_SALT',        'p`c[`DW b7:,n~{i[T.o1sVv^#Q1)Yt4uQ(j_6 @,T>oF=CSHjI=qV8uPn^x{, !' );
define( 'SECURE_AUTH_SALT', '5>^)FcsygVUIvvbli/+9|L2bi) l_y1=`e|4iDDzg|:V1d.pg(!&ip|Z,I=-ReJF' );
define( 'LOGGED_IN_SALT',   'H@2]$9=myC]G?$GfUlxE[uea<FUCsB2/l0(KTDF&[f,&;.1VN~_Sve6~1?)m$ZQa' );
define( 'NONCE_SALT',       'KyuoEA@}pC[:T/d=6?|5pC<^[5Tc2!%NqSW.dN7*&L.,vF3c7Bm#wD]2[~z/5fL8' );

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
