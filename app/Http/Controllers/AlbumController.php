<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    // obter todos os albuns
    public function index() {
        return Album::all();
    }

    // obter um album por id
    public function show($id) {
        return Album::findOrFail($id);
    }

    // adicionar um album
    public function store(Request $request) {
        $album = Album::create($request->all());
        return response()->json($album, 201);
    }

    // apagar um album
    public function destroy($id) {
        Album::findOrFail($id)->delete();
        return response()->json(null, 204);
    }

    // buscar albuns por nome
    public function search(Request $request) {
        $query = $request->get('q');
        return Album::where('nome', 'like', "%$query%")->get();
    }
}
