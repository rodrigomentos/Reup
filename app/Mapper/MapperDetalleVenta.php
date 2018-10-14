<?php

namespace App\Mapper;
use App\Models\DetalleVenta;

class MapperDetalleVenta
{
    public static function mapRow($resulSet)
    {
        $detalleVenta = new DetalleVenta();
        
        try{
          
            $detalleVenta->setId($resulSet->id);
            $detalleVenta->setCodigo($resulSet->codigo);
            $detalleVenta->setVenta($resulSet->venta_id);
            $detalleVenta->setProducto($resulSet->producto_id);
            $detalleVenta->setMonto($resulSet->monto);


            
        }catch(\Exception $e){

            throw $e;
            
        }finally{
           
            return $detalleVenta;
        }
    
    }
}