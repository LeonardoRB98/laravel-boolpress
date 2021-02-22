@extends('layouts.main')

@section('header-content')
    <div class="container">
        <h1>dettaglio prodotto</h1>
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
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->author }}</td>
                    <td>{{ $post->pubblication_date }}</td>
                <td>{{ $post->infoPost->post_status }}</td>
                </tr>
            </tbody>    
        </table>
    </div>
    
@endsection

@section('footer-content')
    
@endsection
