@section('app')
<h1>Image</h1>
<a href="/image/create">Post an image</a>
<ul>
    @foreach($images as $image)
    <form action="{{ route('image.destroy', $image) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="delete">
            
    <img src="{{ asset('storage/' . $image->path) }}" class="w-48 h-48 object-contain">
            <h2>{{ $image->label }}</h2>
    
        </form>
    @endforeach
</ul>