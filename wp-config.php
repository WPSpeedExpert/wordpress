  <?php
  /**
   * The base configuration for WordPress
   *
   * The wp-config.php creation script uses this file during the installation.
   * You don't have to use the web site, you can copy this file to "wp-config.php"
   * and fill in the values.
   *
   * This file contains the following configurations:
   *
   * * Database settings
   * * Secret keys
   * * Database table prefix
   * * Localized language
   * * ABSPATH
   *
   * @link https://wordpress.org/support/article/editing-wp-config-php/
   *
   * @package WordPress
   */

  // ** Database settings - You can get this info from your web host ** //
  /** The name of the database for WordPress */
  define( 'DB_NAME', "DatabaseName" );

  /** Database username */
  define( 'DB_USER', "DatabaseUser" );

  /** Database password */
  define( 'DB_PASSWORD', "!SecretPassword!" );

  /** Database hostname */
  define( 'DB_HOST', "localhost" );

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
define('AUTH_KEY',         '>Gbc[`],:NVi7OB~I[?Sr|GO 4u(S^kFXu&~{xu7(d`5%V N()P5L2^LU+wf]v7}');
define('SECURE_AUTH_KEY',  ';%+&CSfV*`4L>Do+ct13m)>Ni(F,<+Y|E8<>QIrqY`G:=)4bw|8@.LGG<|CL|PuA');
define('LOGGED_IN_KEY',    'q`zK~;sTJL~;Lgr-sKz@#bC6T(r0@^-.$b<(S =jg#qv$nAw&[6?kUq4*~J4S3L(');
define('NONCE_KEY',        'b-{&O!jn.}RqN;wDqTD&3ewemML+Q}`ZFUigHg)]*nnJAA4Ys,I{g(<z3{FD+8~k');
define('AUTH_SALT',        '%^~QLE6Unyi<`kzxBxUdg-/$tyhIcMw|?v^.2-bU&  HPDOsbQR@Ma:tyo9xRki_');
define('SECURE_AUTH_SALT', '[JfUGr)ha]]A}T _4ZKK}Yw|{i+py[}E:4`rRGx6G5+%95p-WCZGK/d}vI%$v(9F');
define('LOGGED_IN_SALT',   '1cu3n+=Oz_D^Glw*u^%H`VU`3RAP%lCEb|.h:$j^^xnCO6O-N5Qg,n87abUoN]e*');
define('NONCE_SALT',       '=(E-/Xd-k,/|X_,ewWU,@IT~%/.OH%SdEa-:-q&V7_~}&VJ{Im--05?nT8/OyqO2');
define('WP_CACHE_KEY_SALT','T`T%N!%]*-?Oy@xrM%9g|0a+2^xr<8jYpahEl)fsy<||gr2al/U4BG4`t[fx#}K<');
  /**#@-*/
 
  /**#@+
   * Authentication Unique Keys and Salts.
   * Change these to different unique phrases!
   * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
   */
  // require('wp-salt.php');

  /**
   * WordPress database table prefix.
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
   * visit the documentation.
   *
   * @link https://wordpress.org/support/article/debugging-in-wordpress/
   */
  define( 'WP_DEBUG', false );

  /* Add any custom values between this line and the "stop editing" line. */
  define( 'FS_METHOD', 'direct' );
  define( 'WP_DEBUG_DISPLAY', false );
  define( 'WP_DEBUG_LOG', true );
  define( 'CONCATENATE_SCRIPTS', false );
  define( 'AUTOSAVE_INTERVAL', 600 );
  define( 'WP_POST_REVISIONS', 5 );
  define( 'EMPTY_TRASH_DAYS', 21 );
  /* That's all, stop editing! Happy publishing. */

  /** Absolute path to the WordPress directory. */
  if ( ! defined( 'ABSPATH' ) ) {
  	define( 'ABSPATH', dirname(__FILE__) . '/' );
  }

  /** Sets up WordPress vars and included files. */
  require_once ABSPATH . 'wp-settings.php';
