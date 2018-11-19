@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12  col-sm-12">
    @include('producto.reporte')
    </div>
    </div>
</div>

<script>

$(document).ready(()=>{

    productos.action = true;

})

</script>
@endsection
