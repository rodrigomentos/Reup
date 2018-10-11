<?php

namespace App\Models;
use App\Models\Model;

class Cliente extends Model
{
    
    private $nombre;
    private $documento;
    private $correo;

    /**
     * Get the value of nombre.
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre.
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of documento.
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set the value of documento.
     *
     * @return self
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get the value of correo.
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set the value of correo.
     *
     * @return self
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }


}
