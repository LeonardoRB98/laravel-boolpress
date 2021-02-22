@extends('layouts.main')

    <div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->text_article }}</p>
    <small>{{ $post->author }} - {{ $post->pubblication_date }}</small>
    @dump($post)
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

@endsection