<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{

    public function index($locale = null) {
        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
        }
        
        return view('pages.home');
    }

    public function show($locale){
        app()->setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}