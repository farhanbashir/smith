<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'smith');

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
define('AUTH_KEY',         'hJS$SzPNwq%R=8|I~/^Pg|J%Q$,Lz~HhuK(9fzN;X-}&2^N%|4%`W.x_@1)tgLI=');
define('SECURE_AUTH_KEY',  'A2]ls%v$U`nC!D:NMwIay{[7`.;).0E|/7:3@c=Z-bs~k2M-^#:^WS#21yQwCx{l');
define('LOGGED_IN_KEY',    ',k>.Eq_|>9xrw47~D;VS;G4DH#TG|^/?dD!>,b/=KRrf#||AgUY(.r! M0T(hfa}');
define('NONCE_KEY',        '5UP<?s5s(/l-^Jeq_5sMi%&Aw_Z1cH}:Y.R!vET-cr_Uv2EVxKFv@HJp-+|< C}j');
define('AUTH_SALT',        'Y(d`(F*4;A>EAP@QfZw+V5mV72j5%;N45_ANMGiqQl,|7I.%8c]gVJRhM6ARVh#6');
define('SECURE_AUTH_SALT', '-<gDuNiTC8wMrh9uR)q-QMRbrTcyT]BiiK6]DHmV0RHF:FDhX:S[6gxs}m{7 ^15');
define('LOGGED_IN_SALT',   '-Vwn_ 1gtW#?k2l#k#= ^u}GP</D/ouu4I_V^|%A7..K!inH<fW]4$:Gw7tBa)f+');
define('NONCE_SALT',       '9!yHuuK*_ldmVm1s_Fe9f 6M-+XmDqWCz>Xx.i^~fF8gn8v!+Er?%{%}&Uq3!SyK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
