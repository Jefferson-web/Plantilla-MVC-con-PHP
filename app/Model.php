<?php

class Model
{

    function __construct()
    {
        $url = sprintf("%s:host=%s;dbname=%s", DB_ENGINE, DB_HOST, DB_NAME);
        $this->db = new Database($url, DB_USER, DB_PASS);
    }
}
