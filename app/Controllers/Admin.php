<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            "pageTitle" => "Home Page"
        ];
        return view('home', $data);
    }

    public function search()
    {
        $data = [
            "pageTitle" => "Home Page"
        ];
        return view('search', $data);
    }

    public function list()
    {
        $data = [
            "pageTitle" => "Home Page"
        ];
        return view('list', $data);
    }
    public function contact()
    {
        $data = [
            "pageTitle" => "Home Page"
        ];
        return view('contact', $data);
    }

    public function changelog()
    {
        $data = [
            "pageTitle" => "Home Page"
        ];
        return view('changelog', $data);
    }

    public function single()
    {
        $data = [
            "pageTitle" => "Home Page"
        ];
        return view('single', $data);
    }
}
