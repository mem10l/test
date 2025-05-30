<h1>New Book</h1>

<form action="/books" method="post">
    @csrf
    <div class="mb-3">
        <input 
            type="text" 
            name="title" 
            id="title"
            placeholder="Title goes here"
            class="form-control @error('title') is-invalid @enderror"
            value="{{ old('title') }}"
        >
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <input 
            type="text" 
            name="author" 
            id="author"
            placeholder="Author goes here"
            class="form-control @error('author') is-invalid @enderror"
            value="{{ old('author') }}"
        >
        @error('author')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <input 
            type="date" 
            name="released_at" 
            id="released_at"
            class="form-control @error('released_at') is-invalid @enderror"
            value="{{ old('released_at') }}"
        >
        @error('released_at')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
</form>
