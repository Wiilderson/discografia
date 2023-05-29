<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    public function list()
    {

        // $albuns = Album::all();
        // $faixas = Faixas::all();
        // return view('list', compact('albuns', 'faixas'));

        $teste = Album::with('faixas')->get();
        return view('list', ['albuns' => $teste]);
    }

    public function listActions()
    {

        $teste = Album::with('faixas')->get();
        return view('delete', ['albuns' => $teste]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'album_name' => 'required',
        ]);

        $album = new Album;
        $album->name_album = $request->input('album_name');

        $album->save();

        return redirect()->route('albums.index');
    }


    public function deleteAlbum($id)
    {
        //
        $faixa = Album::find($id);
        $faixa->delete();
        return redirect()->route('album.action');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
