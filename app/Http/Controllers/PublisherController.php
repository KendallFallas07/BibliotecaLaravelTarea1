<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index()
    {
        $publishers = Publisher::all();
        return view('publishers.index', compact('publishers'));
    }

    public function show(Publisher $publisher)
    {
        $publisher->load('books');
        return view('publishers.show', compact('publisher'));
    }

    public function create()
    {
        return view('publishers.create');
    }

    public function store(Request $request)
    {
        Publisher::create($request->all());
        return redirect()->route('publishers.index');
    }

    public function edit(Publisher $publisher)
    {
        return view('publishers.edit', compact('publisher'));
    }

    public function update(Request $request, Publisher $publisher)
    {
        $publisher->update($request->all());
        return redirect()->route('publishers.show', $publisher);
    }
}