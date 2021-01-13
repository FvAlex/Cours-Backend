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
define( 'DB_NAME', 'wp3' );

/** MySQL database username */
define( 'DB_USER', 'wp3' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'W]>3rUVbthCVt~%yBFMxQmejgxO r4q9xC^,qVBd[pd;?cNvc+;StDTh)KExOiH#' );
define( 'SECURE_AUTH_KEY',   'jTH(l}_,TAfVWVLc$:[xu.b.O)#i!;$h&6V8$(xy8-hR{#3sOg|[p)s86-#fB4]9' );
define( 'LOGGED_IN_KEY',     'p=/#u>`St)j/_EcA||/]5Z8k36KO?ZjPBvKduYRK^rQB/D?x$}w>FP385jA*ts=;' );
define( 'NONCE_KEY',         'rbTG:pCwa:QmiM`Fea1n`(|p&NhWit,geM>VQf#8(0bsVh: `5lXUqK}3WR[RrxT' );
define( 'AUTH_SALT',         'j{Rd7} #p;p]8=hLK]8>f/]34RSwHl[9!p7wK1EbO-UsO%I_RP7r^e=3C{>Y8O*m' );
define( 'SECURE_AUTH_SALT',  'idJ}B@L~&|Ms&S7]48E(>arqZX68@(np^WWn@z)I7-Jrr 8>jG<g:`vD}o>nv, U' );
define( 'LOGGED_IN_SALT',    'QDB*dByUpRO|WW~L PIV#`*>F?vMz.&}<;+cdfWz1l5t,KDT~+NaMRvxd]r I9,K' );
define( 'NONCE_SALT',        'akm$]-A/HV;rE@V)Z?gUa#.=0W9,$2geW^fxw.ij`<-a_[42 ]g.6nyAjCJQk)gI' );
define( 'WP_CACHE_KEY_SALT', '<$SzCr} dFpG.i6xb6365J,!o|nt.CMK0hNR!zN[|Z^-QgyIp<v01Xk*9OFt).Bw' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
@ini_set( 'display_errors', 'On' );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );   // 5.2 and later
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
