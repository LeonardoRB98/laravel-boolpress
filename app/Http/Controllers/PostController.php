<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\InfoPost;
use Illuminate\Support\Str;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $posts = Post::all();
        // dump($posts);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'text_article' => 'required',
            'post_status' => 'required',
            'post_comment' => 'required',
        ]);

        $data = $request->all();
        $data["slug"] = Str::of($data["title"]);
        // dd($data);
        $newPost = new Post();
        $newPost->fill($data);
        $newPost->save();

        $data["post_id"] = $newPost->id;
        $infoPost = new InfoPost();
        $infoPost->fill($data);
        $infoPost->save();

        return redirect()->route('posts.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

       return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // dd($post);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {   
        
        $infoPost = InfoPost::where('post_id', $post->id)->first();
        $data = $request->all();
        $data["slug"] = Str::slug($data["title"]);
        $data['post_id'] = $post->id;
        // dd($data);
        $post->update($data);
        $infoPost->update($data);
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
