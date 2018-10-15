<?php

namespace App\Models;

use App\Models\Model;

class Comprobante extends Model
{

    
    private $tipo;
    private $serie;
    private $numero;



    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of serie
     */ 
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set the value of serie
     *
     * @return  self
     */ 
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function toArray()
    {
        return [ 
            'id'=> $this->getId(),
            'tipo'=> $this->getTipo(),
            'serie'=> $this->getSerie(),
            'numero'=> $this->getNumero(),
         ];
    }
}