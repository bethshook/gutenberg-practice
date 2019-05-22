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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'NNqa{0RL0b]pMs+So[pBM=YN@O[WRKR12pfp{oC{Wx3?z_5arYGTTe4a CZ`=Qd`' );
define( 'SECURE_AUTH_KEY',  '_,2Xy|%WP:(hjm^1RH+8gzJwY(=z+@75Gv~`XdC+-m83c`uAHDl$fJW{rIV;PW-4' );
define( 'LOGGED_IN_KEY',    '9aU/TNJHTU5wK3uyI_Z+|_4WKv:>yV:3eXwB9}j|*jX_gESB;cvC-C;_}zJ#]jRb' );
define( 'NONCE_KEY',        'cO/K7~Ga#SbV*>RIv}H>R@w-s.YX^dbV_k]|T3beC84yp7)/rdc@/Mp.^[,oUL_7' );
define( 'AUTH_SALT',        'x<%*+gU2M-.W%,`fv%M8&kiUxA(.RRNoHYL&jAjW.vw;<oZUIKzuZB2]:h^G8EmL' );
define( 'SECURE_AUTH_SALT', 'NnD)l?G%m/X]a*484xX!%,pLYoR$BvVH7kXZ8t#EA!e{])9D2A5E.Z%eIt9W+Fs1' );
define( 'LOGGED_IN_SALT',   '#L)nJ6w_gI))|r9D*9pV#KxY8.2<SUY,=0}:k_hr2v6R[_?lz/mm-c3J;ktz^k#>' );
define( 'NONCE_SALT',       'CtCdMirams:Kn_8{XCHnsm-AJnFskL7Xn+Q1i9TzQ=RW^#s1mq~!f/VkcjO6Y{f(' );

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
