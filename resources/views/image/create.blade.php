@extends('layouts.app')

@section('content')
    

<form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
    <h1>Post a new image</h1>
      @csrf

      <div>
        <input type="file" name="image">
      </div>
  
      <div>
        <input type="text" name="label" placeholder="Insert an image label">
      </div>

      <div>
          <input type="submit" value="create">
      </div>
    </form>
@endsection
