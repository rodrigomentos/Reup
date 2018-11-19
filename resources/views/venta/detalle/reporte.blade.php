<div id="listDetalleVentas">

    <table class="table table-producto table-condensed table-bordered ">
        <thead >
        <tr >
            <th></th>
            <th>Codigo</th>
            <th>Descripción</th>
            <th >Cantidad</th>
            <th>P.Unitario</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
         <tr v-for='(detalleVenta, index) in detalleVentasList' :key="detalleVenta.id" >
            <th class="text-center"> <a style="cursor:pointer" v-on:click="deleteDetalleVenta(index)">X</a></th>
            <td > <input type="hidden" name="producto_id[]" :value="detalleVenta.producto_id"> <input type="hidden" name="codigo[]" :value="detalleVenta.codigo">  @{{detalleVenta.codigo}}  </td>
            <td width="50%"> <input type="hidden" name="descripcion[]" :value="detalleVenta.descripcion"> @{{detalleVenta.descripcion}}  </td>
            <td width="10%"> <input  type="number"  min="1" name="cantidad[]" :value="detalleVenta.cantidad" v-on:click="editDetalleVenta(detalleVenta,$event.target.value)" v-on:keyup="editDetalleVenta(detalleVenta,$event.target.value)" > </td>
            <td> <input type="hidden" name="precio[]" :value="detalleVenta.precio"> @{{detalleVenta.precio}} </td>
            <td width="10%"> <input type="hidden" name="total[]" :value="detalleVenta.total"> @{{detalleVenta.total}}</td>
        </tr>
    
        </tbody>
        <tfoot>

            <tr>
            <td rowspan="6" colspan="4">
              
            </td>
            <th>SubTotal:</th>
            <td  >@{{subTotal.toFixed(2)}}</td>
            </tr>
            <tr>
            <th >IGV:</th>
            <td >@{{igv.toFixed(2)+"%"}}</td>
            </tr>
            <tr>
            <th >Total IGV:</th>
            <td >@{{totalIGV.toFixed(2)}}</td>
            </tr>
            <tr>
            <th >Importe Total:</th>
            <td >@{{montoTotal.toFixed(2)}}</td>
            </tr>
            <tr>
            <th >Pago:</th>
            <td > <input  type="number"  min="1" name="pago" v-model="pago" v-on:click="getCambio()" v-on:keyup="getCambio()"> </td>
            </tr>
            <tr>
            <th >Cambio:</th>
            <td > @{{cambio.toFixed(2)}}</td>
            </tr>
        </tfoot>
    </table>

</div>