<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return Book::with('author')->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'author_id'      => 'required|exists:authors,id',
            'title'          => 'required|string|max:255',
            'published_year' => 'required|integer',
        ]);

        return Book::create($validated);
    }

    public function show(Book $book)
    {
        return $book->load('author');
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'author_id'      => 'required|exists:authors,id',
            'title'          => 'required|string|max:255',
            'published_year' => 'required|integer',
        ]);

        $book->update($validated);
        return $book;
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json(['message' => 'Book deleted']);
    }
}