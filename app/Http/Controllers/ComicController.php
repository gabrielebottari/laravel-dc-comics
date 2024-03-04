<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

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

    public function store(StoreComicRequest $request)
    {
        $comic = new Comic($request->all());
        $comic->save();
    
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $comicData = $request->only(['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type', 'artists', 'writers']);
        $comic->update($comicData);
    
        return redirect()->route('comics.index')->with('success', 'Comic updated successfully!');
    }

    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('success', 'Comic deleted successfully!');
    }
}
