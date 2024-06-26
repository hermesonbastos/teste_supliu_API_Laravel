<?php

namespace App\Http\Controllers;

use App\Models\Faixa;
use Illuminate\Http\Request;

class FaixaController extends Controller
{
    // obter toad as faixas
    public function index()
    {
        return Faixa::all();
    }

    // obter faixa por id
    public function show($id)
    {
        return Faixa::findOrFail($id);
    }

    // adicionar faixa em um album
    public function store(Request $request)
    {
        $faixa = Faixa::create([
            'nome' => $request->get('nome'),
            'album_id' => $request->get('album_id'),
        ]);
        return response()->json($faixa, 201);
    }

    // apagar uma faixa
    public function destroy($id)
    {
        Faixa::findOrFail($id)->delete();
        return response()->json(null, 204);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $faixa = Faixa::findOrFail($id);
        $faixa->update($validatedData);

        return response()->json($faixa, 200);
    }
}
