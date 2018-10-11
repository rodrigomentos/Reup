<?php

namespace App\Suldaf;
use App\Models\Model;

interface InterfaceSuldaf
{
    public function store(Model $model);

    public function update(Model $model);

    public function list($filter);

    public function delete($id);

    public function active($id);

    public function find(Model $model);
}
