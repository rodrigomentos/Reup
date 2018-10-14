<?php

namespace App\Suldaf;

use App\Models\DetalleVenta;

interface interfaceSuldafDetalleVenta
{
    public function store(DetalleVenta $detalleVenta);

    public function update(DetalleVenta $detalleVenta);

    public function list($filter);

    public function find(DetalleVenta $detalleVenta);
}