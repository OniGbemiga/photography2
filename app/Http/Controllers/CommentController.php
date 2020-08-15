<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function commentStore(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $comments = new Comment;
        $comments->name = $request->input('name');
        $comments->email = $request->input('email');
        $comments->message = $request->input('message');
        $comments->blog_id = $request->input('blog_id');
        $comments->save();

        return back();
    }

    public function show(Comment $comment){

        $comments = Comment::find($comment);

        return view('blogs.show')->with('comments',$comments);
    }
}
