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
define('DB_NAME', 'blog');

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
define('AUTH_KEY',         '] RW%K?%v5.SU^^sAMr<8<<FfO_S8makP:ih.YILpeDWqv7U81#)xFC7?6GjZ3:]');
define('SECURE_AUTH_KEY',  '|-woC=$edK{@E.RE-R@7=/lI=gZ^j&Bn^Z$`RGZKr9|]Dh!lza!fpy8t&V%W4kJ1');
define('LOGGED_IN_KEY',    'j[C _MruD]J%t>[pqB_,ZuRKs$a/7x;[o@cUH1uLfPUcnScPM^6ZB:q%+npG5M)#');
define('NONCE_KEY',        'OW9yAKW-%I<:AQ%b/]?C:eO!jhk{&HXUSyPV,m1O6fTZ6v5NfZQ>_q-90<%aR5S4');
define('AUTH_SALT',        '](pp}.<LAy*>a-d~_aMHurb~2F4w!!Ur4C@M;Pt5T@DpqC47C2JqmJT{l5v6=<$-');
define('SECURE_AUTH_SALT', 'l!Py?)B*^5deN|PFGQa)s9TA~}zW=baH?Zd>o6Ma;,HjM]x3Oj;p5YUh q2B@no8');
define('LOGGED_IN_SALT',   'SZU@iz@XA5lC{~SL&uqO$7~r2FBjQEC,O6lSeTh+:6}i0`A2f$WU^{y&4.+NDm6 ');
define('NONCE_SALT',       '81+uc)]}&~i)1V}VsV?$S7f;1ZE2?]LDrw@UOU poVt#<lm~hgc@.*QD:J)X2sM2');

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
