@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crea un nuovo post</h1>
        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="title">Titolo</label>
                <input class="form-control" type="text" id="title" name="title" value="{{ old('title') }}">
            </div>

            <div class="form-group">
                <label for="body">Testo</label>
                <textarea class="form-control" id="body" name="body" rows="10" value="{{ old('body') }}"></textarea>
            </div>

            <input class="btn-primary" type="submit" value="Crea">
        </form>
    </div>
@endsection