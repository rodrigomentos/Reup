<div id="producto" class="col-sm-4">
   
    {{Form::label('documento','Buscar Producto:',['class'=>'col-sm-6']) }}

    
    <div class="form-group">
        <div id="app-modal">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalProducts" >
            <!--<span class="glyphicon glyphicon-search"></span> O- -->
            O-
            </button>
      
        </div>
    </div>
   

    {{Form::label('codigoBarra','Codigo de Barra:',['class'=>'col-sm-5']) }}

        <input type="text" name="codigoBarra" class="col-sm-7" id="codigoBarra" v-on:click="getProduct()" v-on:keyup.13="getProduct()" v-model='codigo'>
 

</div>
