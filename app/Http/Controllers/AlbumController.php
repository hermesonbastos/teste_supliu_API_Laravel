<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    // obter todos os albuns
    public function index()
    {
        return Album::all();
    }

    // obter um album por id
    public function show($id)
    {
        return Album::findOrFail($id);
    }

    // adicionar um album
    public function store(Request $request)
    {
        $album = Album::create($request->all());
        return response()->json($album, 201);
    }

    // apagar um album
    public function destroy($id)
    {
        $album = Album::findOrFail($id);

        $album->faixas()->delete();
        $album->forceDelete();

        return response()->json(null, 204);
    }

    // atualizar os dados de um álbum específico
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'ano' => 'required|integer',
        ]);

        $album = Album::findOrFail($id);
        $album->update($validatedData);

        return response()->json($album, 200);
    }

    public function getFaixasByAlbumId($id)
    {
        $album = Album::findOrFail($id);
        $faixas = $album->faixas;

        return response()->json($faixas, 200);
    }

    public function getAllAlbumsWithFaixas()
    {
        $albums = Album::with('faixas')->get();
        return response()->json($albums, 200);
    }
}
