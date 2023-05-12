<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Gate;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request){
        $comment = Comment::create([
            'message' => $request->message,
            'post_id' => $request->post_id,
            'user_id' => auth()->id(),
        ]);

        // dd($comment);
        return redirect()->back();


        
        // $post = Post::find($request->post_id);
        // $post->comments()->create([
        //     'body' => $request->body,
        //     'user_id' => $request->user_id,
        // ]);
    }

    public function destroy(Comment $comment)
    {
        Gate::authorize('delete', $comment);

        $comment->delete();
         
        return redirect()->back()->with('success','waw it was deleted successfully');

        // return redirect()->route('posts.index')->with('success','waw it was deleted successfully');
    }
}
