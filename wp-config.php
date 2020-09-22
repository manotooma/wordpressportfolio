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
define( 'DB_NAME', 'manoild_dk_db' );

/** MySQL database username */
define( 'DB_USER', 'manoild_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'manoil70' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql78.unoeuro.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '_ig_]$d*Z-Tkx=L-X+Z58=illH> -kH&M]%?7,b;PSgtuN%Uan>@ZB _27#!XR^=');
define('SECURE_AUTH_KEY',  'Fb<M1[VOPP&k`}C6PAT+Nq-8T_x,lrAT5;kVL;sxUaI?}^W5Awa8X;+:&|HfDElu');
define('LOGGED_IN_KEY',    '40bzCR0K7|(vNyo|t2|Y]!l[4?*aeg*_@1-Ll/+0HlB*m8^P5w#YEkt8~;ZY)piq');
define('NONCE_KEY',        'xlorr|&/37HGVKP&/*TnpYVL~_u;FW|d1Oe8:17Z8+InfdD&vFcy2LuT<D>5}H#%');
define('AUTH_SALT',        'Gj<T^SYKwBIfe0KcmBy&f>&nj|K<@.:a2]v7Onl]F#G==tcFs[B/*8y|1fF1K|U[');
define('SECURE_AUTH_SALT', '1/Zx.FG-[,edlfww6O,$&JOS<ag?L_(4;E}Lli2;.|Ywf%9G0%,I}6GXQ^Dx=Vk]');
define('LOGGED_IN_SALT',   '$gL0gTC+ilS]]{zaM-C>mQ|Ko;{-VU.WI^u8%Tv!vV1i,{gOcVsFT;9=|e`V((|n');
define('NONCE_SALT',       'PM_{C3nYwz.3&wWP~3Td=}Lmm!t~i[#8 <kmbszKw1v[k-Y2iy[8!5)A-kxFF>zS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'manoportwp_';
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
