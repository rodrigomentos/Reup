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
                    @include('util.modal')
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
