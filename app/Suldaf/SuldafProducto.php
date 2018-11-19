<?php

namespace App\Suldaf;
use App\Suldaf\interfaceSuldafProducto;
use App\Repositories\Producto as RepositoryProducto;
use App\Models\Producto;
use App\Mapper\MapperProducto;
use Illuminate\Database\QueryException;

class SuldafProducto implements interfaceSuldafProducto
{
    public function store(Producto $producto)
    {
        try {

            $itemProducto = new RepositoryProducto();
            $itemProducto->nombre = $producto->getNombre();
            $itemProducto->codigo = $producto->getCodigo();
            $itemProducto->precio = $producto->getPrecio();
            $itemProducto->stock = $producto->getStock();
            $itemProducto->descripcion = $producto->getDescripcion();
            $itemProducto->save();

            return  MapperProducto::mapRow($itemProducto);
        } catch (QueryException $e) {
            throw $e;
        }
    }

    public function update(Producto $producto)
    {
        try {
            
            $itemProducto = RepositoryProducto::find($producto->getId() );
            $itemProducto->nombre = $producto->getNombre();
            $itemProducto->codigo = $producto->getCodigo();
            $itemProducto->precio = $producto->getPrecio();
            $itemProducto->stock = $producto->getStock();
            $itemProducto->descripcion = $producto->getDescripcion();
            $itemProducto->estado = $producto->getEstado();
            $itemProducto->save();

            return  MapperProducto::mapRow($itemProducto);
        } catch (QueryException $e) {
            throw $e;
        }
    }

    public function list($filter = [])
    {
        try {
             $itemProducto = RepositoryProducto::activo()->orderBy('id', 'desc')->get();

            return $itemProducto->map(function($item, $key) {
                return MapperProducto::mapRow($item)->toArray();
            });
        } catch (QueryException $e) {
            throw $e;
        }
    }

    public function delete($id)
    {
        $producto = new Producto();
        $producto->setId($id);
        $producto->setEstado(0);

        static::estado($producto);
    }

    public function active($id)
    {
        $producto = new Producto();
        $producto->setId($id);
        $producto->setEstado(1);

        static::estado($producto);
    }

    public function find(Producto $producto)
    {
        try {
            
            $itemProducto = RepositoryProducto::ById($producto->getId())->ByCodigo($producto->getCodigo())->first();

            if(is_array($producto->getId())){
                return $itemProducto->map(function ($item, $key) {
                    return MapperProducto::mapRow($item);
                });
            }
                
          
            return  MapperProducto::mapRow($itemProducto);

        } catch (QueryException $e) {
            
            throw $e;
        }
    }

    public static function estado(Producto $producto)
    {
        try {
            
            $itemProducto = RepositoryProducto::find($producto->getId() );
            $itemProducto->estado = $producto->getEstado();
            $itemProducto->save();

            return  MapperProducto::mapRow($itemProducto);
        } catch (QueryException $e) {
            throw $e;
        }
    }
}