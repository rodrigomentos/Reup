<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table = 'detalleVentas';

    public $timestamps = false;

    protected $fillable = ['id','codigo','venta_id','producto_id','cantidad','monto','precio'];

    public function venta()
    {
        return $this->hasOne('App\Repositories\Venta','id','venta_id');
    }

    public function producto()
    {
        return $this->hasOne('App\Repositories\Producto','id','producto_id');
    }

    public function scopeByVentaId($query,$ventaId)
    {
        return $query->where('venta_id',$ventaId);
    }

    public function scopeinfo($query)
    {
        $query->with('producto');
    }
}
