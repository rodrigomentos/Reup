<div id="producto" class="col-sm-3">
   
    {{Form::label('documento','Buscar Producto:',['class'=>'col-sm-9']) }}

    

    <div class="form-group">
        <div id="app-modal">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalProducts" >
            <!--<span class="glyphicon glyphicon-search"></span> O- -->
            O-
            </button>
      
        </div>
    </div>
   
    {{ Form::text('nombre_producto',null,['class'=>'col-sm-12 ','id'=>'nombre_producto'])}}

    



</div>
