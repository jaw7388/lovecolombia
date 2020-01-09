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
define( 'DB_NAME', 'love' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'v6pF~N79;Kct.o^^IwGy@7(uHNv.Ebr20h06XjqH_C)D8_OKlKL$P25M4Rsc1THG' );
define( 'SECURE_AUTH_KEY',  '^9L1?-KjYd?X,FUN@$gfJzr8^f1]MoUVPF(EZlv_ a2V2[FWs!(KE1JeXtiXoLxN' );
define( 'LOGGED_IN_KEY',    '[m>lBI/`6L0WM!-Zf-]M{dg)WI@+qqA-kMYyFG1 @*o]7<z9;;HxWD5GhxR,z.a]' );
define( 'NONCE_KEY',        '(Mzbe>!/>6aA[^[6,57MD./wVg`-R+rAweK(GWVAD;n]/w Ej1h^2~<E633pi>U)' );
define( 'AUTH_SALT',        ']oB1bOYS&F)v]^9#?E28O$($bK`JcbV-bz?:hHpln1:kj},H=@FU4F.qHk< -RCc' );
define( 'SECURE_AUTH_SALT', 'wcsa4zKfa3NeQ@uD}bEUGVy,Q/G@6&Tny1kms_EqUBg=92TFC^W/,_vrrq) H@0c' );
define( 'LOGGED_IN_SALT',   'j=^[&>,)w:Fo,zRe5;4hdJJgLNJs3++d3a|#kd*$,-^;U3p#J[(4,Zm:/3{>d0f$' );
define( 'NONCE_SALT',       'S`}:et1O Tp=IgB$J-W:EeABSvLm53n6%/BzX|A@hKMf=7{N4MwKQAB/?#}O6{F-' );

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
