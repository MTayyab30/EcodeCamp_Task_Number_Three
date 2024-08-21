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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'landingpage' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '1r$kZz9}l+|K.~>H:Wp#O-dN9xkK>kj71~PdhjW{B1V1&yUl5H#:d0c,]@H3knjE' );
define( 'SECURE_AUTH_KEY',  'Bq<0/YLf<1`:LAg0XR8M.@7B?M.D4=v_ECt}.smxg:+PpS;Jp?}1uK[RnyT6slZi' );
define( 'LOGGED_IN_KEY',    'w2SZ|ET >Y:eq`~Nk8bz9KY]_(seYdcz0lEW@mS$O}_-66pnj9{H;P>dZ$[h-/6A' );
define( 'NONCE_KEY',        'MeX4SlJ-aG[^zm030F*~J?!oRl!(MUB9h^:(ca{NjtPf91w.~?mQlONaCIp0E][ ' );
define( 'AUTH_SALT',        'a3vO F_P2k_n2mPcmS!t1AjlRgWlFarPKHO7=0CIaypl@?u*UfSfx,Dv/:fkq@[L' );
define( 'SECURE_AUTH_SALT', 'R~XTX8Z1iZU&y~edJbVn<EN@G~L_=qw _#xFu|i>rTjUc0lc!yz|S8*mdysg:Bsp' );
define( 'LOGGED_IN_SALT',   '+FTk>PY-+kcF A-TrrK.l?YarmTx^r1mK0hod;4g%po|dep /{t3(}wglF2G.f#S' );
define( 'NONCE_SALT',       '7t 5[pwbQm902MOv+b}<N{KlnHbO_o}.{&)jvoo,TC=84y3x>)}r=^1(eOirjI66' );

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
