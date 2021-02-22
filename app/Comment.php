<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post() {
        // collega i commenti al post
        return $this->belongsTo('App\Post');
    }
}
