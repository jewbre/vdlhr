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
define('DB_NAME', 'vdl');

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
define('AUTH_KEY',         'dM_+Vd6z42$w:Eq-{_JI6L-+(TCm]?8EpF:?Xd(<}h!sUnM|$c+BU|:;P {tu$L>');
define('SECURE_AUTH_KEY',  '}NR40 v03g8>@g+sV> E=Z#&,>?/{nX%3nR+y5{4B<c8*d|/eZ8M=1Rvo,Rc+b&:');
define('LOGGED_IN_KEY',    'L;gG6qoDzCL?VBcGU3~F]P%>zrl4)$ZcZBblv=@.XG{r{mVy UlXQ`|O;2F->l+t');
define('NONCE_KEY',        'f^BH;m_D:+D&>R&_k=V5g|{t{d<2CN}1 b*w=>j*~LaOBH 2}UTnbw1>f9i-7l[e');
define('AUTH_SALT',        'yv_SL^ccP)Gu4cbH*%3jqA3KSULMgh+3]p_|BdiaQg9`s8JuQ3jY0Jz%2uD;{&JC');
define('SECURE_AUTH_SALT', '#5aq362tTq.4sRR] !hX<Gt7|)xjM7rNqI[{E>(?wy77R/>u/d&=2b6?4WDy|JWg');
define('LOGGED_IN_SALT',   'BTPT|#`nt9+-1b@io9cWq6kTxnlCA|?J)cQCT{FqZ-Bnf-z]Bm,!#T~[PLe^Qn_n');
define('NONCE_SALT',       'Z:,,RHL;6q1+Q5pmv5c:fn7XT],1=P({z?o[QlF-xkkgj#}q,l_6^^4&1t9D$5{D');

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
