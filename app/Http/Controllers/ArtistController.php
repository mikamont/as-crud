<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index()
{
    $artist = Artist::all();
    return view('artist.index', compact('artist'));
}

public function create()
{
    return view('artist.create');
}

public function store(Request $request)
{
    Artist::create($request->all());
    return redirect('artist')->with('success', 'artist created successfully.');
}

public function edit($id)
{
    $artist = Artist::findOrFail($id);
    return view('artist.edit', compact('artist'));
}

public function update(Request $request, $id)
{
    $artist = Artist::findOrFail($id);
    $artist->update($request->all());
    return redirect('artist')->with('success', 'Artist updated successfully.');
}
public function destroy($id)
{
    $artist = Artist::findOrFail($id);
    $artist->delete();
    return redirect('artist')->with('success', 'Artist deleted successfully.');
}

}
