<div id="findLastComprobante" class="col-sm-4">
   
    {{Form::label('tipo_comprobnate','Tipo:',['class'=>'col-sm-3']) }}
    <div class="col-sm-9">
    {{Form::select('tipo_comprobante',config('comprobante.tipo'),[],['id'=>'tipo_comprobante','class'=>'form-control col-sm-12 input-sm form-group'] )}}
    </div>
   

    
    {{Form::label('serie','Serie:',['class'=>'col-sm-3']) }}
    {{ Form::text('serie',null,['class'=>'col-sm-3'])}}
    {{Form::label('numero','Nro:',['class'=>'col-sm-3']) }}
    {{ Form::text('numero',null,['class'=>'col-sm-3'])}}

    
  


</div>

