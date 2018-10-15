<?php

namespace App\Services;

use App\Suldaf\InterfaceSuldaf;
use Illuminate\Database\QueryException;
use App\Models\Model;

class BaseService implements InterfaceService
{
    private $suldaf;

    public function __construct( $interfaceSuldaf)
    {
        $this->suldaf = $interfaceSuldaf;
    }

    public function store(Model $object)
    {
        try {
            return $this->suldaf->store($object);
        } catch (QueryException $e) {
            throw $e;
        }
    }

    public function update(Model $object)
    {
        try {
            return $this->suldaf->update($object);
        } catch (QueryException $e) {
            throw $e;
        }
    }

    public function list($filter)
    {
        try {
            return $this->suldaf->list($filter);
        } catch (QueryException $e) {
            throw $e;
        }
    }

    public function delete($id)
    {
        try {
            return $this->suldaf->delete($id);
        } catch (QueryException $e) {
            throw $e;
        }
    }

    public function active($id)
    {
        try {
            return $this->suldaf->active($id);
        } catch (QueryException $e) {
            throw $e;
        }
    }

    public function find(Model $object)
    {
        try {
            return $this->suldaf->find($object);
        } catch (QueryException $e) {
            throw $e;
        }
    }

    public function findLasted(Model $object)
    {
        try {
            return $this->suldaf->findLasted($object);
        } catch (QueryException $e) {
            throw $e;
        }
    }
}
