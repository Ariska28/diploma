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
define( 'DB_NAME', 'healthyfriend' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'P0Je}LJa[a=+Oeu&7>s;&m-?wrlE4m<8|98&e5-w2XKu5)/>4_w*t:P86#iVY=U{' );
define( 'SECURE_AUTH_KEY',  'aM{Qj/|Ds|kWm]2FG-I94zc:-F(P2W]??S?ZP:~F+-7&YbC@hH^O&6vIQq?#Ch0J' );
define( 'LOGGED_IN_KEY',    'PV(&aA/DM%KH8~p3Q:#d+aoB2yh9Rv3lGN>ob0rp{CfqVzV(F&ZZWkvfC!^ctG u' );
define( 'NONCE_KEY',        '`dO-eCv`kW~:> K&e(<^D:&WzjeBDwl}h]]KWR@vvli2=<b2u@ABd}=Iaw}3m^ms' );
define( 'AUTH_SALT',        '&H2AMH`SPYok7k#O[Qh`S0i9;cMp7bRr)RU5`c//eY=G@d9B!R:s]Fj&MtROU(GM' );
define( 'SECURE_AUTH_SALT', '?q|oL=4(3l`GX*`NTwE2.lY`N$kiloK#Kj<>LefCBZN.wHE`(E)Zn9J<sM*e`M66' );
define( 'LOGGED_IN_SALT',   '%B2T&?s}wV{oM9}10`L6Q#-69SB)i0Mdeu+h5d$*ZyV2Hg-|bgjO<z9xitS4%tV2' );
define( 'NONCE_SALT',       '{<J^Z4]|,O_2Cfz?;M?>#~)t22=;u:ts4[$axWM&;CAg!o#+|@ zNHAJd83DyGV)' );

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
