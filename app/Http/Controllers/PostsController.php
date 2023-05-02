<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    
    public function index()
    {
        
        return view('pages.index',[
            'posts' => Post::orderBy('created_at', 'DESC')->paginate(9)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     

        $this->validate($request, [
            'title' => 'required',
            'paragraph' => 'required',
            // 'color' => 'required',
            // 'price' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $post = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $post['image'] = "$profileImage";
        }

        Post::create($post);


        // dd('qwd'); 
        // $post = new Post;
        // $post->title = $request->input('title');
        // $post->paragraph = $request->input('paragraph');
        // $post->color = $request->input('color');
        // $post->price = $request->input('price');
        // $post->save();

        return redirect()->route('posts.index')->with('success', 'waw it was created successfully');

    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('pages.show',[
            'post' => Post::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('pages.edit', [
            'post' => Post::findOrFail($id)
        ]); 


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title' => 'required',
            'paragraph' => 'required',
            // 'color' => 'required',
            // 'price' => 'required',
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $post['image'] = "$profileImage";
        }

        $post->update($request->all());

        return redirect()->route('posts.index')->with('success', 'waw it was updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
         
        return redirect()->route('posts.index')->with('success','waw it was deleted successfully');
    }
}
