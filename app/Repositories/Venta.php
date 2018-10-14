<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';
   
    /**
     * ALTER TABLE ventas ADD CONSTRAINT IdComprobante_Ventas UNIQUE (comprobante_id);
     */

    public function cliente()
    {
        return $this->hasOne('App\Repositories\Cliente','id','cliente_id');
    }

    public function comprobante()
    {
        return $this->hasOne('App\Repositories\Comprobante','id','comprobante_id');
    }

    public function detalle()
    {
        return $this->hasMany('App\Repositories\DetalleVenta','venta_id','id');
    }

    public function scopeinfo($query)
    {
        $query->with('comprobante','cliente');
    }
}
