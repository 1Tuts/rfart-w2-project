<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'naser_project');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '`RV$K&#_$AC$S]Zynr)GHQu>6-tpfoFvM,>zN-*;jA#lt_9-8|)=/=zc^CfCFGqj');
define('SECURE_AUTH_KEY',  'Yn~c-f|V[|J%E:5p<vU:?SFS6Z0rwO}!!4-h|itv-7x^d17WcN3yp/b@t;r9$COr');
define('LOGGED_IN_KEY',    'KHLH5+IR9-:]hsE3l`XY-C6K$sX8bx}bflozd|4=][I=YA4Fv5>-Q?aPii58|*=1');
define('NONCE_KEY',        'z7)n}zE]~rCoqRaln0u5<;okO)-sYIdBT2NZvvD973F3`{f~h#HL&mL8q/q&Ii3H');
define('AUTH_SALT',        '|salP8a)r76|nPz?`hp_wa;e73Bs`2zAC-p:A--P/Ty[`Rm+snDFPt:18r.!Su_f');
define('SECURE_AUTH_SALT', 'n|g,2NL{>MO[ZCd|nC=x]EX6V&^[vh)$g+hhf,9-JA9ISF@7Q[;2`Rrg!gHL-zt.');
define('LOGGED_IN_SALT',   ';S#c3W,8WXc~A#g`#qGl|76!Z4CgL;kddz[7fwb{ wNgR+UekZ:;&{c+DLX}XAsm');
define('NONCE_SALT',       ']4`<={/-;iNTkA- mG~q_9BSOTc3iu<4RY?Z[I@4o5$Et}I#@h&]L8q#:`Q.uHjw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
