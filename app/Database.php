<?php

class Database extends PDO
{

    function __construct($url, $username, $password)
    {
        parent::__construct($url, $username, $password);
    }

}
