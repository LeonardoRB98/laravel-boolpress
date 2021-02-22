<?php

namespace App\Http\Controllers;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{   
    // dettaglio aricolo front end
    public function show($slug) {
        // cerco e salvo lo slug del post
        $post = Post::where('slug', $slug)->firstorFail(); // equivalente di abort('404'), ovviamento con if(empty($post)) {abort('404')}
        return view('post', compact('post')); // equivalente di ['post' => $post]
    }

    //aggiunge commento paramentri: 
    public function addComment(Request $request, $id) {
        // dump($id);
        // dump($request);
        $data = $request->all();
        $newComment = new Comment();
        $newComment->post_id = $id;
        $newComment->author = $data["author"];
        $newComment->text = $data["text"];
        // $newComment->fill($data); versione abbreviata con fillable impostati nel model, il post id va passato comunque a mano
        $newComment->save();

        $post = Post::findOrFail($id);
        // dd($post);
        return redirect()->route('post', $post->slug);
    }
}
