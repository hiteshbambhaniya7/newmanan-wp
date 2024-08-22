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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newmanan' );
// define( 'DB_NAME', 'manansl3_newman' );

/** Database username */
define( 'DB_USER', 'root' );
// define( 'DB_USER', 'manansl3_newman' );

/** Database password */
define( 'DB_PASSWORD', '' );
// define( 'DB_PASSWORD', 'TSp85.eU)9' );

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
define( 'AUTH_KEY',         'fkdb9pnlqfre9nlvsjksvpscutp83iclktp99rnomqebfvgbtkrprxdjddqffxe5' );
define( 'SECURE_AUTH_KEY',  'tn4hteors3prsogrvhfzjwkhyedoehnf90shvyzqkhemhbv4frgokxxxxa2tookm' );
define( 'LOGGED_IN_KEY',    'e6jpsjn1iegqsbsyf9kbnnlxxxrewfrcmodqf5ykwzf5ys4uczbzio95rn6qf2il' );
define( 'NONCE_KEY',        'iqpvod95jyf1mwtr0t9efghnprogbhu8c8ie5ttyifvxdlmihfqpqsqy7aqxosld' );
define( 'AUTH_SALT',        'ipdsxipl2hkzafboryj6fqm3gnthho4pnp4cc5v81ioxxchi18t1ayotypkskohm' );
define( 'SECURE_AUTH_SALT', 'qttrh7cknquvleqkrc6jvxecc2uhtw8fxj9pea2w44j5dyyzgnab7tavezprxpuc' );
define( 'LOGGED_IN_SALT',   'n3imhnh93qufvk8obw9w9wda2zdcxpforew9ykbxqhhm8wvfdoncaggy0u9galtp' );
define( 'NONCE_SALT',       'ckbhrka5uhzbeva2gcyv8etha4yw4gjre7xnm43ohhozbno8sebzp4r3jsudmnbz' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpid_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
