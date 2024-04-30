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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',          '9vw_stYFbr(g/MoJ$uO*Fe:qsU8iPH@~E>P8Bx~prJZpFeH#>d, ]G-y_T#bc#$Y' );
define( 'SECURE_AUTH_KEY',   '|GBRjm%2!7+f#/p#qgd$lou@3>;lu{$4vAoy|+j#]:X[ar)%Ss@7Lz+i3#KQ)#]H' );
define( 'LOGGED_IN_KEY',     '[yS3~FM$Rwbo+ZDFWV5h{lW$dcXfUty:qL8t;+$m~Dnk1^o+B!DkZ0%;$/hWHjw@' );
define( 'NONCE_KEY',         '.w4(ige,?!yjiw=d:Y;2(ya9gQB^}9NJPvR#72Z4?{o~=3R8XwEV_q]f*_DdMpYw' );
define( 'AUTH_SALT',         'f>=^10qNL<(Lgpgq*U2Q*V|Ny7MSdOrYWS:qsxOgy])D0V>6EE<*mhxq5V75NDmQ' );
define( 'SECURE_AUTH_SALT',  '+|M;.ydNd93W$WwN6]c[W86PZbp!Yu5>zMrVJo<[Z/p5*{X2~UJYKQ:c8@9EaQVM' );
define( 'LOGGED_IN_SALT',    '+dC-#h3XJ!LAE6]-8F5`p>H;8?nyX9gqnk.)qqAwSY/flHnwFInuz@xVgyZP*hDv' );
define( 'NONCE_SALT',        '52o`7P:(cN?u<YgVAJE a{`BFflI>IR)%` iI:R1UB)Mn#HW<D+,_^A2[|h&g;E7' );
define( 'WP_CACHE_KEY_SALT', '< DNtqq!bcc-bX;-.CixMN<QAoP3G~>QN!c5^oqy39qR]I)TeY2-h,^f%Us|:A:z' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
