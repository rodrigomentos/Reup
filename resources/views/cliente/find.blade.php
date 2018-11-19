<div id="cliente" class="col-sm-4">
   
    {{Form::label('documento','DOC:',['class'=>'col-sm-2']) }}

    {{ Form::text('documento',null,['class'=>'col-sm-8 form-group'])}}

    
    <button type="button" id="findCliente" class="btn btn-primary btn-sm">
          <!--<span class="glyphicon glyphicon-search"></span> O- -->
          O-
        </button>

   
    {{ Form::text('nombre',null,['class'=>'col-sm-12 ','id'=>'nombre'])}}

    



</div>