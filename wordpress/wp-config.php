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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'db:3306' );

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
define( 'AUTH_KEY',         'VlVw*skVSSe(?nm2Is?f2/EEIa[jMJIB9WpPeRFZ}e+JW.4OlyRTNc8b][O~e@%H' );
define( 'SECURE_AUTH_KEY',  'i![_Q[pts3c84!t:xA0IOW~QTW%&WI?Y?`-ge~f&lgXMoA`tN`zsK3~9tC,0IPN`' );
define( 'LOGGED_IN_KEY',    '.?+3=QgGWa0>1e#ifiX<59 nMB8y/afej)Vd6r/P|`O@ />u(%]8=dsP@+c,&+z9' );
define( 'NONCE_KEY',        'A8.NLe9#x?,v}hzUPMys_1b@ea/1PIU#F3tB}|x+q[]Ud||S_Q+lhJ1I.xp<Tl&X' );
define( 'AUTH_SALT',        'Y0hBNNJ~Us%1w{Fh(q8xD^Q>oD2U;fv3p[-+U`<:hF6x/PW^BF*F>a)aKaFvQ5n5' );
define( 'SECURE_AUTH_SALT', '$-v#(}R/awbR)7ES`CX}F1(5.e[+BcTN)BIoFNIP/Hq$thId4}ktLnM`_Nghz[J>' );
define( 'LOGGED_IN_SALT',   's#i^wO$47hX%kp5o;Jk!CUs0y /FmuDrndx8z#aXa-i6-zu??oPwVg%l>e^HG;K4' );
define( 'NONCE_SALT',       'VR]5sc}O8$2yb%~daL5goG.c28Qebv}q{;/,xkC~8#J/WPK#gXMfgWbPV,bVtT16' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
