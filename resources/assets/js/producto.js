class Producto
{
    constructor(id,nombre,codigo,precio,stock,estado,descripcion) {
        this.id = id
        this.nombre = nombre
        this.codigo = codigo
        this.precio = precio
        this.stock = stock
        this.estado = estado
        this.descripcion = descripcion
        this.lastCodigo = codigo
    }

    
}


if(document.getElementById("listProductos")){
    var productos = new Vue({
        el: '#listProductos',
        created: function(){
            this.getProductos();
        },
        data: {
            search: '',
            productos:[],
            action:false,
        },
        methods: {
            getProductos: function(){
                var urlProductos = '/api/productos'

                axios.get(urlProductos).then(response =>{
                    
    
                    this.productos = response.data
                    
                   
                })
            },

            clickList: function (product) {

                if(document.getElementById("listDetalleVentas")){
                    detalleVentas.setDetalleVentas(product)
                }
                
            },
            getProducto: function(codigo){
                if(codigo == ""){
                    return false;
                }
                var urlFindProducto = '/api/find/producto/'+codigo

                axios.get(urlFindProducto).then(response =>{

                    if(!response.data.id){
                        notify.show('No se encontró el producto.','danger')
                        return false;
                    }
                      detalleVentas.setDetalleVentas(response.data)
                    notify.show('Producto encontrado','success')
                    
                   
                    
                })
            },
            deleteProducto:function(product){

                axios.post('/eliminar/producto/'+product.id).then(response =>{

                    notify.show('Producto eliminado con éxito.','success')


                })
                this.getProductos()
            }
       
            
        },
        computed: {
            filteredProductosList() {
              return this.productos.filter(post => {
                return post.nombre.toLowerCase().includes(this.search.toLowerCase())
              })
            }
          }
    })


    document.querySelector('#codigoBarra').addEventListener("click",()=>{

        let codigo = document.querySelector("#codigoBarra")

        productos.getProducto(codigo.value)

        codigo.value = '';
    

    })

    
}

if(document.getElementById("producto")){
    var producto = new Vue({
        el: '#producto',
        created: function(){
            this.getProduct();
        },
        data: {
           codigo:'',
        },
        methods: {
            getProduct: function(){
                if(this.codigo == ""){
                    return false;
                }
                productos.getProducto(this.codigo);
                this.codigo = ''
            },

  
            
        },
        computed: {
      
          }
    })




    
}



if(document.getElementById("form-producto")){
    var formProducto = new Vue({
        el: '#form-producto',
        created: function(){
            this.getProducto();
        },
        data: {
            producto: new Producto('','','','','',1,''),

           
        },
        methods: {
            getProducto: function(){
              
               return this.producto 
            },
            setProducto: function(producto){
                return this.producto = producto
             },

             getUrl: function(){

               return (this.producto.id)?'/editar/producto/'+this.producto.id:'/registrar/producto'
               
             },
            sendProducto: function () {

                axios.post(this.getUrl(), this.producto)
                  .then(function (response) {
                   
                    notify.show('Solicitud enviado con éxito.','success')

                    if(this.producto.id == null){
                      
                        this.setProducto( new Producto('','','','','',1,''))
                    }
                    
                 
                }).catch(function (error) {

                    component.manageError(error)
                
                });
                
            },
                   getCliente: function(documento){
                if(documento == ""){
                    return false;
                }
                var urlFindCliente = '/api/find/cliente/'+documento

                axios.get(urlFindCliente).then(response =>{

                    let nombre =  document.querySelector("#nombre")
                    if(!response.data.id){
                        notify.show('No se encontró al cliente.','danger')
                        return false;
                    }
                    this.cliente = response.data
                    notify.show('Cliente encontrado con el documento: '+documento,'success')
                    
                    nombre.value = response.data.nombre
                    
                })
            }
       
            
        },
        computed: {
     
          }
    })

    
}


