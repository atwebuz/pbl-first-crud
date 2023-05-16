<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{

    public function add(Request $request){
        $c = Wishlist::where('user_id', auth()->user()->id)->where('post_id' , (int)$request->input('post_id'))->count();
        if ($c==0)
        {
            Wishlist::create([
                'user_id' => auth()->user()->id,
                'post_id' => (int)$request->input('post_id'),    
            ]);
        }
        return redirect()->route('posts.index');
    }

    public function remove(Request $request){
        Wishlist::destroy($request->id);

        return redirect()->route('posts.index');
    }
    // public function index()
    // {
    //     $wishlist = auth()->user()->wishlist; // Assuming you have a relationship set up between User and Wishlist

    //     return view('wishlist.index', compact('wishlist'));
    // }

    // public function addToWishlist(Request $request, Post $post)
    // {

    //     dd(auth()->user()->wishlist()->attach($post));
    //     auth()->user()->wishlist()->attach($post);

    //     return redirect()->route('wishlist.index');
    // }

    // public function removeFromWishlist(Request $request, Post $post)
    // {
    //     auth()->user()->wishlist()->detach($post);

    //     return redirect()->route('wishlist.index');
    // }

    
}
