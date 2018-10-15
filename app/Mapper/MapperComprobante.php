<?php

namespace App\Mapper;

use App\Models\Comprobante;

class MapperComprobante
{
    
    public static function mapRow($resulSet)
    {
        $comprobante = new Comprobante();
        
        try{
          
            $comprobante->setId($resulSet->id);
            $comprobante->setTipo($resulSet->tipo);
            $comprobante->setSerie($resulSet->serie);
            $comprobante->setNumero($resulSet->numero);

            
        }catch(\Exception $e){

            throw $e;
            
        }finally{
           
            return $comprobante;
        }
     

    }
}