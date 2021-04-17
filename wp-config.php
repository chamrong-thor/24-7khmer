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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Q1p2m3g4' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'DHyDfB6[t9H0a!`oyTxjy/qApLohR{0n*9twKx44|wfE7|s>=139oAe)x|,BEfv]' );
define( 'SECURE_AUTH_KEY',  'hqEvJT^+i|,9TmR^q:dUdTWyl{3pzH%DRDZp2v{N{+ll%E||i?A Yy7+20jp-IiU' );
define( 'LOGGED_IN_KEY',    'S|bP4(q}UdPjBpo2~bnwhl5f=(n4AFDXY0M9(CAC*7%eR+<!Z94^6~`bcpwVSn >' );
define( 'NONCE_KEY',        '>bI|t31H?$;Q+PeL[]ia`Q&wqP !*nOtC=G>`os&tMsE=BieF[{G3tys[U*ExSOp' );
define( 'AUTH_SALT',        'z!b*5nd;zj.R=[YGxgL_J#n$(q%.Vymjm%TdD|{kpWH#CcS^Ro{jVgiuU}MzvZ|_' );
define( 'SECURE_AUTH_SALT', '/HE&-h}!Q?VBKB~/+T3My<BSS_YmcXciu?]nvPr[C=*(8nOOZfAG*ENw*ZWKz2_}' );
define( 'LOGGED_IN_SALT',   '[0^{q}mM2By/[WkL3JmMD%$b>}70yB-c:%`@g*]j:mi|p q#*r(P--QX;Q38qmyF' );
define( 'NONCE_SALT',       ';:xDX+/$F.-^Z=B:o%@9kSjCw6>xG23S39T;I.gm/Bnc8PQfdLD>26f+Y(oFo<,q' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
