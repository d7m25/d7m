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
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u232660684_ranfK' );

/** Database username */
define( 'DB_USER', 'u232660684_qNqzE' );

/** Database password */
define( 'DB_PASSWORD', 'scjsyZRaqI' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '8.TNtdB@V}J.*HnlWV/e}IkYp16,+k`*f`D4UL0)H2%*UrpI$}}>8vUcv{L2,%tq' );
define( 'SECURE_AUTH_KEY',   '&=Z%~ 4U45XZ!*2D>A;DAxiVb4jS|4#3A-ygCU.H70Y^bNz; `:/QGGizl=gqT4|' );
define( 'LOGGED_IN_KEY',     '5%7L`-=+)Z)8|nRt4>`:v P5d/9I%kJ>ybPDf,1N;4GkhA^`4SI7M.OwsK06~2@m' );
define( 'NONCE_KEY',         'P :ul//e|gz<)A?/FyAw,Srf}~U}4o6xPN(hF?<vHA7#6U JZ01y6Kqao/UYaM7(' );
define( 'AUTH_SALT',         '{~KCPfw^~~9FLP1^=#Qa0!2UvwzJAbt8%I6G$Ob3(&FYgbu[+S=)2hG0)xduTz?-' );
define( 'SECURE_AUTH_SALT',  'EQ3heRZAyx,IS>3jj>T:<2prX1nVel8K)xH<joK+c#+z8iDSR#okFrhbM[&`;3yi' );
define( 'LOGGED_IN_SALT',    '1*_0!f>px ]Ed9}uj h5-ER:*#uFUdppDnN<4?pcR@qPlj2ME)aRfO>;K*kTt167' );
define( 'NONCE_SALT',        '7/,rugwryj1>j06j^@Sk8dR-!Q{U)sCfZ?T`TA5dJxS!2#Ak]XJj5*(J0hv~-~6V' );
define( 'WP_CACHE_KEY_SALT', 'nz`(6r^3~B1[Ggp&t2Sf!yf1tzO#U,I@sv9c8aPgXe1<{S)|5hWT9M]$bXm(3_Z)' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
