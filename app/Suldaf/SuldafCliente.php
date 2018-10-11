<?php

namespace App\Suldaf;

use App\Repositories\Cliente as RepositoryCliente;
use App\Models\Cliente;
use Illuminate\Database\QueryException;
use App\Mapper\MapperCliente;

class SuldafCliente implements interfaceSuldafCliente
{
    public function store(Cliente $cliente)
    {
        try {
            $itemCliente = new RepositoryCliente();
            $itemCliente->documento = $cliente->getDocumento();
            $itemCliente->nombre = $cliente->getNombre();
            $itemCliente->correo = $cliente->getCorreo();
            $itemCliente->save();

            return  MapperCliente::mapRow($itemCliente);
        } catch (QueryException $e) {
            throw $e;
        }
    }

    public function update(Cliente $cliente)
    {
        try {
            $itemCliente = RepositoryCliente::find($cliente->getId());
            $itemCliente->documento = $cliente->getDocumento();
            $itemCliente->nombre = $cliente->getNombre();
            $itemCliente->correo = $cliente->getCorreo();
            $itemCliente->estado = $cliente->getEstado();
            $itemCliente->save();

            return  MapperCliente::mapRow($itemCliente);
        } catch (QueryException $e) {
            throw $e;
        }
    }

    public function list($filter = [])
    {
        try {
            $itemCliente = RepositoryCliente::activo()->limit(50)->orderBy('id', 'desc')->all();

            return $itemCliente->map(function ($item, $key) {
                return MapperCliente::mapRow($item);
            });
        } catch (QueryException $e) {
            throw $e;
        }
    }

    public function delete($clienteId)
    {
        $cliente = new Cliente();
        $cliente->setId($clienteId);
        $cliente->setEstado(0);

        static::estado($cliente);
    }

    public function active($clienteId)
    {
        $cliente = new Cliente();
        $cliente->setId($clienteId);
        $cliente->setEstado(1);

        static::estado($cliente);
    }

    public function find(Cliente $cliente)
    {
        $itemCliente = RepositoryCliente::byDocumento($cliente->getDocumento())->first();

      
        return MapperCliente::mapRow($itemCliente);
    }

    public function estado(Cliente $cliente)
    {
        try {
            $itemCliente = RepositoryCliente::find($cliente->getId());
            $itemCliente->estado = $cliente->getEstado();
            $itemCliente->save();
        } catch (QueryException $e) {
            throw $e;
        }
    }
}
