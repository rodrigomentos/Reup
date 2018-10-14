<?php

namespace App\Services;

use App\Suldaf\SuldafCliente;
use App\Services\BaseService;
use App\Suldaf\SuldafProdcuto;
use App\Suldaf\SuldafComprobante;

class Service 
{

    public static function suldaf($builderSuldaf)
    {
        $builderSuldaf = "\App\Suldaf\\".$builderSuldaf;

        return new BaseService(new $builderSuldaf());
    }
    public static function cliente()
    {
        return new BaseService(new SuldafCliente());
    }
    
    public static function producto()
    {
        return new BaseService(new SuldafProdcuto());
    }
    
    public static function comprobante()
    {
        return new BaseService(new SuldafComprobante());
    }   

}
