@extends('layouts.main')

@section('header-content')
    <div class="container">
        <h1>modifica il post</h1> 
    </div>

@endsection

@section('main-content')
    <section class="container">
        <form action="{{ route('posts.update', $post->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" name="title" class="form-control" placeholder="insersci il titolo" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="author">Autore</label>
                    <input type="text" name="author" class="form-control" value="{{ $post->author }}" placeholder="inserisce l'autore">
                </div>
                <div class="form-group">
                    <label for="pubblication_date">data di pubblicazione</label>
                    <input type="date" name="pubblication_date" value="{{ $post->pubblication_date }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="post_status">post status</label>
                    <select name="post_status" id="post_status">
                        <option value="draft" @if ($post->infoPost->post_status == 'draft') selected @endif>Draft</option>
                        <option value="private" @if ($post->infoPost->post_status == 'private') selected @endif >Private</option>
                        <option value="public" @if ($post->infoPost->post_status == 'public') selected @endif >Public</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="comment_status">post status</label>
                    <select name="comment_status" id="comment_status">
                        <option value="open" @if ($post->infoPost->post_status == 'open') selected @endif >Open</option>
                        <option value="closed" @if ($post->infoPost->post_status == 'closed') selected @endif >Closed</option>
                        <option value="private" @if ($post->infoPost->post_status == 'private') selected @endif >Private</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="text_article">Testo</label>
                    <textarea name="text_article" class="form-control" id="text_article" rows="8">{{$post->text_article}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Salva</button>
                <td><a class="btn btn-secondary float-right" href="{{route('posts.index')}}">Home</a></td>
            </form>
    </section>
@endsection

@section('footer-content') 

@endsection