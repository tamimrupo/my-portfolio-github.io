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
define( 'DB_NAME', 'rupo' );

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
define( 'AUTH_KEY',         'Hfoke+:?dg;vZqNA&3*,>mAs^ILA~oKCq%BLFH:I,G#;!ulH?m?@<GdZ=K=laM# ' );
define( 'SECURE_AUTH_KEY',  '{s/3EWO2&i j)LqdeYi#%vNj4M(,6hYS&e[7*oc9#(t+}41NjoH Ro[0j09]b?a/' );
define( 'LOGGED_IN_KEY',    'sRI}|mB#<aDyd(?wmk$Ey=$rw4c+vr209<Pzb~0.5v-N)hk)46&{A:b)sS6)Ps =' );
define( 'NONCE_KEY',        ')(n{/F)T^t4+A,)9[??0PFD)D~NN.PqW&t_sylJHwykwO{(/9yvM#XRM-SG6lo(1' );
define( 'AUTH_SALT',        '?L q_wmywWnbDDv;9Q1TvI$Qw/Hq!v^GaV0Qp9vZXY^,<FvDgLa~YCn=cn4CY)tb' );
define( 'SECURE_AUTH_SALT', 'aN).2mx{/N~rQC*G(;7|fs?YHuK.ystl?u&Y;kK= +En3Gf:{67{;#S<7V-{0w22' );
define( 'LOGGED_IN_SALT',   '|yE$P8~Z+&<1$%fja`1ElUkDdB(=m bYecVg&gey;Z<M39<VY]jr#`!PFqZCf(jT' );
define( 'NONCE_SALT',       'T&Z|niYuISnjO~CNdKJ85rna*~Lc2Yx2!1LL/5Rmm:&`V*bz^t;/Bz|9a!o$Cu0~' );

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
