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
define('DB_NAME', 'anson bond');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '!b!%5i:QWshs7twP^(lHoZ9O,yC_4&5$Z@lB&,O{8bSo:IoK-@/:U]#n%^%W6#q5');
define('SECURE_AUTH_KEY',  'l`ci#B?6Uc8#y6Xk5CX{~mQ:]$Dt4+:ALA6SPPqU8Rco1(34z*B3udoPvdi _sT%');
define('LOGGED_IN_KEY',    '!Leb><xe2btZEwE?mS@=|2<tLr-/M&=xLog)(0`}_s>T=Au1-Qncnhj&(u+,JzP>');
define('NONCE_KEY',        'nX@HgB9S_22AgBeDT{>Z sH8:T+@NG 7o[Fotd=xp6IG}wVmgc|36iZ>wazx]*%C');
define('AUTH_SALT',        'Dq[3wPo?v[}pz//$dp/f`iXh[D=Z?$=|#9R^Q4fb>:L_L.RZO+BxT?COQMx.U9gz');
define('SECURE_AUTH_SALT', '-o[G7$?@[b>zqMIf`r>;*tda>eIg#sUtgI!$wlF03]c!T0rQrqNJm3g4[ F+k`Q.');
define('LOGGED_IN_SALT',   '{:=xXgY;4^Qm|uO%wsPlGoKt]A>A`} MCVQ[u!w0PSrO+DAc{%0,$+m&EHx)q3C ');
define('NONCE_SALT',       '1`k?wd9`pc-h|x!WCP~dtYKkGw`}ERPeEi`{>c,a@^dxPlzUET*zkVmjYzu}Bcuj');

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
