<?php

namespace App;

use App\Comment;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'user_id'];


    public function comments() {

        return $this->hasMany('App\Comment');
    }

    public function user() {

        return $this->belongsTo(User::class);
    }

    public function addComment($body) {

        $this->comments()->create([
                'body'  =>  $body,
                'user_id'   =>  auth()->user()->id
            ]);

        /*
            Comment::create([
                'body'  =>  $body,
                'post_id' => $this->id
            ]);
        */
    }

    public function scopeFilter($query, $filters) {

        if($month = $filters['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if($year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }

    }

    public static function archives() {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year','month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
