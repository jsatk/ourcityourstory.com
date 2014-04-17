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
define('DB_NAME', 'ourcityourstory_com');

/** MySQL database username */
define('DB_USER', 'ourcityourstoryc');

/** MySQL database password */
define('DB_PASSWORD', 'aT-vN?dE');

/** MySQL hostname */
define('DB_HOST', 'mysql.ourcityourstory.com');

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
define('AUTH_KEY',         'j"&|DGy%`K3&o/ji8Y9b+&)mUY?EaN0REOj@6Coc^Q`vnsfU8X2RROsQDz)TK:x2');
define('SECURE_AUTH_KEY',  '@9+yA)5HN^i`oV@I^84PG(q"RyivPMeA3V3b/L|QIBg^c*WoJ)8AAcn&49!^GH6A');
define('LOGGED_IN_KEY',    '^F$79kxYl8s3?Pqpd2@p+)X:qE4:7nnG^P~%D|?*zaFv3DZ:H;9Eg?BeI_XoHa2P');
define('NONCE_KEY',        'zb15*+@/3AfX3gE1iUyl`^Mo:&?(w/w!)Bll$I6m:%KpA@9Nn)u#OW`w!nXry#^x');
define('AUTH_SALT',        '3b|D:Q2)%ja5O(;"k`PYXZ@q$G3Q@6O^*$84oAWmAKO8H1sxhKxgom?v8xKgpZac');
define('SECURE_AUTH_SALT', ';@PM#:9K*xqUK6TsR/P@_Fenc:|5nAzFFN$cH40@eIX`^*2(lwGiSikwRqEUH1:3');
define('LOGGED_IN_SALT',   'o!O`S?uks0$cQ#VUZW$s@LIM61VddsXm4!"bxC%ssabA)Ekj(xWFU9)%diPJPZ6U');
define('NONCE_SALT',       's(SWvvkwj4BtrmCU5F?;@TfK&t!nVQ(f/NHZ)d*jCF~)Dx/Z1:Y*aIIW))Nnk&Q6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_vt2jjq_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

