<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Service;
use App\Models\Cliente;

class ClienteController extends Controller
{
    private $service;

    public function __construct()
    {
        $this->service = Service::suldaf('SuldafCliente');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->setNombre($request->get('nombre'));
        $cliente->setDocumento($request->get('documento'));
        $cliente->setCorreo($request->get('correo'));
       
       return $this->service->store($cliente);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($documento)
    {
        $cliente = new Cliente();
        $cliente->setDocumento($documento);
        $cliente = $this->service->find($cliente);
       
       return $cliente->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = new Cliente();
        $cliente->setId($id);
        $cliente->setNombre($request->get('nombre'));
        $cliente->setDocumento($request->get('documento'));
        $cliente->setCorreo($request->get('correo'));
        $cliente->setEstado($request->get('estado'));

       
       return $this->service->update($cliente);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->service->delete($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function active($id)
    {
        return $this->service->active($id);
    }
}
