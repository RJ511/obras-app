<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Gestão de Obras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #343a40;
            color: white;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 15px;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h3 class="text-center py-3">Menu</h3>
    <a href="{{ route('dashboard') }}">Dashboard</a>
    <a href="{{ route('obras.index') }}">Obras</a>
    <a href="{{ route('clientes.index') }}">Clientes</a>
    <a href="{{ route('funcionarios.index') }}">Funcionários</a>
    <a href="{{ route('tipos.index') }}">Tipos</a>
    <a href="{{ route('ponto.index') }}">Ponto</a>
    <a href="{{ route('planeamento.index') }}">Planeamento</a>
    <a href="{{ route('exportar.index') }}">Exportar</a>
</div>

<div class="content">
    @yield('content')
</div>

</body>
</html>
