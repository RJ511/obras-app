<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExportarController extends Controller
{
    public function exportPlaneamento()
{
    return Excel::download(new PlaneamentoExport, 'planeamento.xlsx');
}
}
