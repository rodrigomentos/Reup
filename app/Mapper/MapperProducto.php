<?php

namespace App\Mapper;

use App\Models\Producto;

class MapperProducto
{
    public static function mapRow($resulSet)
    {
        $producto = new Producto();
        
        try{
          
            $producto->setId($resulSet->id);
            $producto->setNombre($resulSet->nombre);
            $producto->setPrecio($resulSet->precio);
            $producto->setStock($resulSet->stock);
            $producto->setDescripcion($resulSet->descripcion);
            $producto->setEstado($resulSet->estado);
            $producto->setFechaCreacion($resulSet->created_at);
            $producto->setFechaActualizacion($resulSet->updated_at);

            return $producto->getId();
        }catch(\Exception $e){

            throw $e;
            
        }finally{
           
            return $producto;
        }
    }
}