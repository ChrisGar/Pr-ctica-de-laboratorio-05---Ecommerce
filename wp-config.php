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
define( 'DB_NAME', 'tienda erotica');

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
define( 'AUTH_KEY',         '?/D(Q%v]Vbo0G1TXz2^9$MGZhi8uXk/Qm*>{~Pq+Q5GDT$SsvsX3^g1OEq)9=^LM' );
define( 'SECURE_AUTH_KEY',  '#]DbOF6HE)lV26&Ayl)r@>4L.rKw{fJu}(0qwv?*`?MzvrjU/$CP| m3w4^~/-rX' );
define( 'LOGGED_IN_KEY',    '6E&v6|3Xr]B!(/^wmq]-$hph!8 >_Ybvb&p0ofK_rNboJ|,~z/M0@_qZ&A*8k2iB' );
define( 'NONCE_KEY',        'F2;<OzZWJium-xJET7[,j!z4j[a`<;|}2}95]OzaTR=+9awR_<=&Z+Lw2sLMU&ga' );
define( 'AUTH_SALT',        'DoR6dypG:Zy:RQq%MfP!K+MCDjm2R9#<LaGoplE#YHv`ylS._L>FNV.R2J31>I#2' );
define( 'SECURE_AUTH_SALT', 't9`:&*IPb$`?YPrxB.+qsQ3hWTf.s0Vl]PI%*iQ@:om(&?r%SwA|S;x%/i}NZd7<' );
define( 'LOGGED_IN_SALT',   'LuLgb^]OM*>R##D>Nz~|Jn_0<e;cL<(l3RUB^ey%Q=HT~2j~,oa}0V4Z4>E q?EN' );
define( 'NONCE_SALT',       '8ouVul*GI(4B+/^0;./~MgW#t3#a0<=Tmr`;;.6qOa]`;EGL(q cF0c#{?66(mc}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ups';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
