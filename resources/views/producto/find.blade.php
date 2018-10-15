<div id="producto" class="col-sm-3">
   
    {{Form::label('documento','Buscar Producto:',['class'=>'col-sm-9']) }}

    

    <div class="form-group">
        <div id="app-modal">
            <button type="button" id="show-modal" @click="showModal = true" class="btn btn-primary btn-sm ">
            <!--<span class="glyphicon glyphicon-search"></span> O- -->
            O-
            </button>
            <modal v-if="showModal" @close="showModal = false">
            <!--
            you can use custom content here to overwrite
            default content
            -->
            <h3 slot="header">custom header</h3>
        </div>
    </div>
   
    {{ Form::text('nombre_producto',null,['class'=>'col-sm-12 ','id'=>'nombre_producto'])}}

    



</div>