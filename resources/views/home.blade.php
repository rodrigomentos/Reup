@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Factura Electonica</div>

                <div class="panel-body">
                    
                    @include('comprobante.find')
                    @include('cliente.find')
                    @include('producto.find')
                    @include('producto.modal')
                    
                    <hr class="col-xs-12">

                     @include('venta.detalle.reporte')

                     <div id="createdVenta">
                         <button class="btn btn-primary pull-right" v-on:click="sendVenta()" > Imprimir y Guardar</button>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
