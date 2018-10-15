<?php

namespace App\Suldaf;
use App\Models\Comprobante;

interface interfaceSuldafComprobante
{
    public function store(Comprobante $comprobante);

    public function find(Comprobante $comprobante);

    public function findLasted(Comprobante $comprobante);
    
}