<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.sidebar', function($view) {

            /*
            $view->with('archives', \App\Post::archives());

            $view->with('tags', \App\Tag::has('posts')->pluck('name'));
            */

            $archives = \App\Post::archives();

            $tags = \App\Tag::has('posts')->pluck('name');

            $view->with(compact('archives', 'tags'));

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
