<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    // Shows the landing page
    public function index()
    {
        return view('home');
    }
}