@extends('layouts.main')

@section('header-content')
    <div class="container">
        <h1>Tutti i posts</h1>
    </div>
@endsection

@section('main-content')
    <div class="container">
        <table class="table table-striped ">
            <thead>
                <th>Title</th>
                <th>Author</th>
                <th>Pubblication date</th>
                <th>Post status</th>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->author }}</td>
                    <td>{{ $post->pubblication_date }}</td>
                <td>{{ $post->infoPost->post_status }}</td>
                <td><a class="btn btn-primary" href="{{route('posts.show', $post)}}">dettagli</a></td>
                <td><a class="btn btn-primary" href="{{route('posts.edit', $post)}}">Modifica</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-secondary" href="{{route('posts.create')}}">Aggiungi Post</a>
    </div>
@endsection

@section('footer-content')
    sono il footer .
@endsection