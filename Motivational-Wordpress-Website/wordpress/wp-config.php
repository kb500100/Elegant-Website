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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%o;VG~P0^isDkI/Ic =WH=|T`w npI+R4a*K!f0 ^;}3SbjX%Rm&4~1vFJQlc!=z');
define('SECURE_AUTH_KEY',  'gvIe,+@F;inz,~Om3pgO0bNU`1V3]y*k.Lf&>bY1M132>[8K,INXV)iErMQdw%} ');
define('LOGGED_IN_KEY',    '*L#%~~1]%BQ{{,%)1og$|2M5TEVtv+/^+1G<VS5Xe BHTex,RL{ie,iY%h$=CNnT');
define('NONCE_KEY',        '`$jf)~WsEf%)3fyDb ?J4[=.2sy[{?|T`}7EUX$f?j2]=5<]b70N}>Zva$}$1%Ur');
define('AUTH_SALT',        '^z>zOk+qCk&w^oPN|TXMy,0nT ~RHtLQ$Z[}H DL(.BxAy%,G_u/t?OYpYqM+Xd!');
define('SECURE_AUTH_SALT', ';/;EPpAu^*e2WBt`&@QF{9{$:f#T/r{jC=rzd(D_7e#TA;;rFl`FT>bCsJDSlM<.');
define('LOGGED_IN_SALT',   'RSYt_8c:k>bwP)}ko>1q$5*Ye~Aybil!KIDb;n&1c=PGK7XC>NF){/c+z^`*PXoi');
define('NONCE_SALT',       ')-+?H;lFzG03du9]z.gl8]>INrsm<UZq^Y:ryTCYYR,/1qO3+zYu7=cyf+{R4g9k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
