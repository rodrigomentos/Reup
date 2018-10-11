<?php

namespace App\Mapper;

use App\Models\Cliente;

class MapperCliente
{
    public static function mapRow($resulSet)
    {
        $cliente = new Cliente();
        
        try{
          
            $cliente->setId($resulSet->id);
            $cliente->setNombre($resulSet->nombre);
            $cliente->setDocumento($resulSet->documento);
            $cliente->setEstado($resulSet->estado);
            $cliente->setFechaCreacion($resulSet->created_at);
            $cliente->setFechaActualizacion($resulSet->updated_at);

            
        }catch(\Exception $e){

            throw $e;
            
        }finally{
           
            return $cliente;
        }
     

    }
}
