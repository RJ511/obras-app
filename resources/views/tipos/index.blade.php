@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Lista de Tipos</h2>
    <a href="{{ route('tipos.create') }}" class="btn btn-primary">Adicionar Tipo</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-hover">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nome do Tipo</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tipos as $tipo)
        <tr>
            <td>{{ $tipo->tipoID }}</td>
            <td>{{ $tipo->tipoNome }}</td>
            <td>
                <a href="{{ route('tipos.edit', $tipo->tipoID) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('tipos.destroy', $tipo->tipoID) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem a certeza que deseja remover este tipo?')">Remover</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
