<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    public function create() {
        return view('books.create');
    }

    public function store(Request $request) {
        try {
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'author' => 'required|string|max:255',
                'released_at' => 'required|date',
            ], [
                'title.required' => 'The title of the book is mandatory.',
                'title.string' => 'The title must be a string.',
                'title.max' => 'The title cannot exceed 255 characters.',
                'author.required' => 'The author name is mandatory.',
                'author.string' => 'The author name must be a string.',
                'author.max' => 'The author name cannot exceed 255 characters.',
                'released_at.required' => 'The release date is required.',
                'released_at.date' => 'The release date must be a valid date.',
            ]);
    
            $book = Book::create([
                'title' => $request['title'],
                'author' => $request['author'],
                'released_at' => $request['released_at']
            ]);
        
            return redirect("/books/" . $book->book);
            
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors());
        }
    }
    

    public function show($book) {
        $singleBook = Book::find($book);
        return view('/books/show', ['singleBook' => $singleBook]);
    }

    public function edit($book) {
        $book = Book::find($book);
        return  view('books.edit', ['book' => $book]);

       
    }

    public function update($book, Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',           
            'author' => 'required|string|max:255',          
            'released_at' => 'required|date',               
        ]);

        $book = Book::find($book); 

        $title = $request->input('title');
        $author = $request->input('author');
        $released_at = $request->input('released_at');
    
        $book->fill(compact('title', 'author', 'released_at'));
        $book->save();

        return redirect('/books');
    }
    
    
    public function destroy($book) {
        $book = Book::destroy($book);
        return redirect('/books');
    }
}
