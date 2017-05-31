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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jonjonTest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_O]WtEa3D2LM>Avv;g3D?/di16+!vx[Y#Apf{L(L0CW81Xw?5Dov&L3B=c!7.1-R');
define('SECURE_AUTH_KEY',  '@,87l |{pPrXMSjr}t>wSro^K~ hR/1-nJq);/-lV<%`I*4OJu!9Ey..,|-y]^=>');
define('LOGGED_IN_KEY',    'IO4hdTrrR[%h.{ l kQ){oM<hS{B=bft2;fXr{xL77]D@U9s#fw?reyqedR9#;9S');
define('NONCE_KEY',        '6n.|y>$p2GO@dgwad4`{oSo#q=x.D L7b<(yk4E$arShD <!vPL@{=`&cJ|qlucz');
define('AUTH_SALT',        'I>s9g{FwHIy>L,:8LQ3v6OYK8pbPHL[Ndgc.1lHr4IMQ%dt1lp*uP5n:?<UXY0a1');
define('SECURE_AUTH_SALT', 'p3{WP/h,P#v}?s4hy`i+p0x]c^Lh=ST-RZnATUmK`_Rw[_ u[WRR9jW]3D+Xc-WZ');
define('LOGGED_IN_SALT',   '0eGStU@(JWzcDpu~F0,xwsGP_B;>gFCoD?zpAB#[I#o*e<3{+z)^a9o~l0r)6ytW');
define('NONCE_SALT',       '&2U7$4gd~I@v/*aFYxMyF2/YYwT.y)BE4e4yCRc@]`c3N/O<z {5CYx}Q]uP,75,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
