if(document.getElementById("listDetalleVentas")){
    var detalleVentas = new Vue({
        el: '#listDetalleVentas',
        data: {
            codigo:0,
            montoTotal:0,
            detalleVentas:[],
        },
        computed: {
            detalleVentasList() {
                
                var _detalleVentas = [];
                this.montoTotal = 0
                
                for (var i=0, detalleVentas; detalleVentas = this.detalleVentas[i]; i++){
                   
                     detalleVentas.total =  detalleVentas.cantidad * detalleVentas.precio;
                     this.montoTotal+= detalleVentas.total
                     detalleVentas.total =  detalleVentas.total.toFixed(2)
                     _detalleVentas.push(detalleVentas);
                }
                this.montoTotal=this.montoTotal.toFixed(2)
                return _detalleVentas;
            }
          },
        methods: {
            setDetalleVentas: function(product){
                
                this.codigo++

                let producto = {
                    codigo:"00"+ this.codigo,
                    producto_id:product.id,   
                    descripcion:product.nombre,
                    cantidad:"1",
                    precio:product.precio.toFixed(2),
                    total:product.precio ,
                            
                } 
               
                this.detalleVentas.push(producto)

            },

            clickList: function (detalleVentas) {
               // console.log(detalleVentas);
            },
            editDetalleVenta: function(detalleVenta,cantidad=1){
                if(!cantidad || cantidad==false || cantidad instanceof String)
                    cantidad = 1;
                detalleVenta.cantidad = cantidad

            }
            
            
        },
        
    })

    
}
