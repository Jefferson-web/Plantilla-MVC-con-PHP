<?php

class View
{

    public static function render(string $page, $data = null)
    {
        $data = toObject($data);
        if (file_exists(TEMPLATES . DS . $page . '.php')) {
            require_once TEMPLATES . DS . $page . '.php';
        } else {
            die("No existe el archivo " . $page . '.php');
        }
    }
}
