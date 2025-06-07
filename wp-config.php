<?php
define( 'WP_CACHE', true );

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'landing' );

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
define( 'AUTH_KEY',         'RVa68@Y%l9jW> PYO*S+6TyJcSLQ-?uP/TPncrtr##uM2]i/EXMK6h[uc-466/%q' );
define( 'SECURE_AUTH_KEY',  '}g>.h.w4vmbz:]>[n$iJ^W*jY2=uyMva=9Z;I=J:[|5ecf)gP2P4a}#8?_rf GHY' );
define( 'LOGGED_IN_KEY',    'DMq )*b/(bZHq/zQ^RyYL@;mFdE{M?ax|N)`(>VCy=!c(dfgaF(ltGW6Mj2bdyB%' );
define( 'NONCE_KEY',        '[#F,8%v[nPUyTBRf}V]UPqL? #BH^4.>&u-.H8-(XUr.(:UYh0Z5U0&@j`_N$.SD' );
define( 'AUTH_SALT',        '3I`I`RFYVNXECZ7:i:f`;x?I_JE`^!d}]UT8Q{|YSdyBhS82_)m8LbFcl*uh=t,Z' );
define( 'SECURE_AUTH_SALT', '9mhq<EOdo~/B4Q&)$R&Nd)tqE]kw^X bD8G&|R4:XN(Z=~PIp8A;R&PNci1sz5LJ' );
define( 'LOGGED_IN_SALT',   '*_.%l(4Q%)>X932t=U!IrVFd,9](=E8pF76t]xoQB=s@#^B)&N:7}cj8<?j!B;[Q' );
define( 'NONCE_SALT',       '!8J]+&0LmGpdGy11c~^@`l7r_f#*|Z[vCb-W#7j[~xX(z9F%AO~%|DaAlWrN{`BI' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
