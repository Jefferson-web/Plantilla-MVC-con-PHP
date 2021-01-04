<?php

    class ErrorController {

        function __construct()
        {
            
        }

        public function index(){
            VIEW::render('error/index');
        }

    }

