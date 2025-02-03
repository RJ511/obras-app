@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Adicionar Tipo</h2>
    <a href="{{ route('tipos.index') }}" class="btn btn-secondary">Voltar</a>
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

<form action="{{ route('tipos.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="tipoID" class="form-label">ID Tipo</label>
        <input type="number" name="tipoID" class="form-control" placeholder="ID do tipo" required>
        <label for="tipoNome" class="form-label">Nome do Tipo</label>
        <input type="text" name="tipoNome" class="form-control" placeholder="Nome do tipo" required>
    </div>
    <button type="submit" class="btn btn-success">Adicionar</button>
</form>
@endsection
