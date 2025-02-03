<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ObraController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\PontoController;
use App\Http\Controllers\PlaneamentoController;
use App\Http\Controllers\ExportarController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Rotas para Obras
Route::resource('obras', ObraController::class);

// Rotas para Clientes
Route::resource('clientes', ClienteController::class);

// Rotas para Funcionários
Route::resource('funcionarios', FuncionarioController::class);

// Rotas para Ponto (Registo de horas)
Route::get('ponto', [PontoController::class, 'index'])->name('ponto.index');
Route::post('ponto', [PontoController::class, 'store'])->name('ponto.store');

// Rotas para Tipos
Route::resource('tipos', TipoController::class);

// Rotas para Planeamento
Route::get('planeamento', [PlaneamentoController::class, 'index'])->name('planeamento.index');
Route::get('planeamento/lucro', [PlaneamentoController::class, 'lucro'])->name('planeamento.lucro');

// Rotas para Exportação
Route::get('exportar', [ExportarController::class, 'index'])->name('exportar.index');
Route::post('exportar/planeamento', [ExportarController::class, 'exportPlaneamento'])->name('exportar.planeamento');
Route::post('exportar/calendario', [ExportarController::class, 'exportCalendario'])->name('exportar.calendario');

