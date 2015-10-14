<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress-infinite-smiles');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'VYb*-Ks7Kp/Q{!?:Cfo`>gO@,Dp|yz5;tWa5;fG#{!z+Vx0o-W~:Ru)S((@A4mW=');
define('SECURE_AUTH_KEY',  'rW5}!H)~*(w$51(r/U6-w[$%HG>es*N`1K+6Or$OrIvi+6r{6P:(,8dB7(G-Ax|f');
define('LOGGED_IN_KEY',    'k:[w`ug~kY>qoI0hwF6|=$DwT[V_ny1~kn4<u)--A7:wS8jMBxaL>.om$ fd,41r');
define('NONCE_KEY',        '$qwA-UKFVbI`*6{CJMRI<=txZku^o1Exnr`f!?iyGU|6)&;}iFjM3:5aB8|)%Qbc');
define('AUTH_SALT',        'qv6~Mlne6v62XgFuIf%!t7X(X8/0xZYuMoA8hiUf0orXMQSo`zFM,t|Ea+4UK:>B');
define('SECURE_AUTH_SALT', 'nu)cfCpj7*E.WJe^Mg-v.w| maZ&WV^)Gs;bZOcijwQ(j|=Z`[<-naqzok915OvU');
define('LOGGED_IN_SALT',   'o)ETQ@PJ@&eHA!<Lo[.<}U)rQU9Kb^:uJ&AwDORut%$7/gm})G9R*u9G$AQ~nF~v');
define('NONCE_SALT',       'Q&rgq%(3n%q%Z{Bq/|dE>+{xf5=M1ez XG#;B@:aXO*~d7wPNKD@X.dG6}KO9L|(');


$table_prefix = 'wp_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
