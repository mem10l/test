@extends('layouts.app')

@section('content')
<h1>Edit Book</h1>

<form action="/books/{{ $book->id }}" method="POST">
    @csrf
    @method('PUT')
    <div>
    <input value="{{ $book->title }}" type="text" name="title" placeholder="title goes here" class="@error('title') is-invalid @enderror">

    @error('title',)
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div>
    <input value="{{ $book->author }}" type="text" name="author" placeholder="author goes here" class="@error('author') is-invalid @enderror">
    
    @error('author')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div>
        
    <input value="{{ $book->released_at }}" type="date" name="released_at" placeholder="date goes here" class="@error('released_at') is-invalid @enderror">
    
    @error('released_at')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<input type="submit" value = "edit">
</form>
@endsection