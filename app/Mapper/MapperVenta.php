<?php

namespace App\Mapper;
use App\Models\Venta;

class MapperVenta
{
    public static function mapRow($resulSet)
    {
        $venta = new Venta();
        
        try{
          
            $venta->setId($resulSet->id);
            $venta->setComprobante($resulSet->comprobante_id);
            $venta->setCliente($resulSet->cliente_id);
            $venta->setMonto($resulSet->monto);
            $venta->setFechaCreacion($resulSet->created_at);
            $venta->setFechaActualizacion($resulSet->updated_at);

            
        }catch(\Exception $e){

            throw $e;
            
        }finally{
           
            return $venta;
        }
    }
}