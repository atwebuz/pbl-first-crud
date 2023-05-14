<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Images;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct(){
        $this->middleware('auth')->except(['index', 'show', 'search']);
        // $this->authorizeResource(Post::class, 'post');
     }

     public function search(Request $request)
     {
        // $posts=DB::table('posts')
        // ->join('images', 'images.post_id',  '=', 'posts.id')
        // ->where('title','LIKE','%'."m"."%")->get();
        // dd($posts);
        // $posts = Post::with('images')->where('title','LIKE','%'.'m'."%")->get();
        // foreach ($posts as $post) {
        //     dd(count($post->images));
                    // } 
     if($request->ajax())
     {
     $output="";
    //  $posts=DB::table('posts')
    //                         ->join('images', 'images.post_id',  '=', 'posts.id')
    //                         ->where('title','LIKE','%'.$request->search."%")->get();

    $posts = Post::with('images')->where('title','LIKE','%'.$request->search."%")->get();
     foreach ($posts as $post) {
     $output.='<tr>'.
     '<td>'.$post->id.'</td>'.
    //  '<td> <img class="img-fluid" src="{{'.$post->image.'}}"</td>'.
     '<td> <img class="img-fluids" style="width:100px; height:100px;" src="/image/'.(count($post->images)>0 ? $post->images[0]->images  : 'no-image.png' ).'"/></td>'.
     
     '<td><a href="posts/'.$post->id.'">'.$post->title.'</a></td>'.
     '<td>'.$post->paragraph.'</td>'.
     '<td>$'.$post->price.'</td>'.
     '</tr>';
     }
    return Response($output);
    }}



    
    public function index()
    {
        // Cache::forget('posts'); // forget caches
        // Cache::flush('posts'); // forget caches
        // $posts = Cache::remember('posts', now()->addSeconds(120), function(){
        //     return Post::latest()->paginate(9);
        // });
        return view('pages.index', [
            'posts' => Post::latest()->with('oneimage')->paginate(9),
            'categories' => Category::all(),
            'tags' => Tag::all(),
            'images' => Images::all(),
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
            'images' => Images::all(),
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
            'date_of_year' => 'required',
            'millage' => 'required',
            'transmission' => 'required',
            'oil_type' => 'required',
            'condition' => 'required',
            'address' => 'required',
            'images' => 'min:2|required',
            'images.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

// `        date_of_year
// millage
// transmission
// color
// oil_type
// condition
// address`
        // $ss="";
        // dd($ss);


        $post = Post::create([
            'user_id' => auth()->id(),
            'category_id' => $request->category_id,
            'title' => $request->title,
            'paragraph' => $request->paragraph,
            'color' => $request->color,
            'price' => $request->price,
            'date_of_year' => $request->date_of_year,
            'millage' => $request->millage,
            'transmission' => $request->transmission,
            'oil_type' => $request->oil_type,
            'condition' => $request->condition,
            'address' => $request->address
        ]);

        foreach($request->file('images') as $image) 
        {  
            $name = $image->getClientOriginalName();
            $image = $image->move('image/', $name);
            $image = $name;
            Images::create([
                'images'=>$name,
                'post_id'=>$post->id
            ]);
          //   $ss.=$name . " -- ";
          }
  
        if(isset($request->tags)){
            foreach($request->tags as $tag){
                $post->tags()->attach($tag);
            }
        }

        // if(isset($request->images)){
        //     foreach($request->images as $image){
        //         $post->images()->attach($image);
        //     }
        // }
        // dd($request);


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
            'post' => Post::with('images')->findOrFail($id),
            'tags' => Tag::all(),
            'categories' => Category::all()
        ]);

    
    }
    // ->incrementReadCount()
    
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
            'categories' => Category::all(),
            'images' => Images::all(),


        ]);

        

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
dd($request);

        // Gate::authorize('update', $post);
        $this->authorize('update', $post);

        if($request->id && $request->quantity){
            dd('errrorno');
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
            'date_of_year' => 'required',
            'millage' => 'required',
            'transmission' => 'required',
            'oil_type' => 'required',
            'condition' => 'required',
            'address' => 'required',
            'images' => 'min:2|required',
            'images.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
           

        ]);


        foreach($request->file('images') as $image) 
        {  
            $name = $image->getClientOriginalName();
            $image = $image->move('image/', $name);
            $image = $name;
            Images::create([
                'images'=>$name,
                'post_id'=>$post->id
            ]);
          }
          
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
        return redirect()->back()->with('success', 'post added to cart successfully!');
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
            session()->flash('success', 'post removed successfully');
        }
    }


    // dev end
}
    