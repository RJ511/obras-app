@extends('layout')

@section('content')
<h2>Adicionar Nova Obra</h2>

<form action="{{ route('obras.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Designação</label>
        <input type="text" name="obraDesignacao" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Cliente</label>
        <select name="obraCliente" class="form-control">
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->clienteID }}">{{ $cliente->clienteNome }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Tipo</label>
        <select name="obraTipo" class="form-control">
            @foreach ($tipos as $tipo)
                <option value="{{ $tipo->tipoID }}">{{ $tipo->tipoNome }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Semana</label>
        <input type="number" name="obraSemana" class="form-control" min="1" max="52" required>
    </div>

    <div class="mb-3">
        <label>Concluída</label>
        <select name="obraConcluida" class="form-control">
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Horas</label>
        <input type="number" name="obraHoras" class="form-control" step="0.1" required>
    </div>

    <div class="mb-3">
        <label>Orçamento (€)</label>
        <input type="number" name="obraOrcamento" class="form-control" step="0.001" required>
    </div>

    <button type="submit" class="btn btn-success">Guardar</button>
</form>
@endsection
