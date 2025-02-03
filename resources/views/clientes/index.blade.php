@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Lista de Clientes</h2>
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">Adicionar Cliente</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-hover">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nome do Cliente</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->clienteID }}</td>
            <td>{{ $cliente->clienteNome }}</td>
            <td>
                <a href="{{ route('clientes.edit', $cliente->clienteID) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('clientes.destroy', $cliente->clienteID) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem a certeza que deseja remover este cliente?')">Remover</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
