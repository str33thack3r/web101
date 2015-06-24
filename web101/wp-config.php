<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'web101');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '2M!eNj(6gUr`t=~?+8nR/Ajw##*5NpI]}NAJ!vq}}XHH~!-%zYO(Sp$I$E0*YGbw');
define('SECURE_AUTH_KEY',  '@lr4}:B)]2X&9EbzN2SvM-hPQ0d5MyItRSTr}`5C*]NFg{n ^F@.WL4vJRj_Y*w)');
define('LOGGED_IN_KEY',    'k&=;Andn*7k.Q[~DI*U;Q:n;USOHp@(k*eGyvVI^b>_6Y-6*X8+&(FFi0;2B<4ZT');
define('NONCE_KEY',        'QbW[1,D-/ts/czF_8EbX @6e[Spf`51LkF0VD4a[T .{3mA&JA7sO,54exavPtiE');
define('AUTH_SALT',        '5`U&w?ti3fQl9%I_]F3E, /cmO(cC-$. h!^INhzk8#-W`zqR*Fh,df94kt>&a4?');
define('SECURE_AUTH_SALT', '7ll`0.- *1^,1^+i^__.q-qEWk>4ZZpOz<dCl%T+kBkd;p?py0^N@5D5@# )W2EV');
define('LOGGED_IN_SALT',   '{0nyu22HBt/,eDN$Tj*?c5K/`VDf1%]1M:-s@7TPg&@UP,DrGH;k#dv3ss:3}L2G');
define('NONCE_SALT',       ',&)gp@B8(2>NNI>|YF7DEJEMs!d1f=ek-kFQdU6lJ;YK{j+Hf2L/5HZxy-k^DL!a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'web_';

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
