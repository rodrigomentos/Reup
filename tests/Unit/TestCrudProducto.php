<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;

class TestCrudProducto extends TestCase
{
    /**
     * A basic test example.
     */
    public function testStoreProducto()
    {
        $productoController = new ProductoController();

        $request = new Request(['nombre' => 'arroz Saman 49 kg.',
                                'precio' => '130.00',
                                'stock' => 45,
                                'descripcion' =>'Promocion de un 20% todos los domingos'
                    ]);

        $producto =  $productoController->store($request);

        \Log::info( [$producto]);
        
        $this->assertTrue(true);
    }


    public function testUpdateProducto()
    {
        $productoController = new ProductoController();

        $request = new Request(['nombre' => 'arroz Saman 49 kg.',
                                'precio' => '135.00',
                                'stock' => 45,
                                'descripcion' =>'Promocion de un 20% todos los domingos',
                                'estado'=>1
                                 ]);
        $producto =  $productoController->update($request,1);

        \Log::info( [$producto]);
        
        $this->assertTrue(true);
    }

    public function testFindProducto()
    {
        $productoController = new ProductoController();


        $producto =  $productoController->show(1);

        \Log::info( [$producto]);
        
        $this->assertTrue(true);
    }


    public function testDeleteProducto()
    {
        $productoController = new ProductoController();


          $productoController->destroy(1);

      
        
        $this->assertTrue(true);
    }


    public function testActiveProducto()
    {
        $productoController = new ProductoController();


          $productoController->active(1);

      
        
        $this->assertTrue(true);
    }
}
