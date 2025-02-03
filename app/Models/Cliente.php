<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Definir a tabela explicitamente
    protected $table = 'Cliente';

    // Definir a chave primária
    protected $primaryKey = 'clienteID';

    // Permitir atribuição em massa
    protected $fillable = ['clienteNome'];

    // Relação: Um Cliente tem muitas Obras
    public function obras()
    {
        return $this->hasMany(Obra::class, 'obraCliente', 'clienteID');
    }
}
