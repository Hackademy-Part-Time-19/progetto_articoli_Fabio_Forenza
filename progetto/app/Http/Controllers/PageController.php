<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    private $home = "Esplora il Mondo del Web Development";
    public function homepage()
    {
        return view('welcome', ['home' => $this->home]);
    }
}