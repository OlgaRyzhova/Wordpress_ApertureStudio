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
define( 'AUTH_KEY',         'gs|f86(~pyG8J_T`e<v*)wUKA$!t-%bC=U/cY7 naE04a_ot *P7creY.22#z_Mc' );
define( 'SECURE_AUTH_KEY',  '*]5YQ}3O/0D{;)~*N|I2rdhf3t?}D$GX#E3SL+-VZo{+MIFI`7`$8-fA(zpUn#H*' );
define( 'LOGGED_IN_KEY',    '(TDly,NMf(`&E/{z|CX}4Fw#KYY~L @3tT6NJKLF#ni,;u9V,W~/9.[F-p;xEfw]' );
define( 'NONCE_KEY',        'JYZ59XoP=;&`PZr2U+~r>tjF<Zq1@=u1*(?y<913cjI2G0@$l97,hpQe!WqIGj-^' );
define( 'AUTH_SALT',        '90.!N_<%,.yDH]71JBU-bD Iw5tv5OLqAlHD@2uN4+dQ?,HB$#~>7{+Pq %sP/}7' );
define( 'SECURE_AUTH_SALT', '`km]M:unFWy7wg;xzl}T[2i$qyEt{a?HTQ|&GD[zz/%^_MqEA}v}&<9k5,e3&x-i' );
define( 'LOGGED_IN_SALT',   '-;iYB[B+%O:yKX%.3oJ.|Z<{N(+L^JT~C2ik^<KN(r.KoeyDE-xAM($G}=YjF{R&' );
define( 'NONCE_SALT',       'v$186UTD9CLMEd<#Z>|idN=f#FKpvg=ewK{oA;-bjHx!x`-IRnTEa |DsNr$cdc2' );

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
