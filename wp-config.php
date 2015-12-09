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
define('DB_NAME', 'rainyportfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'y;s6aCiXRX/UGQa:x-fMA@39Zz#?HY})<gHl}auAQFpSj-KnmZo!^oAm6r-Fq|RT');
define('SECURE_AUTH_KEY',  '<G***dM9>^O-`[3i B!5?[v^ L#WYfN/~i.UJBY%o6MUP><DC6R NC>;|O=^&PJY');
define('LOGGED_IN_KEY',    'RrSv7x}{/P^D!Ev>xN5*}$b5DU:K7;X41Lk| |2D5TvwPwhSFn|2b]M-WLc<]^D0');
define('NONCE_KEY',        '&k+e)[4pUVx`[7[Qy*-7so(w6{4Z;Uj+ND6i9qEi}Imww}$`W&]?1F5bzv{~*y:$');
define('AUTH_SALT',        '?YA6+52i{`AYNJ//]9k)cRw,6TVRPe>r[qP^TVpZn~mI3#He;sC)Zw[u~aI&RncR');
define('SECURE_AUTH_SALT', '%[M#XF?FJ@b<&-TSm2Z:rqJeu?wC_kC82fvF[5YU0T3dtzW_Ab}h+Q3!lA:-EPyX');
define('LOGGED_IN_SALT',   'S5|369-tXaDyL+S[J{|> .|.gUtSbDrvKA!;KpFaOD=4UZ:5{PX<NJ(]OG>p:*GO');
define('NONCE_SALT',       'YDCCt>X-IUG)n;.I_sGlafFtYKg(K]o]g6BH+S?qz?-u/ka|-XP$k*LDJ2u ={}Y');

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
