<?php
define('WP_CACHE', true); // WP-Optimize Cache
// WP-Optimize Cache
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'megampqm_megamax');
/** MySQL database username */
define('DB_USER', 'megampqm_mEgAmax');
/** MySQL database password */
define('DB_PASSWORD', 'lB?t3wY8O+8=');
/** MySQL hostname */
define('DB_HOST', 'hrms-prd-backend-01');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


//disable CRON . line added by Kanchan
// define(‘DISABLE_WP_CRON’, true);


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uJRJtp%w|uY!*qL&/m-%,PdXkQCzlS)N{z?Qce2J6/]!To4 {Z!ZKUl@*~>ObPiv');
define('SECURE_AUTH_KEY',  'frNQ]pK|Z!k$li-C*Sl<S@]_lx4#I9 wGy,q{$>iY!azm6.B;;sp?sN%lDF2tO]/');
define('LOGGED_IN_KEY',    'j!O7m4=D<B7<}nkt}O$Y|+,y@90!DnS#ICB+)H+MXY/oV+OjERbtCHY)XX+ i/:k');
define('NONCE_KEY',        '6(g{56LUEK+3+|g&P1~XKiTK+-ia@03}LV tvGtp:Uax]_Gm-h>KNu63n*S%W!$*');
define('AUTH_SALT',        '`92a4yVE1d/2<&w=Zp|*~fK7!vxZAM_]BPy<EA@4A9l>LC+_1c:$Neik${uezHC4');
define('SECURE_AUTH_SALT', '-_fhaH^=r+6zY]!~9%F.e,.?|awH}8{d?;{cO,j&?3&On#n(Ikw#0:8+rV7;^@r6');
define('LOGGED_IN_SALT',   'SY|jU)l?3`1+V5K](rr]cnx,>I2|v%PX.5f3k|l7Vcn:u10*k3Kg8{Uuck{; [|#');
define('NONCE_SALT',       '?DrMJ+v:o$^zQ0&M6z]?g_:lzCCfR/enbu8SG)Hcf+kvu+IWx)e+5sUacsNU3[b1');
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define( 'WP_DEBUG', false );

define( 'WP_DEBUG_DISPLAY', false );

define( 'WP_DEBUG_LOG', true );


ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );

