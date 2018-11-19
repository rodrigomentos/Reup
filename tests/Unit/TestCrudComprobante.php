<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\ComprobanteController;
use Illuminate\Http\Request;


class TestCrudComprobante extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStoreComprobante()
    {
       $comprobanteController = new ComprobanteController();

       $request = new Request(['tipo' => '2',
                               'serie' => '1',
                               'numero'=> '1'
        ]);

        $comprobante =  $comprobanteController->store($request);

        \Log::info( [$comprobante]);

        $this->assertTrue(true);
    }
}
