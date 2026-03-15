<?php

namespace App\Http\Controllers;

class AuthorController extends Controller
{
    private function authors()
    {
        return [
            [
                'id' => 1,
                'name' => 'Abraham Silberschatz',
                'nationality' => 'Israelis / American',
                'birth_year' => 1952,
                'fields' => 'Database Systems, Operating Systems',
                'books' => [
                    ['book_id' => 1, 'title' => 'Operating System Concepts'],
                    ['book_id' => 2, 'title' => 'Database System Concepts'],
                ]
            ],
            [
                'id' => 2,
                'name' => 'Andrew S. Tanenbaum',
                'nationality' => 'Dutch / American',
                'birth_year' => 1944,
                'fields' => 'Distributed computing, Operating Systems',
                'books' => [
                    ['book_id' => 3, 'title' => 'Computer Networks'],
                    ['book_id' => 4, 'title' => 'Modern Operating Systems'],
                ]
            ]
        ];
    }

    public function index()
    {
        $authors = $this->authors();
        return view('authors.index', compact('authors'));
    }

    public function show($id)
    {
        $author = collect($this->authors())->firstWhere('id', (int) $id);

        if (!$author) {
            abort(404);
        }

        return view('authors.show', compact('author'));
    }
}