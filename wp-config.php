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
define('DB_NAME', 'dsrcweb_db');

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
define('AUTH_KEY',         'Kr7>1oz/}y$Lks{6b(minE3Q.|rdRC[&/O#<SSdNB$2Ddwc{?f4ek?|A?DmDwBUN');
define('SECURE_AUTH_KEY',  '8+XiO&H_SDRvTU7#i<wm7q=1^$jQ}Y3*Z_J?|$+Y>-.$G(m3z/s.{6t|{zNR^IDP');
define('LOGGED_IN_KEY',    '2}8 0A62hPuzgzSJVEDekP.;?|ZuiAK^*})w-RAvQ@Y]b^i%dm!RzeWxs9O/m<e~');
define('NONCE_KEY',        'vX6+2AWWgT;;cE:{p+2@;PH! T1T@#Y_QVA=:@{MGu34*lFtGO>@2iPRk]4~bpYp');
define('AUTH_SALT',        'vba@e 5>Kwn0F/|e6~DM&IfQ8;ir*$Xn}%f+,?mg!,:Guv1{0TV~7hs3iwy}bgt^');
define('SECURE_AUTH_SALT', 'JhWq)cA&MHcP/$-6e;7(n9E]xKOw1TdPd)Yg<3weFWPZIG/R>1!uPTr?>@D_[s[O');
define('LOGGED_IN_SALT',   '+,4NkNkdZ5X)MCG6MWwsIWbyIa#xgH^9Fz56eA_#t-^=z<@,TUGB /agUjGZ`qU7');
define('NONCE_SALT',       '^HrV[c{82{,3z7jYYU-{j-4W{5(8_V>!ZPF&sIH2DzF`Lpu[.%B-w_fr^16gs2[@');

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
