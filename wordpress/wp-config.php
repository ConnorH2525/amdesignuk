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
define( 'DB_NAME', 'amconsult' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'w-=:`.!5<9qa4mqtfzOZ~/a[e?(e<b.}Isk.}%/l^xoJ]w7L wK&RNTOMKRd?}T;' );
define( 'SECURE_AUTH_KEY',  'q~_c~XNq_wGgc&L5lY9Rv{g}nW6vjgXu0Jah{hOpc(OP19Oi/u#Q]<JzL7.H}X+O' );
define( 'LOGGED_IN_KEY',    './aHyL]0=,woy]%Q8NhHZ7|3i4ZvQ(h<4^#rqXKM>:#x~p1DSK;iO9SDz$[Vl3.Y' );
define( 'NONCE_KEY',        '2Ub P]U#d4q,r4UG.OHy.54C>j7gKn&VG!=:Er5}7<kgDtj=:.QIdA^;RX;1MW)l' );
define( 'AUTH_SALT',        '$!B?~nM7j8$qUTjRy$EYtN5}ypVL1?]+4U3K=3xgO&]+H^6/WJNxa>JiMp59.5[!' );
define( 'SECURE_AUTH_SALT', '1<=~u=t@st!ko1/[N%CzO0}W*y$NKtr;0esu-RO0@AN8|2|9XS;?g6&)NA#8&[4l' );
define( 'LOGGED_IN_SALT',   'T]&2Czz*&g5-DV|?4Qu?71:n2fgj4z?Nx5-s<[@}@zZ<+@d@[~L@#}b`tr_q{qf1' );
define( 'NONCE_SALT',       'GXB@?82%k&FQ{>UZ1FXL9k?$x{!AWQzmTkV$Rlk<+Rns/2:&gRXX`KMK*(9*pqnd' );

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
