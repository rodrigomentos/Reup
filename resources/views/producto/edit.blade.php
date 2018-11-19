@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Editar Producto</div>

                <div class="panel-body" id="form-producto">
                    
                    @include('producto.form')
          
                </div>
            </div>
        </div>
    </div>
</div>


<script>

$(document).ready(()=>{

    
   let producto =  new Producto('{{$producto->getId()}}',
                            '{{$producto->getNombre()}}',
                            '{{$producto->getCodigo()}}',
                            '{{$producto->getPrecio()}}',
                            '{{$producto->getStock()}}',
                            '{{$producto->getEstado()}}',
                            '{{$producto->getDescripcion()}}');
          
    formProducto.setProducto(producto)
   
  
})

</script>

@endsection
