<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    protected $table = 'comprobantes';
    
    public $timestamps = false;

    protected $fillable = ['tipo','serie','numero'];

    /**
     * ALTER TABLE comprobantes ADD CONSTRAINT TSN_Comprobantes UNIQUE (tipo,serie,numero);
     */


    public function scopebyTipo($query, $tipo)
    {
        $query->where('tipo', $tipo);
    }

    public function scopelasted($query)
    {
        $query->orderBy('id','desc');
    }
}
