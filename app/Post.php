<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'author',
        'text_article',
        'pubblication_date',
    ];

    // relazioni database

    // serve a recupare l' InfoPost dal Post
    public function infoPost() {
        return $this->hasOne('App\InfoPost');// has one relazione one to one , quindi 1 Post ha 1 InfoPost
    }
}

