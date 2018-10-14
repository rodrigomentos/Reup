<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Service;
use App\Models\Producto;

class ProductoController extends Controller
{
    private $service;

    public function __construct()
    {
        $this->service = Service::suldaf('SuldafProducto');
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
         $producto = new Producto();
         $producto->setNombre($request->get('nombre'));
         $producto->setPrecio($request->get('precio'));
         $producto->setStock($request->get('stock'));
         $producto->setDescripcion($request->get('descripcion'));

        return  $this->service->store($producto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = new Producto();
        $producto->setId($id);

        return $this->service->find($producto);
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
        $producto = new Producto();
        $producto->setId($id);
        $producto->setNombre($request->get('nombre'));
        $producto->setPrecio($request->get('precio'));
        $producto->setStock($request->get('stock'));
        $producto->setDescripcion($request->get('descripcion'));
        $producto->setEstado($request->get('estado'));
       return  $this->service->update($producto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->service->delete($id);
    }

    public function active($id)
    {
        return $this->service->active($id);
    }
}
