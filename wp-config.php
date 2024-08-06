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
define( 'DB_NAME', 'db_amigos-pesca' );

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
define( 'AUTH_KEY',         ';#OvCybV+o;y48XeZ!nzG)x,=}Nue j.@<WVE(y{.fN H0qKU$Qe.@.:L$5RNsud' );
define( 'SECURE_AUTH_KEY',  'V0Sc_P<g[vX1@r?!ZSD@}O(ah)WPB`VBtt{|8aGpTDf%,6]$Mn)PK>(VGCi21c5l' );
define( 'LOGGED_IN_KEY',    '_30@TOu9_$73@Ojz,/fQO>|e?0GcvjJ}x1q?|EP_Adb/25R:UW!bn2&lsBvip)OX' );
define( 'NONCE_KEY',        'FM%x^.J;#xy+p4&a>6?bIHjZ;g^o6T]8S^WYMz:X|>~Y1E%;?DkB)FAL-f?-Ex$F' );
define( 'AUTH_SALT',        'Q=f#+24Z1za2GGG@ {&!FFolF4&m2m386=bb9mkX+JT[ct.qGq,.D*cKLCS-cjBL' );
define( 'SECURE_AUTH_SALT', '!Jn[PB/[*NWJq|S6l%LK[)]}8+nxjwK5:%J~F([dO[|hq863TQRgA_?of4rnd]3`' );
define( 'LOGGED_IN_SALT',   'C :XW1kOB/!6%.77+w8jceYw832##&%E20%gl9%%q|C{fjTcl].Go{fo&(lqtJMJ' );
define( 'NONCE_SALT',       ')39:[*Yu0WadDHGzf2-qvz1(<HGqW)~|P%__M^[WfWS8zaF7;>7B,:R+DPLa$8(0' );

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
