<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author')->latest()->get();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $authors = Author::all();
        return view('books.create', compact('authors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'author_id' => 'required|exists:authors,id',
            'title' => 'required',
            'isbn' => 'required|unique:books'
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')
            ->with('success','Book added successfully');
    }

    public function edit(Book $book)
    {
        $authors = Author::all();
        return view('books.edit', compact('book','authors'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'author_id' => 'required',
            'title' => 'required',
            'isbn' => 'required|unique:books,isbn,'.$book->id
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')
            ->with('success','Book updated');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return back()->with('success','Book deleted');
    }
}

