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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'neucams_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#Fkpo6 {bbd|[`c`#2zbtba]eU2-LhfMSIss1OQk!9B</DT/yl+d?U-g>{o1Qu)<' );
define( 'SECURE_AUTH_KEY',  'OPE)O )s^B.$6So$k?SL]W6l^FcyC?KYN+zJB1k$biYK^ArO#[*RDxY=.,;Fz^@/' );
define( 'LOGGED_IN_KEY',    'aVA0?!an6aU+[~2jokD#Wu=3NN*,~4BF}PFr3Z&u/!7)8;!}&I%A0//2]%(sR[TD' );
define( 'NONCE_KEY',        'Ow.@ndTN[)(zD+6#:+C7UK1@*h/h3%$,{o47Sr/|fC?=sJ:s+~M!oY^.<:eLA9(R' );
define( 'AUTH_SALT',        '(6B&Lp6yn.3nkx6^?Zh^b^q;+?Y2w#:f e?XNoN[DAxDWxG6p!$8roDK8rid*;B!' );
define( 'SECURE_AUTH_SALT', 'XE~2f(}J/&^1ftjcdO7IYx)l+7RS>*th$Sf@y`Tm4XHNo(M4TnoQcT/rAT o]?T|' );
define( 'LOGGED_IN_SALT',   '7YVE*|Ao{bGvjl>!Lt0Vo~jdnDq[{0i%hKCt~R3+3@&J[j!Wt!9lEt3rAiejL}&m' );
define( 'NONCE_SALT',       '[qZ8HsuwM(c1(?gmC|!Aam#yyQ8E^{X?E+%D*?O,0LDL5Cky@akq{JIeimd~d1ih' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
