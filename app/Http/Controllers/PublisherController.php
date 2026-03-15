<?php

namespace App\Http\Controllers;

class PublisherController extends Controller
{
    private function publishers()
    {
        return [
            [
                'id' => 1,
                'name' => 'John Wiley & Sons',
                'country' => 'United States',
                'founded' => 1807,
                'genere' => 'Academic',
                'books' => [
                    ['book_id' => 1, 'title' => 'Operating System Concepts'],
                    ['book_id' => 2, 'title' => 'Database System Concepts'],
                ]
            ],
            [
                'id' => 2,
                'name' => 'Pearson Education',
                'country' => 'United Kingdom',
                'founded' => 1844,
                'genere' => 'Education',
                'books' => [
                    ['book_id' => 3, 'title' => 'Computer Networks'],
                    ['book_id' => 4, 'title' => 'Modern Operating Systems'],
                ]
            ]
        ];
    }

    public function index()
    {
        $publishers = $this->publishers();
        return view('publishers.index', compact('publishers'));
    }

    public function show($id)
    {
        $publisher = collect($this->publishers())->firstWhere('id', (int) $id);

        if (!$publisher) {
            abort(404);
        }

        return view('publishers.show', compact('publisher'));
    }
}