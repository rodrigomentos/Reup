<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Service;
use App\Models\DetalleVenta;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use App\Models\Venta;
class DetalleVentaController extends Controller
{
    private $service;
    private $venta;
    private $producto;

    public function __construct()
    {
        $this->service = Service::suldaf('SuldafDetalleVenta');
        $this->producto = new ProductoController();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = $this->producto->show($request->get('producto_id'));
        $venta = new Venta();
        $venta->setId($request->get('venta_id'));
        $detalleVenta = new DetalleVenta();
        $detalleVenta->setCodigo($request->get('codigo'));
        $detalleVenta->setVenta($venta);
        $detalleVenta->setProducto($producto);
        $detalleVenta->setCantidad($request->get('cantidad'));
        
      //  return $detalleVenta;

        return $this->service->store($detalleVenta);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
