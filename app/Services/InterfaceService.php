<?php

namespace App\Services;
use App\Models\Model;
interface InterfaceService
{
    public function store(Model $model);

    public function update(Model $model);

    public function list($filter);

    public function delete($id);

    public function active($id);

    public function find(Model $model);
}
