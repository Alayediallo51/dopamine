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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'om_W~el ~2VEX%pr#%pEFScAt)R.*iRFsvxS-q`uCoCTW-*Vw<58m~U^qJqMXV!q' );
define( 'SECURE_AUTH_KEY',  'PA&0SJTZYrpXm][(KLupcnBjFA&-MOEO9,NZ5*2MEPzStI9r]W0`uxO[T=h!i)N5' );
define( 'LOGGED_IN_KEY',    'W:TZfDVYtapr)uYw*We*B?}s>C+8qib%OiIKv41tT)ga8$R9Dkj{%iV]nkmUo ue' );
define( 'NONCE_KEY',        ')dD+1|R/=19L2*]Cd<wZgU8VGH[B,Io,d,ITMEq.#UYp,>7 iRxrfQ~F:5N@SU#)' );
define( 'AUTH_SALT',        ';HyP^2R]v#o5K7rm%O/}U2?6otq~&FpWZp:xn}f:TM>=,~ DE3;i!>|y}l[q9Xkr' );
define( 'SECURE_AUTH_SALT', 'msJ*5_#8~iwX]am?SZ)K4k|RE[k^lnHSUGa_U40}$J7Q}L %|uITfBqx.s7gHkg6' );
define( 'LOGGED_IN_SALT',   '^hEU$|il[3-RXgu$i!7EOhdPvG1qv? H6/@>}wEo,TE +kw^sO2c1m!Zx9,ge3SV' );
define( 'NONCE_SALT',       '^3V-T>lR<tuU,dh#b%|yX%xV-Ql6B+3Sn@L}-+4ncb*%Rk5V,i<4EHR@3^d*R2?o' );

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
