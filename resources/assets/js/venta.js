if(document.getElementById("listDetalleVentas")){
    var detalleVentas = new Vue({
        el: '#listDetalleVentas',
        data: {
            codigo:0,
            igv:0,
            totalIGV:0,
            withIGV:true,
            subTotal:0,
            montoTotal:0,
            detalleVentas:[],
        },
        computed: {
            detalleVentasList() {
                
                var _detalleVentas = [];
                this.subTotal = 0
                this.codigo = 0
                for (var i=0, detalleVentas; detalleVentas = this.detalleVentas[i]; i++){
                     this.codigo++
                     detalleVentas.total =  detalleVentas.cantidad * detalleVentas.precio;
                     detalleVentas.codigo = this.setCodigo(this.codigo)
                     this.subTotal+= detalleVentas.total
                     
                     _detalleVentas.push(detalleVentas);
                }
                this.setIGV();
                this.setMontoTotal()
                return _detalleVentas;
            }
          },
        methods: {
            setDetalleVentas: function(product){
                
                

                let producto = {
                    codigo: this.setCodigo(this.codigo),
                    producto_id:product.id,   
                    descripcion:product.nombre,
                    cantidad:"1",
                    precio:product.precio,
                    total:product.precio ,
                            
                } 
               
                this.detalleVentas.push(producto)

            },
            setMontoTotal()
            {
                return this.montoTotal = this.subTotal+this.totalIGV
            },
            applyIGV()
            {
                this.withIGV = (document.querySelector("#tipo_comprobante").value == 1)?true:false;
                this.setIGV()
            },
            setIGV(){
               
                if(this.withIGV){
                    this.igv = 0.18
                    this.totalIGV = this.subTotal * this.igv
                }else{
                    this.igv = 0
                    this.totalIGV = 0
                }
            },
            setCodigo: function (codigo) {
                if(codigo.toString().length === 1)
                    return "00"+codigo
                    return "0"+codigo
               // console.log(detalleVentas);
            },
            editDetalleVenta: function(detalleVenta,cantidad=1){
                if(!cantidad || cantidad==false || cantidad instanceof String)
                    cantidad = 1;
                detalleVenta.cantidad = cantidad

            },
            deleteDetalleVenta: function(detalleVenta){
                this.detalleVentas.splice(detalleVenta, 1);
               // this.detalleVentas.slice(this.detalleVentas.indexOf(detalleVenta), 1)
            }
            
        },
        
    })

    
}
