<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{   
    // dettaglio aricolo front end
    public function show($slug) {
        // cerco e salvo lo slug del post
        $post = Post::where('slug', $slug)->firstorFail(); // equivalente di abort('404'), ovviamento con if(empty($post)) {abort('404')}
        return view('post', compact('post')); // equivalente di ['post' => $post]
    }
}
