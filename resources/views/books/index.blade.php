<h1>Books</h1>
<a href="/books/create">Create a book</a>
<ul>
    @foreach($books as $book)
        <li>
            <h2>{{ $book->title }}</h2>
            <h3>{{ $book->author }}</h3>
            <p>{{ $book->released_at }}</p>
            <div>
                <a href="/books/{{ $book->id }}">Show</a>
                <a href="/books/{{ $book->id }}/edit">Edit</a>
            </div>
        </li>
    @endforeach
</ul>