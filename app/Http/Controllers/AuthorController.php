<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::latest()->get();
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'nullable|email'
        ]);

        Author::create($request->all());

        return redirect()->route('authors.index')
            ->with('success','Author added successfully');
    }

    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, Author $author)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'nullable|email'
        ]);

        $author->update($request->all());

        return redirect()->route('authors.index')
            ->with('success','Author updated');
    }

    public function destroy(Author $author)
    {
        $author->delete();
        return back()->with('success','Author deleted');
    }
}

