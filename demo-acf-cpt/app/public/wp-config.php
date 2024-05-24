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
define( 'AUTH_KEY',          'qfZg={ooG,<yE_~{E23oR6; J]6TeFxy/FXOhG@0P68kTD3X@MvIS)i>;3O49#H ' );
define( 'SECURE_AUTH_KEY',   'Mn GR(Z[PY XB}D~?jp(`<C!i7P(0*IB47:+?<Fr$=)eYCs@afpf9a;ePD0%J.sL' );
define( 'LOGGED_IN_KEY',     's%~Aj!(j1KQ[eK}@1GK;U03uo|%0X0dz-nqUwLCG7,^Omt{zi}0G.HwaaZ.G%ic9' );
define( 'NONCE_KEY',         'k>=EWdFAdG]cqL*`@ kl[.3`[gx6BE|&4`o%q<82qf1>-:v>ieVPFf[>Q@^y,8%h' );
define( 'AUTH_SALT',         'epi!6;RA}&>3GZe!#OX#:<!GZ2C^3DA&H|A,]#fY[A)XbmFtcngEQI3emBo-L6Ud' );
define( 'SECURE_AUTH_SALT',  '7%9fsfZOq+V?PuQ_,5wpB>3{8vF`@h!!,bhF*N;tYJ2zwjY{]0l/HCi8A;CWa %a' );
define( 'LOGGED_IN_SALT',    'iU.v<Q/. mRC:lv9V9f&]o}gdM[+H9{T=`b*ma[_l8BlanR.S9jbMx(oW546{cNA' );
define( 'NONCE_SALT',        'hO8]!^c-kee;}P?2Ve}*! P@hORvp9v>J]n 5~_n@<$b<rt$I[]YIr.Yf`b8gj4Q' );
define( 'WP_CACHE_KEY_SALT', 'w@2.70,6:1+]8hUI%qRo|@zJ=XcaGh+NU&xZ~@wT~=nQg.[(?m<60$@o;`1kY4<G' );


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
