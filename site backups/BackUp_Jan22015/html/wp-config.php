<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache



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

// TEMP REMOTE DB CONNECTION
//define('WP_HOME','http://brain.do');
//define('WP_SITEURL','http://brain.do');

define('WP_HOME','http://dev.brain.do');
define('WP_SITEURL','http://dev.brain.do');



/**Temporary**/

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define('DB_NAME', '770273_lsqa');

/** MySQL database username */
//define('DB_USER', '770273_lsqadba');

/** MySQL database password */
//define('DB_PASSWORD', '2hAspAha');

/** MySQL hostname */
//define('DB_HOST', 'mysql51-009.wc1.ord1.stabletransit.com');

/**Production**/

define('DB_NAME', 'braindo'); //DATABASE NAME
define('DB_USER', 'admin');
define('DB_PASSWORD', 'Pssw0rd#1');
define('DB_HOST', 'braindo-staging.cye33iloeegm.us-east-1.rds.amazonaws.com');





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
define('AUTH_KEY',         'E2mZI&.=q<WW^l0Gh6B)rY^rly,__{:5T3yI,2v=aUqweQ4)Rx(-Xgw%:/(QMH@)');
define('SECURE_AUTH_KEY',  'BzD*)[(8+EVl;Ig#^Nf%BFnjaGJO@VrKC/W62,)ulS;0Z2?oyKK5Zn@[!i*C9Els');
define('LOGGED_IN_KEY',    '{Cr_Rp|NA[:UX0|[1a`j@2e&IDJ@$Xqm+?BBO.=s3Sfyo%A7 37DL[}Hga>ek:&q');
define('NONCE_KEY',        '*A{ 2n_7<gfA|Y(S#&<~.ZA!fV$mWIG&/4aFt6,a6Y_`:6. 3|%l(HKhSZ)cL08M');
define('AUTH_SALT',        'Utw(!B_#mFyLJ9#r(yW$}X,H?&m{cj8<)7M{ij6~`n^@R8b:!IXJP{&Z!D`*BV0H');
define('SECURE_AUTH_SALT', 'XVz)iVWm.0f7$=lZ}L4oEc|~5s{W!|XZ>F`*Ca@biM6* KDT4C2m:(mG=#a`_zcW');
define('LOGGED_IN_SALT',   'M]PX KX?^ZGOjp(y]n#,X52:J[|%)@fM1C?&Ti) 2IINnQ.0Q9YS&b?%?ZHN%7g[');
define('NONCE_SALT',       '4#q]/+.n3UE,8xZJ%]fj;*%+!K:4HdAq>7auwQZ.tYstc}kzTlALkn;LiFPR>68@');

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
