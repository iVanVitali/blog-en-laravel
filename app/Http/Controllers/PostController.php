<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index() {

        /*
        $posts = Post::latest();

        if($month = request('month')) {
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if($year = request('year')) {
            $posts->whereYear('created_at', $year);
        }

        $posts = $posts->get();
        */

        $posts = Post::latest()
            ->filter(request(['month','year']))
            ->get();

        /*
        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year','month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
        */

        //$archives = Post::archives();


        //return view('posts.index', compact('posts','archives'));
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

        //dd(auth()->user()->id);

        $this->validate(request(), [
                'title' =>  'required|min:3',
                'body'  =>  'required|min:10'
            ]);

        auth()->user()->publish(new Post(request(['title', 'body'])));

        // Mostrar el mensaje instantaneo
        session()->flash('flash-message','Te nuevo post fue publicado!');

        // Redireccionar
        return redirect('/');
    }
}
