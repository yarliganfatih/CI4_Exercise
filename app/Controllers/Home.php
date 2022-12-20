<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            "pageTitle" => "Home Page"
        ];
        return view('home', $data);
    }
}
