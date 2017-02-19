<?php

namespace App;

use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];


    public function comments() {

        return $this->hasMany('App\Comment');
    }

    public function addComment($body) {

        $this->comments()->create(compact('body'));

        /*
            Comment::create([
                'body'  =>  $body,
                'post_id' => $this->id
            ]);
        */
    }
}
