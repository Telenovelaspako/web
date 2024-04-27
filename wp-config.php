<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web' );

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
define( 'AUTH_KEY',         '0Jzv0/rwSOt>j2sMeMr}4JIB/>U9q(e;P)Csx.^4a#FrOuPi>57|2/pL*~vt}>(B' );
define( 'SECURE_AUTH_KEY',  'f(=LYMj]Xfy)VSb2v,WzDu/ Wu?,f7&8*ROix6r9)>Pg{W6EK}EWp0{MfR=S2|3w' );
define( 'LOGGED_IN_KEY',    'RaW&,ffuTxOI6}v{9!?EzXrIsj6Uz6sv^OgG<^K&ANE2XeDkvtpS4vkB,4^%y<Aa' );
define( 'NONCE_KEY',        'TrPU~vcp<N-;CuF$W`5knrytc?{c%HKq@,v7jyR<(BgndMiuHKo/^]?!3eQl3b:R' );
define( 'AUTH_SALT',        '`Z5Zv.`a`eB-VAhzI2-j88NXfyrxl0$d,fx7}<^nU9-)QYzxsLBzydL2wd6prKrB' );
define( 'SECURE_AUTH_SALT', '`5|A83!3vXR9p}dRaXsN}7&L ;vFU*^c*gRg2kn;X3LR>KZfT*5Mpz6h669DJ9yT' );
define( 'LOGGED_IN_SALT',   '@R>r#%jk_u.Xyl,lo4@tFz>URoDZeR`T;4qA],+&|>Wl@Z6Xx,|5iZ**B&?FXQ#I' );
define( 'NONCE_SALT',       ' %9L.gYM-H.mIW?pQ0vS|wNK+fO*CcE[C^:*v[qIJ$4B_3rW:Z*^:pKYED7e~0$!' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
