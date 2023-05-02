<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function java()
    {
        return view('pages.java');
    }

    public function settings()
    {
        return view('pages.settings');
    }

    public function faq()
    {
        return view('pages.faq');
    }



    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }
}
