@extends('home')

@section('title', 'MAG Editar categoria')

@section('content_section')
<div class="container">
    <div class="Title display-5">Editar Tag</div>
    <div>
        <form action="{{ route('tags.update', ['tag' => $tag->id]) }}" method="POST">
            @csrf
            @method('put')
            <label for="">Nome Tag:</label>
            <input class="form-control" type="text" name="name" value="{{ $tag->name }}">
            <input class="form-control btn-primary"type="submit" value="Editar Tag">
            </form>

    </div>
    
</div>
@endsection