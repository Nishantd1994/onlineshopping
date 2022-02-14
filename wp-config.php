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
define( 'DB_NAME', 'myshopping_website' );

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
define( 'AUTH_KEY',         'Th(//Qyni%JrJT**~E_|?C`vr`,%CWk5(iT0 bie<1;jNe=+@><;`sRwyY]Ho(?T' );
define( 'SECURE_AUTH_KEY',  'X|/Y0B@Gn]n}3,sj*!iN18xB,N?3XJ1pLS~J|a)X{G%{nJ)Cucs`?rA$6.#E?_T0' );
define( 'LOGGED_IN_KEY',    '_RW{[`|A)msdRoam8gv60fsMwds@?!6g|n9qJ-0zd nF75h|Yk?Uf6[{rZYB,%0P' );
define( 'NONCE_KEY',        '.`(jUrQPJ#k&lx2!w=W0g*=$y!-;og=*6k(@%202IzszNUTc<$bxNYw)B}&~[Ar1' );
define( 'AUTH_SALT',        '1W3zA)1R`vodr;jz7@2Dda`6h*zTS*(EGhS8so(=7{psVnu4JoAq4i~!*i};VIV+' );
define( 'SECURE_AUTH_SALT', '4}@j&$$t/kLY4epTl%b ZVGWle|V=J71^+G$`qsKKT[7l2kFeSs_[/p@(`.7_G;1' );
define( 'LOGGED_IN_SALT',   'IA&RFeB?6B,g0,b^[IyOzLU28eyTe9L%>8/&tSo56BhYPiQwL-+wC6Wfi}*cB)*J' );
define( 'NONCE_SALT',       '4y4&s_wn}bOq%QETawgu(cae7|u$Jf0J>nU#1tiHuBS-,@f}=>2Ttd~YbJ0Me/Zq' );

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
