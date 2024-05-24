<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function login()
    {
        return view('login');
    }
}
