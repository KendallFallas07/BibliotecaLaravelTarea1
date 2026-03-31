<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with(['author','publisher'])->get();
        return view('books.index', compact('books'));
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function create()
    {
        return view('books.create', [
            'authors' => Author::all(),
            'publishers' => Publisher::all()
        ]);
    }

    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect()->route('books.index');
    }

    public function edit(Book $book)
    {
        return view('books.edit', [
            'book' => $book,
            'authors' => Author::all(),
            'publishers' => Publisher::all()
        ]);
    }

    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return redirect()->route('books.show', $book);
    }
}