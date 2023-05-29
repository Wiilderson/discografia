<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Faixas;
use Illuminate\Http\Request;

class FaixasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    public function createTracks()
    {
        // return view('tracks');
    }

    public function showAlbuns()
    {

        $teste = Album::with('faixas')->get();
        return view('tracks', ['albuns' => $teste]);
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'id_album' => 'required',
            'faixa' => 'required',
            'duracao' => 'required',
        ]);

        $tracks = new Faixas;

        $tracks->album_id = $request->input('id_album');
        $tracks->numero_faixa = $request->input('id');
        $tracks->faixas = $request->input('faixa');
        $tracks->duracao = $request->input('duracao');


        $tracks->save();

        return redirect()->route('albums.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function deleteFaixa($id)
    {
        //
        $faixa = Faixas::find($id);
        $faixa->delete();
        return redirect()->route('album.action');
    }

    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }
}
