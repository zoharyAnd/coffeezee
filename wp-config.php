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
define( 'AUTH_KEY',         '-G%3ZjL#@Oxt%soIy)U5RRvJ*6?Q,G$BHS{4nu,HHLepXs_W]Ey~jDfHUCF$0F>^' );
define( 'SECURE_AUTH_KEY',  ';CKsE].IM,mZONjq)78|ztJh.[*TXDmB2N0}|I8$a`cRmMTe,M|Xm$u3G,Uo=lE9' );
define( 'LOGGED_IN_KEY',    '2D@d2m7hE49OcK$w)Z/~oKbTg<%jHS76+!oI#pyN!@{mNv=kASW<K;)^2j&i3Vca' );
define( 'NONCE_KEY',        '6JA4w:Qy(HEFw%/NX_ydPN&+)R4HL7{W@=^,?CP~O{6MZGH70.[jqgiMei|aP_2a' );
define( 'AUTH_SALT',        '&Nxp]O9JZL0)n<5SSMhNjV7D-z6K[gu3M9IrT*s8d_v#%jJBEzQfFVs]QPB?7O;&' );
define( 'SECURE_AUTH_SALT', '^p6Y;gj!4vfXnnsmm>r==*[u!lVi#vq-@7k|E,DtQ;K!ZO/QLx|j6l9LQbvXS,>F' );
define( 'LOGGED_IN_SALT',   '~~(txXu8W1-([d%P<a&:r;6|5Us|G,7m|g-]zo%N#<xyE1$9TZB,PL8I-mxR5(IW' );
define( 'NONCE_SALT',       'dFjrIj3:[@d0RFTc~9eeMt0TshOZ@ J}&XG[nQ !%7[h6SFn4EKyq{ELn(Zq)_-c' );

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
