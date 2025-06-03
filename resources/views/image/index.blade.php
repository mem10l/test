@extends('layouts.app')

@section('app')
@endsection
<h1>Image</h1>
<a href="/image/create">Post an image</a>

<ul>

    @foreach($images as $image)
        <form action="{{ route('image.destroy', $image) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
        </form>
            
        <img src="{{ Storage::url($image->path)  }}">
        <h2>{{ $image->label }}</h2>
    @endforeach
</ul>
