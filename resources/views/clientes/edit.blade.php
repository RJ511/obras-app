@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Editar Cliente</h2>
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('clientes.update', $cliente->clienteID) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="clienteNome" class="form-label">Nome do Cliente</label>
        <input type="text" name="clienteNome" class="form-control" value="{{ $cliente->clienteNome }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
@endsection
