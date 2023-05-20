<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function add(Request $request){
        // dd($request);
        $c = Order::where('user_id', auth()->user()->id)->where('post_id' , (int)$request->input('post_id'))->count();
        if ($c==0)
        {
            Order::create([
                'user_id' => auth()->user()->id,
                'post_id' => (int)$request->input('post_id'),    
            ]);
        }
        return redirect()->route('posts.index');
    }

}
