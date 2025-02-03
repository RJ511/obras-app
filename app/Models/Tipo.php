<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    // Definir a tabela explicitamente (não obrigatório se o nome seguir o padrão)
    protected $table = 'Tipo';

    // Definir a chave primária
    protected $primaryKey = 'tipoID';

    // Permitir atribuição em massa para estes campos
    protected $fillable = ['tipoNome'];

    // Relação: Um Tipo tem muitas Obras
    public function obras()
    {
        return $this->hasMany(Obra::class, 'obraTipo', 'tipoID');
    }
}
