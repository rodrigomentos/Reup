<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Service;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ComprobanteController;
use App\Models\Venta;
use Illuminate\Database\QueryException;
class VentaController extends Controller
{
    private $service;
    private $comprobante;
    private $cliente;
    public function __construct()
    {
        $this->service = Service::suldaf('SuldafVenta');
        $this->comprobante = new ComprobanteController();
        $this->cliente = new ClienteController();
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
        
        $comprobante = $this->comprobante->show($request->comprobante_id);
        $cliente = $this->cliente->show($request->documento);

        $venta = new Venta();
        $venta->setComprobante($comprobante);
        $venta->setCliente($cliente);
        $venta->setMonto($request->monto);

        try{
          
            return $this->service->store($venta);
            
        }catch(QueryException $e){

            if(strpos($e->getMessage(),"Integrity constraint violation: 1062 Duplicate entry '".$comprobante->getId()."' for key 'IdComprobante_Ventas'")){
               $comprobante = $this->comprobante->service->store($comprobante);
               $venta->setComprobante($comprobante);
                try{
                    return $this->service->store($venta);
                }catch(QueryException $e){
                   
                    throw $e;
                   
                }
            }
           
        }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $venta = new Venta();
        $venta->setId($id);

        return $this->service->find($venta);
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
