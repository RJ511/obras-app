<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obra;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $semanaAtual = Carbon::now()->weekOfYear;

        $obrasSemanaAtual = Obra::where('obraSemana', $semanaAtual)->get();
        $obrasProximaSemana = Obra::where('obraSemana', $semanaAtual + 1)->get();
        $obrasDuasSemanas = Obra::where('obraSemana', $semanaAtual + 2)->get();

        return view('dashboard', compact('semanaAtual', 'obrasSemanaAtual', 'obrasProximaSemana', 'obrasDuasSemanas'));
    }
}

