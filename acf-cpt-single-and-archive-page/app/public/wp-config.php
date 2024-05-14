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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'xj;<-,0;<]G6a*}*kd_$yOIpLsTrJJS=FZ|cj1 naC]#4f[pms6`I38aE][frq:6' );
define( 'SECURE_AUTH_KEY',   'jKVpYEMrUv;a~24kSDp0;3vbTGvS(a0>|yZz+>,_m(apkasAD9} +nb8Ex@up(Jt' );
define( 'LOGGED_IN_KEY',     ',/l%[yj^WR%|<XCIrxp{@c[kne)9z@tPK}cq;?}^ij+hSb_)7&]plb;;_{RIi[Xc' );
define( 'NONCE_KEY',         '.G@}X{c<m~[vC+A=$JM2N-D,w^?I~ WWMO2Lk9gsVNS9p xM=Lf<fz(hZn;MO_u5' );
define( 'AUTH_SALT',         'Fmk%*L@0<EN+D_BXi=v[H!-jZ~RTLxCA&0x?)$H8tYxV^BwlmznM]%+nMQ{t6_(@' );
define( 'SECURE_AUTH_SALT',  'X2Rstsz%HY|? s~;$)o@m07fUf{3/GS}En9i/+kBU3]hQLa*b,U_m$*iaxfOG?@j' );
define( 'LOGGED_IN_SALT',    'N$^!>g~0Wlk:$M^NYv4Q.y!-SL!C/B/IugUYJ[vvtf5pRz/uEw@g>w<;CLp.BGv:' );
define( 'NONCE_SALT',        's=|S0kjZ;w|V1$oHFg[|w^9Z~)0E_VZmFi3.`FZ#=Xp]GZ~kE42i.n5 XyJAEp+n' );
define( 'WP_CACHE_KEY_SALT', ')v}UB}/XT/}!G9ccO>2w<zFvF5_F23%Nd,M4S|!Q5<udP~P.k^?X*X#ZF!>[Soa,' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
