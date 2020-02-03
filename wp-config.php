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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'kD+hP H(Aw+~s;gQ,:|>F6$}KHI/_6Tdvok52B_-[NMdK_pGakV%A7O)ts}WjsRC' );
define( 'SECURE_AUTH_KEY',  'OIPw2c(hLa7xfO9Rbt]V$C:UG$tAhQ:jt_T%.#$]Vyo$o)b>BHsI/4>,L*OWoCwa' );
define( 'LOGGED_IN_KEY',    '|!l(5<+<T%#fwigx ]X.Md9mu`dzI0?]F|F,dD>C{7Ew|IM*QY] %,+vFOdjd?I-' );
define( 'NONCE_KEY',        'hDD,3l%f,~!|^yxp5k|#aR6W]$?S3h^-C#,=PI<VHGEY9=+NwA l{#:WC]7Xpmaf' );
define( 'AUTH_SALT',        'TG(xC7hb]hLnI!N3XpLY^MsOU`)M7S{}ONXWQ_U5zY4i,LCF5+V}9Gzx!U YavW6' );
define( 'SECURE_AUTH_SALT', '^>.c8*snaL&|HI@UXuJ*%_aO;~29APRMI;N4G,?3]Ygnk _qMweQS|9_.[l%~RQy' );
define( 'LOGGED_IN_SALT',   'seaL8u0lj<w$sxW.G|u4W$9>dXtwObBkig62H%b`sjf!~Yv)EwN!PdT>nk/q4[Sx' );
define( 'NONCE_SALT',       '7?.;ki:UYK0(,#1BDgFs?82-S~LG|qZ-6e4}CfliW^dGluj<v#nP4Ys[8wX<MF&O' );

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
