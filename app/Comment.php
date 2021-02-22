<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{   
    protected $fillable = [
        'author',
        'text',
        'post_id'
    ];

    public function post() {
        // collega i commenti al post
        return $this->belongsTo('App\Post');
    }
}
