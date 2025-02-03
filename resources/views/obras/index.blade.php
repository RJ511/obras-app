@extends('layout')

@section('content')
<a href="{{ route('obras.create') }}" class="btn btn-primary mb-3">Adicionar Nova Obra</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Designação</th>
            <th>Cliente</th>
            <th>Tipo</th>
            <th>Semana</th>
            <th>Concluída</th>
            <th>Horas</th>
            <th>Orçamento</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($obras as $obra)
            <tr>
                <td>{{ $obra->obraDesignacao }}</td>
                <td>{{ $obra->cliente->clienteNome }}</td>
                <td>{{ $obra->tipo->tipoNome }}</td>
                <td>{{ $obra->obraSemana }}</td>
                <td>{{ $obra->obraConcluida ? 'Sim' : 'Não' }}</td>
                <td>{{ $obra->obraHoras }}</td>
                <td>€{{ number_format($obra->obraOrcamento, 2) }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
