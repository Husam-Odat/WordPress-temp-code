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
define( 'DB_NAME', 'wp_proj01' );

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
define( 'AUTH_KEY',         '[pB^PuFT<kt4s@zX)R|{S}2vZLq}I>#[Ix=Pxfu&fx~6[@Vy6g{1bU!WbM@z2PhY' );
define( 'SECURE_AUTH_KEY',  'R4)VyNIKTP:w&68$V+.`9AJ&5DbV;NmH.a|YCP?ODyQ,]7)UP/%{.LzYsGRg?ifk' );
define( 'LOGGED_IN_KEY',    'k_MnF$E[506!~$V_mXP=+y,xgww=!]0-AeBTpbR.w+I>zj3m:__KNwpM3WIadB()' );
define( 'NONCE_KEY',        'A]f*pTG,~D& _0I(Pc;9)FyG->b#NSz<pfe~QRn~.~Cy2_qU|_S,V2ov&1r n/d8' );
define( 'AUTH_SALT',        '?B&LlPjPtmR M9`3>VzB?6~%Sgo|lW6H/7yIBh(D6;r;Y,Rt`KI`~aTFqo!dziN~' );
define( 'SECURE_AUTH_SALT', 'M4pRw}C{:CzJbsX0P?.G$nN%K(?$-V+r@-=g5m&:]dwt@ds5YCO$^(So7QNDhg<Z' );
define( 'LOGGED_IN_SALT',   'yL;yqd0`LH_+rk7`dP3+d|]&@;~+#9><x<OD;1im[xt[tw^^0%N%MdLYUIQq[0Es' );
define( 'NONCE_SALT',       'pi6GC1M@yWQn^OfPuGfB494~+lr%]1@f?I`ucF/2s3uRnU,A!juGPK)^U*@RI?X`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
