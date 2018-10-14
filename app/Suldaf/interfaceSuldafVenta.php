<?php

namespace App\Suldaf;
use App\Models\Venta;

interface interfaceSuldafVenta
{
    public function store(Venta $venta);

    public function update(Venta $venta);

    public function list($filter);

    public function find(Venta $venta);
}