<?php

class Session
{

    function __construct()
    {
    }

    public static function set(string $key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get(string $key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : false;
    }
}
