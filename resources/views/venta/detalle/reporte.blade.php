<div id="listDetalleVentas">

    <table class="table table-producto table-condensed">
        <thead>
        <tr>
            <th>Codigo</th>
            <th>Descripción</th>
            <th>Cantidad</th>
            <th>P.Unitario</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
         <tr v-for='(detalleVenta, index) in detalleVentasList' :key="detalleVenta.id" v-on:click="clickList(detalleVenta)">
            <td :data-item="detalleVenta.id"> <input type="hidden" name="codigo[]" :value="index +1 ">  @{{detalleVenta.codigo}}  </td>
            <td> <input type="hidden" name="descripcion[]" :value="detalleVenta.descripcion"> @{{detalleVenta.descripcion}}  </td>
            <td> <input type="number" min="1" name="cantidad[]" :value="detalleVenta.cantidad" v-on:click="editDetalleVenta(detalleVenta,$event.target.value)" v-on:keyup="editDetalleVenta(detalleVenta,$event.target.value)" > </td>
            <td> <input type="hidden" name="precio[]" :value="detalleVenta.precio"> @{{detalleVenta.precio}} </td>
            <td> <input type="hidden" name="total[]" :value="detalleVenta.total"> @{{detalleVenta.total}}</td>
        </tr>
    
        </tbody>
        <tfoot>
            <td colspan="3" class="text-bold  "></td>
            <th class="text-bold  ">Monto Total:</th>
            <td >@{{montoTotal}}</td>
        </tfoot>
    </table>

</div>