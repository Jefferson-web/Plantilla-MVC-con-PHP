<?php

class Core
{

    private $url = null;

    function __construct()
    {
        $this->init_autoloader();
        $this->init_session();
        $this->initFunctions();
        $this->filterUrl();
    }

    public function init_autoloader()
    {
        require_once './app/Autoloader.php';
        Autoloader::init();
    }

    public function init_session()
    {
        require_once './app/Session.php';
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function initFunctions()
    {
        require_once './app/Functions.php';
    }

    public function filterUrl()
    {

        if (isset($_GET["url"])) {
            $this->url = $_GET["url"];
            $this->url = rtrim($this->url, "/");
            $this->url = filter_var($this->url, FILTER_SANITIZE_URL);
            $this->url = explode("/", $this->url);
        }

        if (isset($this->url[0])) {
            $current_controller = $this->url[0];
        } else {
            $current_controller = DEFAULT_CONTROLLER;
        }

        $class_controller = $current_controller . 'Controller';

        if (!class_exists($class_controller)) {
            $current_controller = DEFAULT_ERROR_CONTROLLER;
            $class_controller = $current_controller . 'Controller';
        }

        if (isset($this->url[1])) {
            $current_method = $this->url[1];
            if (!method_exists($class_controller, $current_method)) {
                $current_controller = DEFAULT_ERROR_CONTROLLER;
                $class_controller = $current_controller . 'Controller';
                $current_method = DEFAULT_METHOD;
            }
        } else {
            $current_method = DEFAULT_METHOD;
        }

        $objectinstance = new $class_controller();

        if (isset($this->url[2])) {
            $params = array_slice($this->url, 2, count($this->url) - 1);
            call_user_func_array([$objectinstance, $current_method], [$params]);
        } else {
            call_user_func([$objectinstance, $current_method]);
        }

        return;
    }

    public static function init()
    {
        new Core();
    }
}
