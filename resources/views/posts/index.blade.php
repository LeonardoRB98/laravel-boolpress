@extends('layouts.main')

@section('header-content')
    <h1>Tutti i posts</h1>
@endsection

@section('main-content')
    <table>
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
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('footer-content')
    sono il footer .
@endsection