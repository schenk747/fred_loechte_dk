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
define('DB_NAME', 'fred_wordpress');

/** MySQL database username */
define('DB_USER', 'stoffer_dev');

/** MySQL database password */
define('DB_PASSWORD', 'St0ffer11');

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
define('AUTH_KEY',         'z`Tv+8_0k@6fa@|1+}BOi>t,o2{9xn22lQ*#)C>{9bGehPCgH:Hf_sX44u&DD}Vk');
define('SECURE_AUTH_KEY',  '!?THCH.w@k@ou[k,5wW|-ypF_0{w*zWAIZ+:X=g-58|7[qKVA.3O4=U.-`pcJQAu');
define('LOGGED_IN_KEY',    'x=Qmz@uM-4XpaOZ&+p~~Qmj5z/|.4f:XU,eKz,)z|@0`5%IK+tk~,WjPCFC|UABj');
define('NONCE_KEY',        '5|H+Pc6B(YZUA@iVY-N(3@ONk&(:OIicgqk2+e#c=bT<` Q;7=P%>oEtZh9K}#+[');
define('AUTH_SALT',        'FwsU5;LIOVvHzb3`=!,3U:|b+sREz|K.&%R+&=++QHCtRSeIJ=D+]%AF`k-?7<:K');
define('SECURE_AUTH_SALT', 'YZBv#ZOx<]vr!>`SlrJ{v+6%J+ZUvn#!inoQ,k9x`S?.GE]W1TRE||]99_?`tR@q');
define('LOGGED_IN_SALT',   '(QNH5U4:s3STt+_X)Pd*Qe)oL2fUl-|>{$6 p,ih8ih8W._7,Km<sy&4&7q@.KJ|');
define('NONCE_SALT',       '.eEv,RSY<wmVr~ImDfC46eCbE|NqU,(i;opkN.OYY[}Sh<z*jv&BtsUL7TT>q+DV');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
