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
define( 'DB_NAME', 'web-development_db' );

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
define( 'AUTH_KEY',         ']?sUz&}FgbXK%6cs4wK8*.Vk,v$;*5S83,:+!/,;0nPm0&5Exu+];HBLdAW1< G<' );
define( 'SECURE_AUTH_KEY',  'U$vNGd Y^{BQ`9v_n(bl !s#%s&U|l6@!,_Xhg=4OWBA0F0zXqT%xpQC7/V7ydAt' );
define( 'LOGGED_IN_KEY',    'tHM3uo-e `EADojK7,+ wP2dw:TMEeaqwA+[YPi_Ad3ASXoJ`szag.D.LwVy2Y$6' );
define( 'NONCE_KEY',        '>nF[Y=#Zm9U:NJy8mlK%qIi=34/$U,4X.Vysn%yLkFo{b[6@OpH=!N&*<rMr30av' );
define( 'AUTH_SALT',        'M,alt$1w>~EuA1>OU.%|w8moNHVVlQpGF}33+txA#F.GdlKb~W/|lUFS9RQy(g05' );
define( 'SECURE_AUTH_SALT', 'du/<2}u,e)Xq~~[Yd?K]Y?)DjGA3bu.f/dW25IP(bC(~vze8{#u{>u^H08Lb =`Q' );
define( 'LOGGED_IN_SALT',   ',na1~BN%s69V?Am n:Pu1kz3x8,h(_2#$qwvtc4yfe_<0,J9m$OQxa7PSpqAEA,R' );
define( 'NONCE_SALT',       'JG>%3RUs^xZd3m-Y<J3VUv(h4uE}`76QIIRL!4iwO};(/P}shR#$(b(> Df]QGEW' );

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
