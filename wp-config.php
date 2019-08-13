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
define( 'AUTH_KEY',         '$NMW 9HXl@kzYWp2r0:5O;2u]f<W]3UBJJh%tUOM,hvjKi5l#NP5U-rf0ptJvHA|' );
define( 'SECURE_AUTH_KEY',  'EG.kEOWe`a;U(m[G]#2)kx|M$lcekDSk,8P~7*1aQ}0,IPQC6K/EyOu12r,<(juP' );
define( 'LOGGED_IN_KEY',    '^]KsQR:-B~&gY]0R~_S<Qc}sajIg%b7/G8<Mb>>Csdqo!]X4r+WA7(Im9dsQlmpl' );
define( 'NONCE_KEY',        'rJ2#xEW>t{!Wh;&G/ap/FETPr;O3m265Avqc49.)A/s]mS/pO;J`0sc&9rVH!&ws' );
define( 'AUTH_SALT',        'aG^]%?Ro=h|67sf7~p;.u>yIHBS9lL-)L{ac)|o|#g?A&<A[omOIdLDyT}[w-%5M' );
define( 'SECURE_AUTH_SALT', 'm 0Rw!2eTgQlLVhns<qp?w@XW%RAQ/($3pDosp+<i__Hyl@6|WcrLNjz,+#uYsSG' );
define( 'LOGGED_IN_SALT',   'kjjrHI@-5IV9^Sr`>)DRuc@^>$Nz}%QQib,rHhTMmuR^r,u.Z>ouW.LKut(n_CKn' );
define( 'NONCE_SALT',       'Kk~~si]gSN@NvjHuZZIx,A%y6xSV.%{L-q-qTID,$Oj %+eO3p+smPsuYd&UC=V,' );

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
