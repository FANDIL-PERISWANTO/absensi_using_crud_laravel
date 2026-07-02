<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        #return "Selamat datang di Sistem Absensi";
        return view ('home.index');
    }

    public function index2()
    {
        return [
            "name" => "Fandil",
            "position" => ".NET Developer",
            "framework" => "Laravel"
        ];
    }
}
