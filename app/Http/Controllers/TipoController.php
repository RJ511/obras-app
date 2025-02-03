<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos = Tipo::all();
        return view('tipos.index', compact('tipos'));
    }

    public function create()
    {
        return view('tipos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipoID' => 'required',
            'tipoNome' => 'required|max:50',
        ]);

        Tipo::create($request->all());

        return redirect()->route('tipos.index')->with('success', 'Tipo adicionado com sucesso!');
    }

    public function edit(Tipo $tipo)
    {
        return view('tipos.edit', compact('tipo'));
    }

    public function update(Request $request, Tipo $tipo)
    {
        $request->validate([
            'tipoNome' => 'required|max:50',
        ]);

        $tipo->update($request->all());

        return redirect()->route('tipos.index')->with('success', 'Tipo atualizado com sucesso!');
    }

    public function destroy(Tipo $tipo)
    {
        $tipo->delete();
        return redirect()->route('tipos.index')->with('success', 'Tipo removido com sucesso!');
    }
}
