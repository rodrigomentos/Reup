<?php

namespace App\Suldaf;

use App\Suldaf\interfaceSuldafVenta;
use App\Models\Venta;
use Illuminate\Database\QueryException;
use App\Repositories\Venta as RepositoryVenta;
use App\Mapper\MapperVenta;
use App\Mapper\MapperCliente;
use App\Mapper\MapperComprobante;

class SuldafVenta implements interfaceSuldafVenta
{
    public function store(Venta $venta){
        try {

           $itemVenta = new RepositoryVenta();
           $itemVenta->comprobante_id = $venta->getComprobante()->getId();
           $itemVenta->cliente_id = $venta->getCliente()->getId();
           $itemVenta->monto = $venta->getMonto();
           $itemVenta->save();

            return  MapperVenta::mapRow($itemVenta)->setCliente($venta->getCliente())->setComprobante($venta->getComprobante() );

        } catch (QueryException $e) {
            throw $e;
        }
    }

    public function update(Venta $venta)
    {

        try {

            $itemVenta = RepositoryVenta::find($venta->getId());
            $itemVenta->monto = $venta->getMonto();
            $itemVenta->save();
 
             return  MapperVenta::mapRow($itemVenta);
 
         } catch (QueryException $e) {
             throw $e;
         }

    }

    public function list($filter = [])
    {
        try {
            $itemVenta = RepositoryProducto::info()->limit(50)->orderBy('id', 'desc')->all();

            return $itemVenta->map(function ($item, $key) {
                return MapperVenta::mapRow($item)->setCliente(MapperCliente::mapRow($item->cliente))
                ->setComprobante(MapperComprobante::mapRow($item->comprobante));

            });
        } catch (QueryException $e) {
            throw $e;
        }
    }



    public function find(Venta $venta)
    {
        try {

            $itemVenta = RepositoryVenta::info()->find($venta->getId());
     
 
             return  MapperVenta::mapRow($itemVenta)
                    ->setCliente(MapperCliente::mapRow($itemVenta->cliente))
                    ->setComprobante(MapperComprobante::mapRow($itemVenta->comprobante));
 
         } catch (QueryException $e) {
             throw $e;
         }

    }
}