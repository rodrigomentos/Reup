if(document.getElementById("listProductos")){
    var productos = new Vue({
        el: '#listProductos',
        created: function(){
            this.getProductos();
        },
        data: {
            search: '',
            productos:[],
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
       
            
        },
        computed: {
            filteredProductosList() {
              return this.productos.filter(post => {
                return post.nombre.toLowerCase().includes(this.search.toLowerCase())
              })
            }
          }
    })

    
}
