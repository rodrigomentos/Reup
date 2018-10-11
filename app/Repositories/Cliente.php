<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    public function scopeactivo($query, $activo = 1)
    {
        $query->where('estado', $activo);
    }

    public function scopebyDocumento($query, $documento)
    {
        $query->where('documento', $documento);
    }
}
