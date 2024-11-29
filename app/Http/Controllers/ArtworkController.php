<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    public function index()
    {
        $artwork = Artwork::all();
        return view('artwork', compact('artwork'));
    }
    
    public function create()
    {
        return view('artwork.create');
    }
    
    public function store(Request $request)
    {
        Artwork::create($request->all());
        return redirect('artwork')->with('success', 'artwork created successfully.');
    }
    
    public function edit($id)
    {
        $artwork = Artwork::findOrFail($id);
        return view('artwork.edit', compact('artwork'));
    }
    
    public function update(Request $request, $id)
    {
        $artwork = Artwork::findOrFail($id);
        $artwork->update($request->all());
        return redirect('artwork')->with('success', 'Artwork updated successfully.');
    }
    public function destroy($id)
    {
        $artwork = Artwork::findOrFail($id);
        $artwork->delete();
        return redirect('artwork')->with('success', 'Artwork deleted successfully.');
    }
}
