<?php

namespace App\Suldaf;

use App\Models\Comprobante;
use App\Suldaf\interfaceSuldafComprobante;
use Illuminate\Database\QueryException;
use App\Repositories\Comprobante as RepositoryComprbante;
use App\Mapper\MapperComprobante;

class SuldafComprobante implements interfaceSuldafComprobante
{
    public function store(Comprobante $comprobante)
    {
        $itemComprobante = new RepositoryComprbante();
        $itemComprobante->tipo = $comprobante->getTipo();
        $itemComprobante->serie = $comprobante->getSerie();
        $itemComprobante->numero = $comprobante->getNumero();

        try {

         
            $itemComprobante->save();

           
        } catch (QueryException $e) {
            
            $itemComprobante->numero =  $this->find($comprobante)->getNumero()+1;
            $itemComprobante->save();
        }
        
        return  MapperComprobante::mapRow($itemComprobante);
    }



    public function find(Comprobante $comprobante)
    {
        try {

            $itemComprobante = RepositoryComprbante::byTipo($comprobante->getTipo())->lasted()->first();
        

            return  MapperComprobante::mapRow($itemComprobante);
            
        } catch (QueryException $e) {
           
            throw $e;
        }
    }
}