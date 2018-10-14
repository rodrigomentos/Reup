<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use App\Http\Controllers\VentaController;

class TestCrudVenta extends TestCase
{
       /**
     * A basic test example.
     */
    public function testStoreVenta()
    {
        $ventController = new VentaController();

        $request = new Request(['comprobante_id' => '1',
                                'documento' => '70500448',
                                'monto'=>'200'
                    ]);

        $venta =  $ventController->store($request);

        \Log::info( [$venta]);
        
        $this->assertTrue(true);
    }


    public function testFindVenta()
    {
        $ventController = new VentaController();


        $venta =  $ventController->show(1);

        \Log::info( [$venta]);
        
        $this->assertTrue(true);
    }
}
