<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        return view('home/index', $data);
    }
}
