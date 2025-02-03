@extends('layouts.app')

@section('content')
<h2>Registo de Ponto</h2>

<form action="{{ route('ponto.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Funcionário</label>
        <select name="funcionarioID" class="form-control">
            @foreach ($funcionarios as $funcionario)
                <option value="{{ $funcionario->funcionarioID }}">{{ $funcionario->funcionarioNome }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Obra</label>
        <select name="obraID" class="form-control">
            @foreach ($obras as $obra)
                <option value="{{ $obra->obraID }}">{{ $obra->obraDesignacao }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Horas Trabalhadas</label>
        <input type="number" name="horasTrabalhadas" class="form-control" step="0.1" required>
    </div>

    <div class="mb-3">
        <label>Data</label>
        <input type="date" name="dia" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Guardar Ponto</button>
</form>
@endsection
