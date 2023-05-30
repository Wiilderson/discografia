<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumsController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function list()
    {
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
        $faixa = Album::find($id);
        $faixa->delete();
        return redirect()->route('album.action');
    }

    public function searchAlbumFaixa(Request $request)
    {
        $termo = $request->input('pesquisa');

        $teste = DB::table('albums')
            ->join('faixas', 'albums.id', '=', 'faixas.album_id')
            ->whereRaw("albums.name_album ilike '%$termo%'")
            ->orWhereRaw("faixas.faixas ilike '%$termo%'")
            ->distinct()
            ->get();

        // $results = DB::table('faixas')
        //     ->select('faixas.*', 'albums.name_album')
        //     ->join('albums', 'faixas.album_id', '=', 'albums.id')
        //     ->whereRaw("albums.name_album ILIKE '%$termo%'")
        //     ->get();

        //dd($results, $teste);
        return view('home', ['albuns' => $teste]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function showHome()
    {
        return view('home');
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
