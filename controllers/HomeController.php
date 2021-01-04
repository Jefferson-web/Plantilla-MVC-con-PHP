<?php

class HomeController extends Controller
{

    public function __construct()
    {
        $this->load_model('Home');
    }

    public function index()
    {
        $data = ['usuario' =>  'Jefferson'];
        View::render('home/index', $data);
    }
}
