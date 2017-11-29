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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '=.zw61MXz.g=[Eh.RyPDU.Frb$3N<+yu=b{L;i-k8g[0*PryX&|r0NF%l{!Ef=#a');
define('SECURE_AUTH_KEY',  'dQmg+_3D8e~T ?8/AVo)qe?6 s]ns3M!8p,[NfL94MOuH!9sveT*>de.A|a}y1S>');
define('LOGGED_IN_KEY',    'X[R5~MCDFi?|L(]sf^1bfQMH-K&]!Qc;q39lIM,}}(+sl#MG6Cm]gKHG19Rx7{3V');
define('NONCE_KEY',        'anNjHb+@VyR,8(5rRV&v{tER!A5ISj7rQ._q`tx,=.wl^U_nOaai[}*lrEX7Dkk}');
define('AUTH_SALT',        ';6Gtg)t4F{]+v lb6W$E_wHxH:4 oL+g_|WwYt{uG$X%?XX:UgGH37?=0c9`qQ!v');
define('SECURE_AUTH_SALT', '!%[Ee3QO2]dSxbZc_Hdr*l6H|YYm3I2lp>am<VM5+SUfx/7ba$={Zv7U`&J1u?2W');
define('LOGGED_IN_SALT',   'WoqyVoki0YsJ8RMyH`(12wRFi5/Dhgwm)+2AL{J_QD3TNj3_PJ+^_O$C776/y(Qz');
define('NONCE_SALT',       ']N$[$1#KP7-sYhlZqKPi)H}@brML}XN6a`ti j g]zUBZ._W7tm!AdH4;Q,Dl!tF');

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
define('FS_METHOD' , 'direct');