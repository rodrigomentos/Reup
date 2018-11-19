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
        if($id){
            $query->where('id', $id);  
        }
        
    }

    public function scopeByCodigo($query, $codigo)
    {
        if($codigo){
            $query->where('codigo', $codigo);
        }
       
    }
}
