<?php
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", __DIR__);

define("IS_LOCAL", in_array($_SERVER["SERVER_ADDR"], ['::1', '127.0.0.1']));
define('URL', IS_LOCAL ? 'http://localhost/mvc/' : '__PATH__');

define('PATH_PUBLIC', URL . 'public/');
define('CSS', PATH_PUBLIC . 'css/');
define('JS', PATH_PUBLIC . DS . 'js' . DS);
define('PLUGIN', PATH_PUBLIC . DS . 'plugins' . DS);

define('VIEWS', ROOT . DS . 'views');
define('TEMPLATES', VIEWS . DS . 'templates');

define('DEFAULT_CONTROLLER', 'Home');
define('DEFAULT_ERROR_CONTROLLER', 'Error');
define('DEFAULT_METHOD', 'index');

define('DB_ENGINE', 'mysql');
define('DB_HOST', 'localhost:3306');
define('DB_NAME', 'test');
define('DB_USER', 'root');
define('DB_PASS', '');
