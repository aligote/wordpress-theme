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
define('DB_NAME', 'wp-themes');

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
define('AUTH_KEY',         '1!DmP W?jW&!}(M@jHzAv4(>3{;+ek64>zy_:{1V/;=kM?-8p(FY2)Q[OH;i}a^Z');
define('SECURE_AUTH_KEY',  ')%X~oDl^u@0tR)xAri=vf24=vdC>g=-I_s%[o!?S_LM9`#TYMf!%,;>Oojl,7Jaz');
define('LOGGED_IN_KEY',    'UfDdFXE}HW~U+3$V%QR{lPLKu5!_8, lPdwN<6vYH;rl_^iLn{+Y>VRpM_tS3*u(');
define('NONCE_KEY',        'fC7l.tg&xXn~mZQdl@AQQ|UJP@LyTD[-Ta!COU4iza?F%1VyH^R<:-];^6Jp_rMO');
define('AUTH_SALT',        '%LI.h!JbE1WZxCinr`TrtKsCPp=7OIi(vjUbJsnr/jHe`^l-ue;D{7_%QwVS]v}<');
define('SECURE_AUTH_SALT', '0aDi9sXb=[V7`aB@Ho>f3[,^WNr?Lo}|ZZhuwtQ:Zy|OS!tueHSJu ]U_TN<<_iH');
define('LOGGED_IN_SALT',   'qmW-eB:2F]LAV[Wed`W`~sE|yIijF/`yPME$qna9+yfP|qy[nb77hSjUN]_^CR$D');
define('NONCE_SALT',       'zfA)wUkxpy=)AD_Zmu)s_H7!(fEV;gB%~|3=%IN`6R<EFwlNme=^4a~BG-ie4$B[');

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
