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
define( 'DB_NAME', 'crosbies' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '#OPe{Vm4oz_x[sq_&m_eqU^>{dEab%kBKL9}jd|qQK-&nED8| )K0HR!`Vu&dE 8' );
define( 'SECURE_AUTH_KEY',  '[,.GgvhAsNB^IR;t5jbjiBqa9a;Iww$))<v-W1CPq641&-QkU2lJ.7#4AHef?!28' );
define( 'LOGGED_IN_KEY',    'Z3`E=Ovjx^^f!,98yqWV]C`_LUL!;>|%A<``$$JJ0z-s>)uPX!IY/FPlQjU>>]d9' );
define( 'NONCE_KEY',        ']oai79PX3[gKZA7gj;Ump`P1gnJ9 WO)2zuLDEU<mB5#$]5x/Lw$wgJqx[s.35S ' );
define( 'AUTH_SALT',        'Q q,/~t&!Pn?4h(G#)p%|;8jTGxp[1uCHoEPJE$!sYP/@EY+ %H8:9~u7S-.$T?z' );
define( 'SECURE_AUTH_SALT', 'z;H{a#y%@vWQqK/8f$w^!&YkiJ3CDJNVT8F/knu9Y.(mg]_QEWb{yIv+cFfO a%i' );
define( 'LOGGED_IN_SALT',   'pPw+uRk|tk*5{3LO`GDe:,)P:dmsmfL8hFZpNJ {.)nJy?c_b1klHRKhlgJ*Wg:N' );
define( 'NONCE_SALT',       'D+].6%-r)ZcY1$P|yw[XJ:[7ap9gxxtTbv|5E(>Ka3(<>?m#;{sM4Mt(bzr~XO,&' );

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

define( 'ALLOW_UNFILTERED_UPLOADS', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

