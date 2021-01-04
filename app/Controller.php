<?php

class Controller
{   

    function __construct()
    {
    }

    public function load_model($name){
        $class_model = $name . 'Model';
        $this->model = new $class_model();
    }

}
