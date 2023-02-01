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
define( 'DB_NAME', 'tutorialdb' );

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
define( 'AUTH_KEY',         '#+VKGcl$k2/mHLP&xlOd^,bK;.v/*A1BLUv}0L?L=L^X/~&xL!.!-Wd9e-#]=.we' );
define( 'SECURE_AUTH_KEY',  '0r)v]9.ZE}O)UrE>Yb~3D3{9zf`5:[Ya5_z*@JHiF9E~90Mt|w=Jf#~D8Xb>W4#w' );
define( 'LOGGED_IN_KEY',    '>T>s}vVcW&>jwFBRI%[XqbT4F~@%8d5/[Kax<ISkD#M8/wmy%B|~..(o&d?L4 4f' );
define( 'NONCE_KEY',        'w&BeW?[t2$rF*#`l.PqiU)&*:.f4`/$@|GRJnWROKtY<W]EDefDcAVm7Z+)k?|)N' );
define( 'AUTH_SALT',        '[LR0xLfQJ&kBdlwir_BQ)nDd%56c,?E9IK>V08fA2}xQxGAe@}l|O:iu-Vt }GxR' );
define( 'SECURE_AUTH_SALT', '-W79cXXRoL#lR0dp%ec-M?]RqW% zBkN1Q]V{A.ufw5zzJRj5Qd?pmNw>~@A2sE}' );
define( 'LOGGED_IN_SALT',   '<0;G<%lVYhn cgSCQ&>%9nSdf432!M{1RkU x?;dHi9DZ9yTfP@64FZ<iby%P#~V' );
define( 'NONCE_SALT',       'V7=m,^qL:Q:LT9GTVk/;XTxmNN!%q`V.`Ng&pdFKP^DY5XL.#U<B_I<_]nQ~`I_c' );

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
