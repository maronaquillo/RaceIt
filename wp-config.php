<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'raceit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ',Xi*pGeXY53+R}l:W5+$FhFx,nt^(,0<elNat>i||Q5xB<RlX48O83`7<5hiow|l');
define('SECURE_AUTH_KEY',  '3W|}-*+9n*#fJ9&BXF)CU/+J^hL]<ZQUWC`!qp5%_-hV{4pW=kTu+7L@TV|x( 1v');
define('LOGGED_IN_KEY',    '7+DXDi.-|-5Z;+EQFA5h |%XXOtx&IBX*JKMa|i|pcIe%FfPr9Jw^?AuFQY_IugN');
define('NONCE_KEY',        '83}-Ty&RKZ5={nVq>*|EXEUiKqD~9Cp3w-rzE+ U6y{6aDtpG-T.IgHjx*1vkYcj');
define('AUTH_SALT',        'xeC9,;*ZywuT~`{&p+g^=>o~Nu(Y/C<M$tj`apD/{:y^]w8ZC+ $v  ~Z8p3=tOc');
define('SECURE_AUTH_SALT', 'uH}:~Y9nh*HD*!_WXk7z`9/1,^|4G|5ya3$l3g-f48&QuZa+9+(d_d0(p.}&dINt');
define('LOGGED_IN_SALT',   '!fqWD8<0*jr+[oQ(P`?Qd$-EnN*%79cEtFx1n8&mK5RthSO`mR(gJ1Gy1cXGR1;]');
define('NONCE_SALT',       'stwOMF4O(P9=N|Zv>li6uG$J7>5.h~0`2(bgtIV=3H2T7ald`lKqdb.L[$@n1Q<c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
