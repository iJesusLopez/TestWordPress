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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'l>qdtb*QwpGnvvisJ*) qi&z3,)]?^,xm!PR=%w`P!5Qw0[cni-FZ`i!4V&Pz?9`' );
define( 'SECURE_AUTH_KEY',  '5#kaAby N|dO-WSjRqE&a`t3rg!5*ea/| ;%ShXt+)vRG/BL?TJbQ?T&0FVV(Ful' );
define( 'LOGGED_IN_KEY',    'rZQ7zo{eSk<I=FB0{Mus=5k5l.fSoZB8QS+RYQNMD* y7K53_J(j>m T,N4xy%.O' );
define( 'NONCE_KEY',        'P=_n0ut|;Na.TYEiF&$Pn~w)uD49- {m*jXg]zKiX7^2-[8KU-G4W94wk.]KefGl' );
define( 'AUTH_SALT',        '/TBg;{@f|:&a=F&v>b6k23WItu|.|A@jT9&G1>f[&96$(hf&kGe#EuDqd$9@&.RE' );
define( 'SECURE_AUTH_SALT', 'UVa1*k0w`tRVfh_r-/cCM}r):YV{UJWlRvz&$u_2!M>1i8QM|4oH>{N_Io|LP(0J' );
define( 'LOGGED_IN_SALT',   'MR*I{KL)|`/5q[F8VuZ/Zj53IWbK-Z7 $m^GCs7?/7xz@E8FH/mx-zo8ra9:,1|&' );
define( 'NONCE_SALT',       'h79rTQ&g7GH.HM#l-mbC4?Z[Y%4{/(ljuF2M|8)W<c-)SIr|nBx9Z`#LY~l5EH]R' );

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
