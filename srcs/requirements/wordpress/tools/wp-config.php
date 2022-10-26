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
define( 'DB_USER', 'zmeribaa' );

/** Database password */
define( 'DB_PASSWORD', 'user' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define('AUTH_KEY',         'mkKEQ|%>V[K@}oTy<4cvh,)[~*;d08^3l%|Mui1ktd_9mS_nwC6iG(]+A4J.H5!z');
define('SECURE_AUTH_KEY',  '=5.Jz^_Gcc>U]-n-:!2aEut|![mmuG4?3Y85%O%#/MOGO0y6a~a~O#BDv+>e~Fn}');
define('LOGGED_IN_KEY',    'B[9]7>a&=2~VMwrwK+&4~&,|w,ona$`m0,jJ6za{(V-6mf*)0.++2}M0#4x!.4XC');
define('NONCE_KEY',        ']`kDQrn,M~fiGSQ3JZ[clPe2O7i_#?Hh~$F/QQO8pgC3IsuXpFMNN)b6m,BX|zfV');
define('AUTH_SALT',        '9W5B`<@P),]/hL}wA~GPiy5.>RIO7fm`fTIX0SCUM&H2Ji`47+:gx}MvR2FrmoeU');
define('SECURE_AUTH_SALT', 'p<.sA_W:=Xx$Us?9+j9~PMGuB/f*Fjm$-aNHIT XYNf21A?iNj:G_5WYb:.u/7/M');
define('LOGGED_IN_SALT',   'ZYtVR}DF?#jky4FO-A gnLLHj t5mOWl0^sTDBsw9Me~Mow|?_WF3jbl5Q&Fub!o');
define('NONCE_SALT',       'm]Bk b&pro}Q+qk4& {yC?yOy6nKLROpp-7HthB}mIc1^?|qG1MMyuonvbA2k-A*');

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
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
