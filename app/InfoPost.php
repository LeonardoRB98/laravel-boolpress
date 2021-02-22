<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class InfoPost extends Model
{   
    protected $fillable = [
        'post_id',
        'post_status',
        'comment_status'
    ];
    // disattivo i timestams per la tabella infoposts
    public $timestamps = false;

    // realzioni database
    // serve a recupare il Post da InfoPost
    public function post() {
        // $this si riferisce ad Infopost
        return $this->belongTo('App\Post'); //la tabella secondaria avra sempre il belong to perché appartiene a quella primaria Post
        
    }
}