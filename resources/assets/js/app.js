if(document.getElementById("modal-template")){
// register modal component
Vue.component('modal', {
    template: '#modal-template'
  })
  
  // start app
 var appModal = new Vue({
    el: '#app-modal',
    data: {
      showModal: false
    },
    methods: {
      putContent: function(url){
          if(url == ""){
             // return false;
          }
          var urlFindCliente = '/api/find/cliente/'+documento

          let body =  document.querySelector(".modal-body")

          body.innerHTML = "Hola"

        /*  axios.get(urlFindCliente).then(response =>{

              let nombre =  document.querySelector("#nombre")

              this.cliente = response.data
              nombre.value = response.data.nombre
              
          })*/
      }
      
    }
  })
}