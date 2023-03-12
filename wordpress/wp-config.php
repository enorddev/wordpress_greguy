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
define( 'DB_NAME', 'wordpress_greguy' );

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
define( 'AUTH_KEY',         ',R?/)a3V?oy>blW: *2Y=6tf@prR?TW<(I%YnL@$01sF143GYg<_QEi.7]$BPTVC' );
define( 'SECURE_AUTH_KEY',  'kf=ZY8QQb71rZyNKi82#pm};c9:L>ePJEWHPqken(MKh,GgOF%1+*MY;*Ru^sP].' );
define( 'LOGGED_IN_KEY',    'jIIHF%Dq5h,]|0_kVm;a`-J-jf<_K04EM#,ucXju4qG3r /]*3ON=^pl,3N=rt*g' );
define( 'NONCE_KEY',        '%RDST&$RY*<6d`QM@5mc9<arMC5!Nl`090D+CeSl$)8R#^@;CCGs*f6q]94tys#c' );
define( 'AUTH_SALT',        'uU(/Z s$U|+[oAm#$yyu?-2Cm#e`0|YaOp!W8:,27%t>8+`y{yFubqnWQV?GjDAa' );
define( 'SECURE_AUTH_SALT', 'K4.8OV :`cT+Q9Rb^OcC{?EAmsMlUC%e:w5d.us *6Eaf/OCiW~366B;P]3!vZXb' );
define( 'LOGGED_IN_SALT',   'LZ)Gz4U|*8QF%eZE6bPE)q%^D1O~ONN;4kS:9,&O50zsd^<`KmIm41z:9 aZjU.w' );
define( 'NONCE_SALT',       'zFT*g8$&Cr5V^^TovC4vM2NV/|D54/q-,. B]``FF4Vh-_Ohrb[kT 3<_{<f2mqZ' );

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
