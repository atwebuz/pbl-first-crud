<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    
    public function index()
    {
        
        return view('pages.index',[
            'posts' => Post::orderBy('created_at', 'DESC')->paginate(9),
            'categories' => Category::all(),
            'tags' => Tag::all(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create')->with([
            'categories' => Category::all(),
            'tags' => Tag::all(),
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request);

        $this->validate($request, [
        
            'title' => 'required',
            'paragraph' => 'required',
            'color' => 'required',
            'price' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

     

        $post = Post::create([
            'user_id' => 1,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'paragraph' => $request->paragraph,
            'color' => $request->color,
            'price' => $request->price,
            
            // 'image' => $post->image
        ]);

        if(isset($request->tags)){
            foreach($request->tags as $tag){
                $post->tags()->attach($tag);
            }
        }

                // $post = $request->all();


 
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $post['image'] = "$profileImage";
        }
     

        return redirect()->route('posts.index')->with('success', 'waw it was created successfully');


        // $post = $request->all();
  
        // Post::create($post);

           // $this->validate($request, [
        
        //     'title' => 'required',
        //     'paragraph' => 'required',
        //     'color' => 'required',
        //     'price' => 'required',
        //     // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        // ]);


        // dd('qwd'); 
        // $post = new Post;
        // $post->title = $request->input('title');
        // $post->paragraph = $request->input('paragraph');
        // $post->color = $request->input('color');
        // $post->price = $request->input('price');
        // $post->save();


    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('pages.show',[
            'post' => Post::findOrFail($id),
            'tags' => Tag::all(),
            'categories' => Category::all()
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
            'color' => 'required',
            'price' => 'required',
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
