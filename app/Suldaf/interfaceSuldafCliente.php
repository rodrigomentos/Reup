<?php

namespace App\Suldaf;

use App\Models\Cliente;


interface interfaceSuldafCliente
{
    public function store(Cliente $cliente);

    public function update(Cliente $cliente);

    public function list($filter);

    public function delete($id);

    public function active($id);

    public function find(Cliente $cliente);
}