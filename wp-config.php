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
define( 'DB_NAME', 'alshatherTest' );

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
define( 'AUTH_KEY',         'og|lx$x.~idvP|8lw_75jf9WroeJB,c5 k_~t;=<bGS0AjOF1 (WX_tx1!(VstEN' );
define( 'SECURE_AUTH_KEY',  '*9TNW`Bo*XkjNT=^==yH{Vns}xKP1snaMTqEdC>t^QivyUw32V4D^k {/54s,u56' );
define( 'LOGGED_IN_KEY',    'F@+ai Lz,{!WU<F>[Hi5@-)&L/;];EaF<R0r`uDv`s?ChB4N9+^f)Vu0.#j`lg][' );
define( 'NONCE_KEY',        ']yNL+14-I!$rK_NU|QU(1+we^13pG{445{+pzTb@eD6zMUIp6%sSa1k^@XfiHAu%' );
define( 'AUTH_SALT',        'It2[URtd5f<j+DLiec&8|N$ex?M3{qiX(e=h1K}Sd[fze7$@77jx7)Fb<[tSMj 8' );
define( 'SECURE_AUTH_SALT', 'qD:;P8czrI:!a(7dU,Z=+k|e&e}z@ju4.H>*tMIZuo6DPe-{$D$`xms{>t$(}uj;' );
define( 'LOGGED_IN_SALT',   'jh39L6%z*1k~L|fP.`)O{drRC{i5UIOycGaV>9kM9v,$Lj8w@qHpb4:i^}[iG0r-' );
define( 'NONCE_SALT',       '5hP`fRCm^6=G|<c7o4f~3G)Izf.JMEu-j;WMy.y<K}&{Be[{%VI(E!p`35x&bgVd' );

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
