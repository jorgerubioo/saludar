<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'x@!g%jgj;st)DpT1Bs*{K{c<6Me(` )9e/6&X+9Gk(%(wIT*o(}=.J>Yo`Lx^S}j' );
define( 'SECURE_AUTH_KEY',  'PO7?@T!,+}be&R[bR_SsQ*ap`e!WeKtrf;Uz|@>,!D*D/PrIi7O5nwqwYpT]JWOJ' );
define( 'LOGGED_IN_KEY',    'rG>`R{bxSqGVTB$7jm&V(2f&) W(k,,]5:x tq|wg-]99cyccG:^)a+;`@qAW@4=' );
define( 'NONCE_KEY',        '+xCrf&Stujx/=~w0F3vi<[X}TgsSi6g]Xhs.r1% 8)3sgZM*e4B1;-?-nUb:B`=m' );
define( 'AUTH_SALT',        'e(|<%Y_O#A.[!?@ ^syguvvDcjaG@b9PP3~~3JXav>SbE*puez@H}rH7|bAY?DTK' );
define( 'SECURE_AUTH_SALT', '5d}zl$Ef-$,2t.C@p~r,9EB|@}}0sa=]LWu2K<J5<k&JdtAA75!/np&+OstZn~P$' );
define( 'LOGGED_IN_SALT',   'g1_ouc_d4t]8;px|GaC2||H1FGo%[jVji^)D9vhE$F#e&}RRC=#QCe?_;5BL>K6J' );
define( 'NONCE_SALT',       ']1B/6Y- ?v&VZPgw;P$k$nL]Z6qa|qdDl+IgfE9%^i!p&56QL&y_Om$Q9i|r:<<4' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
