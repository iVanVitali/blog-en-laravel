<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index() {

        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {

        //dd(request()->all());
        // Crear nuevo post

        //$post = new Post;

        //$post->title = request('title');
        //$post->body = request('body');

        // Guardar en la base de datos

        //$post->save();

        $this->validate(request(), [
                'title' =>  'required|min:3',
                'body'  =>  'required|min:10'
            ]);

        Post::create([
           'title' =>  request('title'),
            'body' =>   request('body')
        ]);

        // Redireccionar

        return redirect('/');
    }
}
