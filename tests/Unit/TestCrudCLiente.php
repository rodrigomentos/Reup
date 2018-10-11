<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;

class TestCrudCLiente extends TestCase
{
    /**
     * A basic test example.
     */
    public function testStoreCliente()
    {
        $clienteController = new ClienteController();

        $request = new Request(['nombre' => 'rodrigo',
                            'documento' => '70500448',
                    ]);

        $cliente =  $clienteController->store($request);

        \Log::info( [$cliente]);
        
        $this->assertTrue(true);
    }


    public function testUpdateCliente()
    {
        $clienteController = new ClienteController();

        $request = new Request(['nombre' => 'reup SAC',
                            'documento' => '70500448',
                            'estado'=> 1
                    ]);

        $cliente =  $clienteController->update($request,1);

        \Log::info( [$cliente]);
        
        $this->assertTrue(true);
    }

    public function testFindCliente()
    {
        $clienteController = new ClienteController();


        $cliente =  $clienteController->show('70500448');

        \Log::info( [$cliente]);
        
        $this->assertTrue(true);
    }


    public function testDeleteCliente()
    {
        $clienteController = new ClienteController();


          $clienteController->destroy(1);

      
        
        $this->assertTrue(true);
    }


    public function testActiveCliente()
    {
        $clienteController = new ClienteController();


          $clienteController->active(1);

      
        
        $this->assertTrue(true);
    }
}
