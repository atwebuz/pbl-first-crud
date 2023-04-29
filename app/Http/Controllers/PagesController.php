<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function wishlist()
    {
        return view('pages.wishlist');
    }

    public function checkout()
    {
        return view('pages.checkout');
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
