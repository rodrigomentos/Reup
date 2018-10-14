<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\DetalleVentaController;
use Illuminate\Http\Request;

class TestCrudDetalleVenta extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStoreDetalleVenta()
    {
        $detalleVentController = new DetalleVentaController();

        $request = new Request(['venta_id' => '1',
                                'codigo' => 1,
                                'producto_id' => '1',
                                'cantidad'=>2
                    ]);

        $detalleVenta =  $detalleVentController->store($request);

        \Log::info( [$detalleVenta]);
        
        $this->assertTrue(true);
    }
}