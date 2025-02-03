<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    use HasFactory;

    protected $table = 'Obra';
    protected $primaryKey = 'obraID';
    protected $fillable = [
        'obraCliente', 'obraDesignacao', 'obraSemana',
        'obraConcluida', 'obraHoras', 'obraOrcamento', 'obraTipo'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'obraCliente', 'clienteID');
    }

    public function tipo()
    {
        return $this->belongsTo(Tipo::class, 'obraTipo', 'tipoID');
    }
}

