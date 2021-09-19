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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'UK*NXg3Jeb8q6lt/' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', 'h!j/td6]=Xy~F+-C$sBeQ#izl5 7{WjVy*VT. (j_PU[]LWrro9$gM~,L6p.$H9.');
define('SECURE_AUTH_KEY',  'D_CD,DkB 2{Ku8QD9>Y5M/$oNX1#q4L:z_&z5I[/=orR.:5.ALC[C6*:O*s+F-VO');
define('LOGGED_IN_KEY',    'A$H0-i:?<cHCa+ $|+`_h=v5b<MA!7i:K8|7a82j[_u?7G5vAupu65-yPcafTU9+');
define('NONCE_KEY',        '}T]0:+_;rn-U[]w|+J~SlM[lUZmlQ;v*1b?s=XD|Hnnmj_9gkM9aQFC{.L9I~lf-');
define('AUTH_SALT',        'F;+s(,J|hh??&iZ8U0W]aUc<&A|hH+!b-(G-((i/bfu(Rwb!D{>wN=r#|Y_L+`Qp');
define('SECURE_AUTH_SALT', 'a/.*11a+i`/GR;<]<_9-6r;gSUP -VmMl$zQPg5l_T+al+5Z,S9KJ(q[hLmNqegW');
define('LOGGED_IN_SALT',   ';XvH}<G,HoB%2-??UZ8<Gj5,DWXlK=O; ~|<^hB`nn]ie{c!@g,`wP#Hi6v+ 2#~');
define('NONCE_SALT',       ']ONjO(kY},F(Q-yVAJ<=CEwPvj;H. Ft5T6m=GL`LrpuAzfhJh!p+mm]f9G wVH7');

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
