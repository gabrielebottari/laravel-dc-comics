<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }
    

    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        $comicData = $request -> all();

        $comic = new Comic();
        $comic->title = $comicData['title'];
        $comic->description = $comicData['description'];
        $comic->thumb = $comicData['thumb'];
        $comic->price = $comicData['price'];
        $comic->series = $comicData['series'];
        $comic->sale_date = $comicData['sale_date'];
        $comic->type = $comicData['type'];
        $comic->save();
    
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    public function update(Request $request, Comic $comic)
    {
        $comicData = $request->only(['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type']);
        $comic->update($comicData);
    
        return redirect()->route('comics.index')->with('success', 'Comic updated successfully!');
    }

    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }
}
