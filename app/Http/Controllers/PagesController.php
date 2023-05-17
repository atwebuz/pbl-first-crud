<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Post;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth')->except(['index', 'show']);
    //  }
  

    public function checkout()
    {
        return view('pages.checkout',[
            'posts' => Post::latest()->with('oneimage')->paginate(9),
            'images' => Images::all(),
        ]);
    }

    public function settings(Request $request)
    {
        // dd($request);
        
        $route = $request->route()->getName();
      
        if($request->input('password_confirm')){
            return view('pages.settings', [
                'posts' => Post::all(),
                
            ]);
            
        }else{
            return view('pages.confirm', compact('route'));
        }

    }

    public function faq()
    {
        return view('pages.faq');
    }




}
