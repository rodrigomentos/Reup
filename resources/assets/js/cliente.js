if(document.getElementById("cliente")){
    var cliente = new Vue({
        el: '#cliente',
        data: {
            cliente:[]
        },
        methods: {
            getCliente: function(documento){
                if(documento == ""){
                    return false;
                }
                var urlFindCliente = '/api/find/cliente/'+documento

                axios.get(urlFindCliente).then(response =>{

                    let nombre =  document.querySelector("#nombre")
    
                    this.cliente = response.data
                    nombre.value = response.data.nombre
                    
                })
            }
            
        }
    })

    document.querySelector('#findCliente').addEventListener("click",()=>{

        let documento = document.querySelector("#documento")

        cliente.getCliente(documento.value)
    

    })

    document.querySelector('#documento').addEventListener("keyup", function(event) {
        event.preventDefault();
        let documento = document.querySelector("#documento")
        if (event.keyCode === 13) {
            cliente.getCliente(documento.value)
        }
    });

}