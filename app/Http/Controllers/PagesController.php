<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth')->except(['index', 'show']);
    //  }
    public function wishlist()
    {
        return view('pages.wishlist');
    }

    public function checkout()
    {
        return view('pages.checkout')->with('post');
    }

    public function settings(Request $request)
    {
        // dd($request);
        $route = $request->route()->getName();
      
        if($request->input('password_confirm')){
            return view('pages.settings');
            
        }else{
            return view('pages.confirm', compact('route'));
        }
    }

    public function faq()
    {
        return view('pages.faq');
    }




}
