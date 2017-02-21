<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Post $post) {
        /*
            Comment::create([
                'body'      =>    request('body'),
                'post_id'   =>  $post->id
            ]);
        */

        $this->validate(request(),['body' => 'required|min:3']);
        $post->addComment(request('body'));

        return back();
    }
}
