@extends('layouts.app')

@section('content')
<h2>Dashboard</h2>

<div class="row">
    <div class="col-md-4">
        <div class="card bg-primary text-white mb-3">
            <div class="card-body">
                <h5 class="card-title">Obras da Semana Atual (Semana {{ $semanaAtual }})</h5>
                <p class="card-text">{{ $obrasSemanaAtual->count() }} obras em andamento</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card bg-warning text-dark mb-3">
            <div class="card-body">
                <h5 class="card-title">Obras na Próxima Semana (Semana {{ $semanaAtual + 1 }})</h5>
                <p class="card-text">{{ $obrasProximaSemana->count() }} obras agendadas</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card bg-success text-white mb-3">
            <div class="card-body">
                <h5 class="card-title">Obras em 2 Semanas (Semana {{ $semanaAtual + 2 }})</h5>
                <p class="card-text">{{ $obrasDuasSemanas->count() }} obras agendadas</p>
            </div>
        </div>
    </div>
</div>
@endsection
