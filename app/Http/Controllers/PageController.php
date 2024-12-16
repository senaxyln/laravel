<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Method untuk route /about
    public function about()
    {
        return view('about', ['message' => 'Ini adalah halaman tentang Laravel']);
    }

    // Method untuk route /home
    public function home()
    {
        return 'Ini adalah halaman Home';
    }
}
