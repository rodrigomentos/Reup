<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    public function scopeactivo($query, $activo = 1)
    {
        $query->where('estado', $activo);
    }

    public function scopeById($query, $id)
    {
        $query->where('id', $id);
    }
}
