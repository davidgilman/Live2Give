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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/davihlmq/public_html/live2give/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'davihlmq_wp641');

/** MySQL database username */
define('DB_USER', 'davihlmq_wp641');

/** MySQL database password */
define('DB_PASSWORD', '9eBP)S52s[');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '3mstqgrkbieq5ap6gqfzaatpn8aysi1ix4znjfxqmdwj90ffyupl1ywebf2pwoxt');
define('SECURE_AUTH_KEY',  'of1eh66lamjvi4t4hhxj1sd49ehgs1dbvkvfqoopjtped38h7gc0o0uffnsuybaa');
define('LOGGED_IN_KEY',    'nqg3zngndbmr0whuondqhtjjl4gwkmnb5ruxchryxnzn0ytqo48voyxo0ztuesk8');
define('NONCE_KEY',        '08rijcdm2vh0rbqxv47ess8sya784pwmo8yh4wjieldo409oomeikogukccmygad');
define('AUTH_SALT',        'pqcxficmnz5oq4rftnu9j0ky6a5uig4ptkafj6i14jke1pyijf4dkiwva622t7hy');
define('SECURE_AUTH_SALT', '60smidmgzyswj5jgoqwohnrfyssdh02wlgegs9zpuokrssxo5fywntid1fjqmiy1');
define('LOGGED_IN_SALT',   'igjzkqpczf9l8gc6eczyvjkjuotshqx9htge7g4afyoibocnldbpxcismww3utlh');
define('NONCE_SALT',       'hheblheyk8wrwt3kl5hse6kihpnroferljn3zdbmub249cfxh796qv3kv07ukrql');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpn6_';

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
