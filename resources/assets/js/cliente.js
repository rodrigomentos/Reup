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
                    if(!response.data.id){
                        notify.show('No se encontró al cliente.','danger')
                        return false;
                    }
                    this.cliente = response.data
                    notify.show('Cliente encontrado con el documento: '+documento,'success')
                    
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