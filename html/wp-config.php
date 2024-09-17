<?php
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
define( 'DB_NAME', 'bs223017_wp1' );

/** Database username */
define( 'DB_USER', 'bs223017_wp1' );

/** Database password */
define( 'DB_PASSWORD', 'ufdszq3kdt' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '9Hjl6`L!?b^wEkIqH)*wV4#hUd|${^M2}ZX<5&IN%m0!Q<%ekRhl!EHM+7:AV(Nv' );
define( 'SECURE_AUTH_KEY',  'zFd1GO&)+q$e=iS_8W#;bQ{4A4/Y 4@!@Xs@zXM-I~cc^Av]k4_/OVeU&k`MiLS>' );
define( 'LOGGED_IN_KEY',    '3ApO!nOViQ!A .g6Yidhz:R$%iR&9-%NlQa[@jy@^d~S:0}LTy0>H/mlb+cOoT|b' );
define( 'NONCE_KEY',        '[d/SKda.B1GdZ ld`U4AVV.MQ$V.pt?d8+^VtQy>ik(yHnj5*Vgmr^Ka={NCT~%Y' );
define( 'AUTH_SALT',        'GB7XxQG_Rd]~J8s^pdA:-WpL0i@PVFYw,Gu{>jaP&$vj:7K@v){j_}j4COJE__!V' );
define( 'SECURE_AUTH_SALT', '2B6v-vlv!,7wS{-NUfB(hVn7Tps0aDqqPsN1j{Nr[Py7l?kD[x<ahYpxEtU=jkJl' );
define( 'LOGGED_IN_SALT',   'uYA.F:[0yGcX|J/sE0Sr|!I@fJuyb5~WYfJ*;AcBP8k8y$OJ8Bp,.fz${8;96Sl6' );
define( 'NONCE_SALT',       'v7DTDD4`M,d~CIFS:AMoHSzjv<OF+^H)4~LFBcMG}w!F/41EKQL2Coz%]u%/d7fO' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
