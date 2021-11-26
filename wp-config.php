<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
define( 'WP_CACHE', true );
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
define( 'DB_NAME', "localgayexperiences" );

/** MySQL database username */
define( 'DB_USER', "root" );

/** MySQL database password */
define( 'DB_PASSWORD', "Abc213943" );

/** MySQL hostname */
define( 'DB_HOST', "localhost" );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'tbR&[:lg0lzMYQ65F.nT6YJ- v%5shmPWS~)kBf=EH.1;Urs8%ENucR3dlC[fsF1' );
define( 'SECURE_AUTH_KEY',   'rV2k2R^3ngu~Lvik`ZArg>H8=ki2aHQ$==xpyosFYiD+bP]a1[>?uqj8Y,`k o1~' );
define( 'LOGGED_IN_KEY',     'r=5sAzb4)SSQfW+ip?m>xmsiFQX?p+Ek6]T]X:05-+ixM6>VKeq{[tI/8PmvaE/<' );
define( 'NONCE_KEY',         '(1.>z.g= U1H0G[ztV^SyEw3nbzTm/JR@9@gr~7t)$C1Qt`A.`;8g2 0_9&]HH&P' );
define( 'AUTH_SALT',         '43suvXWb)#xLwJP`)n3~jWOIQI![bAyq$sxIC&lYs&h}8ge*+)wP8+Zid&;j]_bb' );
define( 'SECURE_AUTH_SALT',  'lp<lM[G4#YIHwz,b@u%G{>YVN<t7Fh=/m/R#K38G,6p=y#RfW&bAd}I$tLF}NM_6' );
define( 'LOGGED_IN_SALT',    ',C&cIi;l9%?xyj~!9f7sT{`G+NrCl6?f:dpf<AsoG)J*9c^ejw.B<[T.TxVlQikq' );
define( 'NONCE_SALT',        'sBYyT>,3KB;8&1YN%_c_-b(f)(H0Jn4``.h@|{_NwZ?,n%CeoPk9+AVtC4LNO|{h' );
define( 'WP_CACHE_KEY_SALT', '[C>k~B;#XF/MmGKpz>;4`!j^X3Wjg8-(XSpt k3NXTDx!Z0Y2_,+7Zo]hug}G6&m' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
