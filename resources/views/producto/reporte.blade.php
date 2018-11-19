
            <div class="panel panel-default">
                <div class="panel-heading text-center">Productos

                  <div class="search-wrapper pull-right">
                       <a href="/registrar/producto">Nuevo Producto</a>
                           
                    </div>
                </div>

                <div class="panel-body">
                    
             

                    <div id="listProductos">
                    <div class="search-wrapper pull-right">
                        <input type="text" v-model="search" class="input-sm" placeholder="Buscar productos.."/>
                           
                    </div>
                    <table class="table table-producto table-condensed">
                        <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th v-show="action">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for='(producto, index) in filteredProductosList' :key="producto.id" v-on:click="clickList(producto)">
                            <td :data-item="producto.id"> @{{ index +1 }} </td>
                            <td> @{{ producto.nombre }} </td>
                            <td> @{{ producto.descripcion }} </td>
                            <td> @{{ producto.precio }} </td>
                            <td> @{{ producto.stock }} </td>
                            <td v-show="action"> <a :href="'/editar/producto/' + producto.id"> Editar </a> | <a v-on:click="deleteProducto(producto)"  class="text-danger">Eliminar </a> </td>
                        </tr>
                    
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
 


