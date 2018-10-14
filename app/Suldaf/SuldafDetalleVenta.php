<?php

namespace App\Suldaf;
use App\Suldaf\interfaceSuldafDetalleVenta;
use App\Models\DetalleVenta;
use App\Repositories\DetalleVenta as RepositoryDetalleVenta;
use Illuminate\Database\QueryException;
use App\Mapper\MapperDetalleVenta;
use App\Mapper\MapperVenta;
use App\Mapper\MapperProducto;

class SuldafDetalleVenta implements interfaceSuldafDetalleVenta
{
    public function store(DetalleVenta $detalleVenta)
    {
        try{
           
            
            $itemDetalleVenta =  new RepositoryDetalleVenta();
            $itemDetalleVenta->id = 0;
            $itemDetalleVenta->codigo = $detalleVenta->getCodigo();
            $itemDetalleVenta->venta_id = $detalleVenta->getVenta()->getId();
            $itemDetalleVenta->producto_id = $detalleVenta->getProducto()->getId();
            $itemDetalleVenta->cantidad = $detalleVenta->getCantidad();
            $itemDetalleVenta->precio = $detalleVenta->getProducto()->getPrecio();
            $itemDetalleVenta->monto =  $detalleVenta->getProducto()->getPrecio() * $detalleVenta->getCantidad() ;
          //  $itemDetalleVenta->save();
            return $itemDetalleVenta;
          
          //  return MapperDetalleVenta::mapRow($itemDetalleVenta)->setVenta($detalleVenta->getVenta())->setProducto($detalleVenta->getProducto());

        }catch(\Exception $e){
            throw $e;
        }
     
       
    }

    public function update(DetalleVenta $detalleVenta)
    {
        try{
           
            $itemDetalleVenta = RepositoryDetalleVenta::find($detalleVenta->getId() );
            $itemDetalleVenta->codigo = $detalleVenta->getCodigo();
            $itemDetalleVenta->producto_id =$detalleVenta->getProducto()->getId();
            $itemDetalleVenta->cantidad = $detalleVenta->getCantidad();
            $itemDetalleVenta->precio = $detalleVenta->getProducto()->getPrecio();
            $itemDetalleVenta->monto = $detalleVenta->getMonto();
            $itemDetalleVenta->save();

            return MapperDetalleVenta::mapRow($itemDetalleVenta)->setProducto($detalleVenta->getProducto());

        }catch(QueryException $e){
            throw $e;
        }
     
    }

    public function list($ventaId)
    {
        try{

            $itemDetalleVenta = RepositoryDetalleVenta::info()->ByVentaId($ventaId)->get();

            return $itemDetalleVenta->map(function ($item, $key) {
                return MapperDetalleVenta::mapRow($item)
                ->setProducto(MapperProducto::mapRow($item->producto) );

            });
        }catch(QueryException $e){
            throw $e;
        }


    }

    public function find(DetalleVenta $detalleVenta){

        try{
           
            $itemDetalleVenta =  RepositoryDetalleVenta::info()->find($detalleVenta->getId() );
    
            
            return MapperDetalleVenta::mapRow($itemDetalleVenta)
                ->setProducto(MapperProducto::mapRow($itemDetalleVenta->producto) );
        }catch(QueryException $e){
            throw $e;
        }
     

    }
}