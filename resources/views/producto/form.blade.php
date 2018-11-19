<form class="form-horizontal " method="POST" action="">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="nombre" class="col-md-4 control-label">Nombre</label>

            <div class="col-md-6">
                <input id="nombre" type="nombre" class="form-control" name="nombre"  v-model="producto.nombre" required>
            </div>
        </div>
        <div class="form-group">
            <label for="codigo" class="col-md-4 control-label">Código Barra</label>

            <div class="col-md-6">
                <input id="codigo" type="codigo" class="form-control" name="codigo"  v-model="producto.codigo" required>
            </div>
        </div>



        <div class="form-group">
            <label for="precio" class="col-md-4 control-label">Precio</label>

            <div class="col-md-3">
                <input id="precio" type="precio" class="form-control" name="precio"  v-model="producto.precio" required>
            </div>

                <label for="stock" class="col-md-1 control-label">Stock</label>

                <div class="col-md-2">
                    <input id="stock" type="number"  min="1"  class="form-control" name="stock"  v-model="producto.stock" required>
                </div>
        </div>

        <div class="form-group">
        <label for="estado" class="col-md-4 control-label">Activo</label>
            <div class="radio radio-inline">
                <label ><input id="activo" type="radio" name="estado"  value='1' v-model="producto.estado" checked>Si</label>
            
                <label ><input id="inactivo" type="radio" name="estado"  value='0' v-model="producto.estado" >No</label>
            </div>
        </div>

        <div class="form-group">
            <label for="descripcion" class="col-md-4 control-label">Descripción</label>

            <div class="col-md-6">
            <textarea class="form-control" rows="5" id="descripcion" name="descripcion"  v-model="producto.descripcion" required></textarea>
                
            </div>
        </div>

        <div class="form-group">        
            <div class="col-sm-offset-4 col-sm-10">
                <a id="storeProducto" v-on:click="sendProducto()"  class="btn btn-primary btn-sm">Enviar</a>
            </div>
        </div>

</form>