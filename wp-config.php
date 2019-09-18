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
define( 'DB_NAME', 'bygnis_dk' );

/** MySQL database username */
define( 'DB_USER', 'bygnis_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'DUo7z3EbZxgv5p7DQMKFphti' );

/** MySQL hostname */
define( 'DB_HOST', 'bygnis.dk.mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'T+eG?jxvl!p(+>#]64ThQe;W|ayxjZ^0L-<V_eONW]>>o/mWlqL}u_ VXQ%BN!Q?');
define('SECURE_AUTH_KEY',  'Q_d%(+mPLn)<%2S$],(c)`(Rz(hi5V[6<]><0OeIdrv>D@1F}c!f8C)L|Y?{`:* ');
define('LOGGED_IN_KEY',    'lFl~h++7+i(l1yF?FDAXPdR-9RK`TrwR3^.$sPSd=&<Fpn3W0[W:Sgu+D@;sy``!');
define('NONCE_KEY',        'jSE<IOV8}&zGL8UR@W1+#Y9j{{spVRXJ=eVB~RIN>kq%7OFI.wV.9:JQm}:mhg-C');
define('AUTH_SALT',        'DOH@K;#V&WN!5:}xvBZ0G^k|Vh5x:=V9 (d_1U/z48F^c:HX7`P&ab KJ[_%oyTr');
define('SECURE_AUTH_SALT', 'Y(C~vl$LS{A^@t@++rVJ:y^:-QZvtFd<;Pu=s_`w1 &f3}(nQ.Si*B;Z;1Z7Fdg)');
define('LOGGED_IN_SALT',   'Y{vYC4l^,Jo!4H!#]U!+=nvrg` G||Ru#JDc|sw-j.6*nxKAwYb+Z}c->xO&2]eF');
define('NONCE_SALT',       'mYBqURKw,-mFMJaf/Ga^9Ao%(9+?Achaflm^sk:.-[|X+$ Iqi8EZCd)6:HN+a~y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */

// always remember to change prefix
$table_prefix = 'portfoliowp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
