<?php

namespace App\Suldaf;

use App\Models\Producto;


interface interfaceSuldafProducto
{
    public function store(Producto $producto);

    public function update(Producto $producto);

    public function list($filter);

    public function delete($id);

    public function active($id);

    public function find(Producto $producto);
}