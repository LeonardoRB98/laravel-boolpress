<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoPost extends Model
{   
    // disattivo i timestams per la tabella infoposts
    public $timestamps = false;

    // realzioni database
    // serve a recupare il Post da InfoPost
    public function post() {
        // $this si riferisce ad Infopost
        return $this->belongTo('App\Post'); //la tabella secondaria avra sempre il belong to perché appartiene a quella primaria Post
    }
}