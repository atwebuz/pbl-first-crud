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

     public function __construct(){
        $this->middleware('auth')->except(['index', 'show']);
        // $this->authorizeResource(Post::class, 'post');
     }
    
    public function index()
    {
        // Cache::forget('posts'); // forget caches
        // Cache::flush('posts'); // forget caches
        // $posts = Cache::remember('posts', now()->addSeconds(120), function(){
        //     return Post::latest()->paginate(9);
        // });
        return view('pages.index', [
            'posts' => Post::latest()->paginate(9),
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        if($request->hasfile('image')){  
          $name = $request->file('image')->getClientOriginalName();
          $image = $request->file('image')->move('image/', $name);
          $image = $name;
        }


        $post = Post::create([
            'user_id' => auth()->id(),
            'category_id' => $request->category_id,
            'title' => $request->title,
            'paragraph' => $request->paragraph,
            'color' => $request->color,
            'price' => $request->price,
            'image' => $image ?? null,
        ]);

        if(isset($request->tags)){
            foreach($request->tags as $tag){
                $post->tags()->attach($tag);
            }
        }

        // PostCreated::dispatch($post); // Event
        // ChangePost::dispatch($post)->onQueue('uploading'); // Job


        // UploadBigFile::dispatch($request->file('image'));
     

        return redirect()->route('posts.index')->with('success', 'waw it was created successfully');
    
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
        // if (! Gate::allows('edit-post', $id)) {
        //     abort(403);
        // }

        // $this->authorize('edit', $id);

        return view('pages.edit', [
            'post' => Post::findOrFail($id),
            'categories' => Category::all()

        ]); 

        

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {


        // Gate::authorize('update', $post);
        $this->authorize('update', $post);

        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }


        $this->validate($request, [
            'title' => 'required',
            'paragraph' => 'required',
            'color' => 'required',
            'price' => 'required',
           

        ]);

        if($request->hasfile('image')){  
            $name = $request->file('image')->getClientOriginalName();
            $image = $request->file('image')->move('image/', $name);
            $image = $name;
          }

        //   dd($request);

        $post->update($request->all());

        return redirect()->route('posts.index')->with('success', 'waw it was updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // Gate::authorize('delete', $post);

        $post->delete();
         
        return redirect()->route('posts.index')->with('success','waw it was deleted successfully');
    }

    // dev start

    public function cart()
    {
        return view('pages.cart');
    }
  

    public function addToCart($id)
    {

        // dd('worked');
        $post = Post::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            // dd($post->title);

        } else {
            $cart[$id] = [
                "name" => $post->title,
                "quantity" => 1,
                "price" => $post->price,
                "image" => $post->image,
                "paragraph" => $post->paragraph
            ];

        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  


    public function remove(Request $request)
    {
        dd('delete');
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
    // dev end
}
    