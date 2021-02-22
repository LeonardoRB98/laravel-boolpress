<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'author',
        'slug',
        'text_article',
        'pubblication_date',
    ];

    // relazioni database

    // serve a recupare l' InfoPost dal Post
    public function infoPost() { //restituisce la relazione con dato HasOne, e crea una nuova proprità con il nome del metodo con all'interno gli attributi
        return $this->hasOne('App\InfoPost');// has one relazione one to one , quindi 1 Post ha 1 InfoPost
        // per recuperare un attributo della tabella InfoPost basta scrivere $post->infopost->nome_attributo
    }
    public function comments() {
        // collega il post ai commenti
        return $this->hasMany('App\Comment');
    }
}

