@extends('layouts.main')

    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->text_article }}</p>
        <small>{{ $post->author }} - {{ $post->pubblication_date }}</small>
        <hr class="my-5">
    </div>
@section('main-content')

@endsection
    <section id="comments " class="container">
        <h2>Commenti</h2>
        @foreach($post->comments as $comment)
            <div>
                <small> {{ $comment->author }} - {{ $comment->created_at }}</small>
                <p>{{ $comment->text }}</p>
            </div>
        @endforeach
        
    </section>
@section('footer-content')

    <section id="form" class="container">
        <form action="{{ route('add-comment', $post->id)}}" method="post">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="author">author</label>
                <input type="text" class="form-control" id="text" name="author" value="" placeholder="inserisci l'autore">
            </div>
            <div class="form-group">
                <label for="text">Testo</label>
                <textarea name="text" id="text" class="form-control" rows="6" placeholder="inserisci il testo del commento"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </section>
@endsection