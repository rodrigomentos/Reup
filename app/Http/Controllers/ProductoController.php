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
        return view('producto.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,['nombre'=>'required',
                                 'codigo'=>'required|unique:productos',
                                 'precio'=>'required',
                                 'stock'=>'required',
                                 'descripcion'=>'required',
                                 'estado'=>'required',
        ]);

         $producto = new Producto();
         $producto->setNombre($request->get('nombre'));
         $producto->setCodigo($request->get('codigo'));
         $producto->setPrecio($request->get('precio'));
         $producto->setStock($request->get('stock'));
         $producto->setEstado($request->get('estado'));
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
        $producto = $this->show($id);
        
        if($producto->getId()){

            return view('producto.edit',compact('producto'));
        }

        return redirect('/registrar/producto');
        
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
        
        $this->validate($request,['nombre'=>'required',
                                'codigo'=>'required',
                                'precio'=>'required',
                                'stock'=>'required',
                                'descripcion'=>'required',
                                'estado'=>'required',
                        ]);
        if($request->get('lastCodigo') != $request->get('codigo') ){
           
            $this->validate($request,['codigo'=>'required|unique:productos']);
        }

        $producto = new Producto();
        $producto->setId($id);
        $producto->setNombre($request->get('nombre'));
        $producto->setCodigo($request->get('codigo'));
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

    public function list(Request $request)
    {
        return $this->service->list($request);
    }

    public function find($codigo)
    {
        $producto = new Producto();
        $producto->setCodigo($codigo);

        return $this->service->find($producto)->toArray();
    }
}
