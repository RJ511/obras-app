<?php

namespace App\Http\Controllers;

use App\Models\Obra;
use App\Models\Cliente;
use App\Models\Tipo;
use Illuminate\Http\Request;

class ObraController extends Controller
{
    public function index()
    {
        $obras = Obra::with('cliente', 'tipo')->get();
        return view('obras.index', compact('obras'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        $tipos = Tipo::all();
        return view('obras.create', compact('clientes', 'tipos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'obraDesignacao' => 'required|string|max:255',
            'obraCliente' => 'required|integer',
            'obraTipo' => 'required|integer',
            'obraSemana' => 'required|integer|between:1,52',
            'obraConcluida' => 'boolean',
            'obraHoras' => 'required|numeric|min:0',
            'obraOrcamento' => 'required|numeric|min:0',
        ]);

        Obra::create($request->all());

        return redirect()->route('obras.index')->with('success', 'Obra adicionada com sucesso!');
    }
}

