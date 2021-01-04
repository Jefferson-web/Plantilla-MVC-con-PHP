<?php

class Autoloader
{

    public static function init()
    {
        spl_autoload_register([__CLASS__, 'loader']);
    }

    public static function loader(string $name)
    {
        if (file_exists(ROOT . DS . 'controllers' . DS . $name . '.php')) {
            require_once ROOT . DS . 'controllers' . DS . $name . '.php';
        } else if (file_exists(ROOT . DS . 'models' . DS . $name . '.php')) {
            require_once ROOT . DS . 'models' . DS . $name . '.php';
        } else if (file_exists(ROOT . DS . 'app' . DS . $name . '.php')) {
            require_once ROOT . DS . 'app' . DS . $name . '.php';
        } else {
            die("El archivo $name.php no existe.");
        }
    }
}
