
if(document.getElementById("findLastComprobante")){
var lastComprobante = new Vue({
    el: '#findLastComprobante',
    created: function(){
        this.getfindLastComprobante(1);
    },
    data: {
        comprobante:[]
    },
    methods: {
        getfindLastComprobante: function(tipo){
            var urlComprobante = '/api/last/comprobante/'+tipo

            axios.get(urlComprobante).then(response =>{
                let serie =  document.querySelector("#serie")
                let numero =  document.querySelector("#numero")
  
                this.comprobante = response.data
                serie.value = response.data.serie
                numero.value = response.data.numero
            })
        }
        
    }
})

document.querySelector('#tipo_comprobante').addEventListener("click",()=>{

    let tipo = document.querySelector("#tipo_comprobante")

    lastComprobante.getfindLastComprobante(tipo.value)
    detalleVentas.applyIGV()
   

})
}