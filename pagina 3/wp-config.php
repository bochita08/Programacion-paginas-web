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
define( 'DB_NAME', 'id21348781_nahuel' );

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
define( 'AUTH_KEY',         '|(1ZCGt/V=6D<Aj<pV$>ER|m46DvY|-&UG3hJk>W)zT{@@{ZC4_YbLw2@8gsS+A)' );
define( 'SECURE_AUTH_KEY',  'Z`=aPUC/(C$*aUi#q:3)+e;j^|oIvVS}ngdL.7ZOX&1fDkSh6r;?wY2Lz<u]HS=H' );
define( 'LOGGED_IN_KEY',    '+vF@ J0]`?/qW~:%~%t(>uvt,DB@@E((2w-V~k7-$oP98Cb9YR]9Ci?}B?D}Mb{u' );
define( 'NONCE_KEY',        '$ UuFqK?.>O[JQprXbB$cD2@ZGF?U;`0Ztd}K,0lq)DudP+PIj%):sx `mK!rwoF' );
define( 'AUTH_SALT',        'IV/=0/,Rq3 cQ-ES>v~a]*Q6EP3_QEvdi3jni}-T|Qy-=`%5M4=)YdDfGWTPT?m2' );
define( 'SECURE_AUTH_SALT', 'aX:2(1*P0k`>LyFRi0vR%c/fdsL%TbNC?fi39r8%Aq#Q.x_~w>T)_*S?CHp;F-B$' );
define( 'LOGGED_IN_SALT',   'gdk^h29zT&uhp>?F/G1! BR~|hd7I3jorbp-;LViq%`G|M:rW]pa;%te|T,)>gA+' );
define( 'NONCE_SALT',       '24aIqP}n!idK:T)#1<%yKp] o]VXX:,,.Y3B^lbIQLq+U?4r=xsFw6{X`c/MT#]/' );

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
