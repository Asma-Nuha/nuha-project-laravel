<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index'); // ini merujuk ke halaman index.blade.php
    }

    public function login(){
        return view('login'); // ini merujuk ke halaman index.blade.php
    }

    public function about(){
        $data = [
            'name'    => 'Asma Nuha Maffa Kayla',
            'address' => 'Purwokerto',
            'email'   => 'asmanuha16@gmail.com'
        ];
        return view('about', $data); // ini merujuk ke halaman index.blade.php
    }
}