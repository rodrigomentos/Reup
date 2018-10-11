<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';
   
    /**
     * ALTER TABLE ventas ADD CONSTRAINT IdComprobante_Ventas UNIQUE (comprobante_id);
     */
}
