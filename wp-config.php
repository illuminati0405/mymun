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
define( 'DB_NAME', 'mymun_db' );

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
define( 'AUTH_KEY',         '9[kgLD/.3U#br)o/: u~SuK_tsyHT41a!V!U}THyDeUA++~S[vp:XFMq*d0apO{m' );
define( 'SECURE_AUTH_KEY',  '8h^4;K(VGl%0%$%jOiVL%HG x16$H+d=bVW0V*<&gVecX?~EnYi;+#}hdN~7Dma1' );
define( 'LOGGED_IN_KEY',    'yn,?UOF_6XLA;B%GXPDG!#E:.d&X>I}WbE/4<wH]H@tO|tNtWdtXG3Y(i/2 6Ao:' );
define( 'NONCE_KEY',        '6tkEo92Z8P|a]jV~%oO^;?*Z0u;)/5$XfS7`w#S4(!5)c>od6^n I%zfb_g9C}=K' );
define( 'AUTH_SALT',        '1d?`<p<a`f=Y%@iqIEnbzMW#Qp+SL]$6YZ%ujMVdy([2fkm-<7#XD}8KsM(_>kT6' );
define( 'SECURE_AUTH_SALT', 'nUvnl$2x:GiPCr]a19Ka-Cgv-1x{2/LDH](ycL|pQIe7fms[FVVvDVN }d_?:)^<' );
define( 'LOGGED_IN_SALT',   'te<=%GkuN1b^I83Yus{H<3G5XX4PyOno=.^!Y.U{KHsyA/+tL}x+7A,aEK+~JC:I' );
define( 'NONCE_SALT',       'I`VCCk01<Br4<e[%Wo`BRR7jsxAV;e2S)8QAyo;3tO8ChYo [:v=rz5$MWfiy@s ' );

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
