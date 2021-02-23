@extends('layouts.main')

@section('header-content')
    <div class="container">
        <h1>Aggiungi un nuovo post</h1> 
    </div>

@endsection

@section('main-content')

    @if ($errors->any())
        <div class="alert alert-danger container">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="container">
        <form action="{{ route('posts.store') }}" method="POST">
                @method('POST')
                @csrf
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" name="title" class="form-control" placeholder="insersci il titolo" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="author">Autore</label>
                    <input type="text" name="author" class="form-control" placeholder="inserisce l'autore" value="{{ old('author') }}">
                </div>
                <div class="form-group">
                    <label for="pubblication_date">data di pubblicazione</label>
                    <input type="date" name="pubblication_date" class="form-control" value="{{ old('author') }}">
                </div>
                <div class="form-group">
                    <label for="post_status">post status</label>
                    <select name="post_status" id="post_status">
                        <option value="draft" >Draft</option>
                        <option value="private">Private</option>
                        <option value="public">Public</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="comment_status">Comment status</label>
                    <select name="comment_status" id="comment_status">
                        <option value="open">Open</option>
                        <option value="closed">Closed</option>
                        <option value="private">Private</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="text_article">Testo</label>
                    <textarea name="text_article" class="form-control" id="text_article" rows="8"></textarea>
                    @dump(old())
                </div>
                <button type="submit" class="btn btn-primary">Salva</button>
                <td><a class="btn btn-secondary float-right" href="{{route('posts.index')}}">Home</a></td>
            </form>
    </section>
@endsection

@section('footer-content')

@endsection