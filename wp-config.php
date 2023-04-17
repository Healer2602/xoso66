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
define( 'DB_NAME', 'sql_xoso_66' );

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
define( 'AUTH_KEY',         'mmn1F?Lu^(Q|U3WZ:e[u0(AP@$aZ5L78.%LGc(yim(z9IW0;hG?*iHK7!V tVDKQ' );
define( 'SECURE_AUTH_KEY',  'CH~GU_Lid,zhkhVqlGL+{vMAjT*uSl!JBG:+H`QK9^)rs5q.;y!ls%+F:1*]vTqG' );
define( 'LOGGED_IN_KEY',    '.!V(0#W(P/W5!|(Ie`)smkKM>B69=VljM$XqVrMMbd#iNk~sq04>E77/^sjLh)oB' );
define( 'NONCE_KEY',        'X*KH/ 6Kqb*DRj` f[kF2urgLxGF^-j64B=4BDu8HT+ RX/xd#z:k@BLjo0Fh},H' );
define( 'AUTH_SALT',        'SmZ`(1)A#(9FrCX6,=6*d.Y<: 3Rh-N|39xP]-Wgl]<Pf9&[zi35)I2|1S5t)G$l' );
define( 'SECURE_AUTH_SALT', '3a:WR[:k.]{awLNRq2|v/.0|t*6&ym[ELwCFx8QH!QHv5nhO+$Q5NTzK^$7YhFcp' );
define( 'LOGGED_IN_SALT',   'LnF E3aq6<LVuQOm-z,lk{a`KKz4o}dcwV+l-w1n9Qu]|8`6U/DI;p3XS-X|].&$' );
define( 'NONCE_SALT',       '<bu;XdX{b=m#mz#BM=Bsm<8Ea|6u@{deuhb~7jv^;VPC=TNcH{)IC|p{T@R?tjx+' );

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
