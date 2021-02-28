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
define( 'DB_NAME', 'wp_investi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'Wh7W7{#|E!HLipf-zBkLKAg:(%uf$1[|CPv.1hs%E#?sYd#>*35I]Pp69=-SRw#=' );
define( 'SECURE_AUTH_KEY',  'SwT-Nix&@!yB_uV};7|pLVz*cnB  f+:L|vD>n^n-)OQEE50i;E:H@6L,7D4uf0<' );
define( 'LOGGED_IN_KEY',    '.=t41o]_s0T-hi->n*GYq9;[(,|zKS?0I2{,n=I90e!&^<dL{fTK-DD3;~3RV&hR' );
define( 'NONCE_KEY',        'w5!@Iolm7A`u(FjqYF-.~NX7p}=#|=OHrl%,L<91tEF%;EyYBe+al&e6,2L0tcrz' );
define( 'AUTH_SALT',        '6k3un<3g WzoIq<nH{,)uj1^),*/vW^lI+~u8Ie0MJ:jt -I~M#K#+}?}9|K$6%i' );
define( 'SECURE_AUTH_SALT', 'L.X.I4j:3TH3e69NM44U`bAV7DbB{rQx:Z[vaKJY;.Ptfz?3 Dk!|S_~}=8l1/={' );
define( 'LOGGED_IN_SALT',   'tqt@]@fh;kjeV*U4ubwM|I=*&SgJy=`BBDg/W$V|?nOHNZM!#Vi]fO^Mdt~APV5c' );
define( 'NONCE_SALT',       '*~(Hr#l:P(t^Wj*fot(!}!!O&pldgKh2W#*V888+WD=K[Vr@}(4G1)$j9k3oGm`{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_investi';

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
