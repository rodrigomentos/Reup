<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Productos</div>

                <div class="panel-body">
                    
             
    
                    <div id="listProductos">
                    <div class="search-wrapper pull-right">
                        <input type="text" v-model="search" placeholder="Buscar productos.."/>
                           
                    </div>
                    <table class="table table-producto table-condensed">
                        <thead>
                        <tr>
                            <th>N°</th>
                            <th>Descipción</th>
                            <th>Precio</th>
                            <th>Stock</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for='(producto, index) in filteredProductosList' :key="producto.id" v-on:click="clickList(producto)">
                            <td :data-item="producto.id"> @{{ index +1 }} </td>
                            <td> @{{ producto.nombre }} </td>
                            <td> @{{ producto.precio }} </td>
                            <td> @{{ producto.stock }} </td>
                        </tr>
                    
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.table-producto tbody tr:hover {
    background-color: #CCE7E7;
}
</style>
