<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model as ModelEloquent; 
class Model extends ModelEloquent
{
    private $id;
    private $estado;
    private $fechaCreacion;
    private $fechaActualizacion;

    /**
     * Get the value of id.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    
     /**
     * Get the value of estado.
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado.
     *
     * @return self
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }



    /**
     * Get the value of fechaCreacion.
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set the value of fechaCreacion.
     *
     * @return self
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get the value of fechaActualizacion.
     */
    public function getFechaActualizacion()
    {
        return $this->fechaActualizacion;
    }

    /**
     * Set the value of fechaActualizacion.
     *
     * @return self
     */
    public function setFechaActualizacion($fechaActualizacion)
    {
        $this->fechaActualizacion = $fechaActualizacion;

        return $this;
    }
}