<?php

namespace App\Models;

use App\Models\Model;

class Venta extends Model
{

    private $comprobante;
    private $cliente;
    private $monto;
    



    /**
     * Get the value of comprobante
     */ 
    public function getComprobante()
    {
        return $this->comprobante;
    }

    /**
     * Set the value of comprobante
     *
     * @return  self
     */ 
    public function setComprobante($comprobante)
    {
        $this->comprobante = $comprobante;

        return $this;
    }

    /**
     * Get the value of cliente
     */ 
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set the value of cliente
     *
     * @return  self
     */ 
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get the value of monto
     */ 
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set the value of monto
     *
     * @return  self
     */ 
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }
}