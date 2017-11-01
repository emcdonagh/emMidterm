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
define('DB_NAME', 'emMidterm');

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
define('AUTH_KEY',         '5w]tlr3.;)7wD z$kQ!^s#<]dBrz5OFsm,/es@7:gmd+Y|m~ND6lD@%x2PoBSz.D');
define('SECURE_AUTH_KEY',  '6H3w2BS=y5Y!b`5_D~*%1{B]T*S;vb(Z`+8Q_Q[PEjUdu72nBOb8)e;H7BE4<f5V');
define('LOGGED_IN_KEY',    'RmuD(yTTw;zkv)6@M`.TAS),|xAF*_!MJ{6O94.AL;#IMm%1nT!#&:o5(S]9hgUN');
define('NONCE_KEY',        '[mfS$J%Mfh5oPDF9aw1FpV_d6Ryzs54r6 b5YKMk  e2x45)+=y+1^6M1ydfa1%5');
define('AUTH_SALT',        'dT=cZ<d}wJl<UF#>uv!I-1-rwg[EQiG}ecvW/`smCaP{.nl2fLP;(MOg#wG_h*MV');
define('SECURE_AUTH_SALT', 'zUkN8[l@9YC}@=O0!+d:q6JZOXC%4Z<Hq;7;P<!S!&> TC9GiBe<hLY3x4vck|e6');
define('LOGGED_IN_SALT',   'XdQVU!X>NH,FFxw>zzdR#9>?l{$vYRK30<p@AN]Sb]{1nfP;;XjEn!Xj`4Zwe>14');
define('NONCE_SALT',       '{|4Ly| 8FjZqh$oKWwh14M:g*{AsWukvDmsg$dy[gn-HOe-8cFH!*G^Yb*6?oPvT');

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
