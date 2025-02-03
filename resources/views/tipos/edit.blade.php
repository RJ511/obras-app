@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Editar Cliente</h2>
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

<form action="{{ route('tipos.update', $tipo->tipoID) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="tipoNome" class="form-label">Nome do Tipo</label>
        <input type="text" name="tipoNome" class="form-control" value="{{ $tipo->tipoNome }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
@endsection
