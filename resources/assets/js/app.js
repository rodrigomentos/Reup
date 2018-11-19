var notify = new Vue({
  el: '#notify',
  data: {
      message:'',
      flat:false,

  },
  methods: {
      show: function(message,nameClass ){
        
        this.message = message
        $("#alert-notify").addClass("alert-"+nameClass.toString());
        this.flat=true
        
        this.hide()
       
      },
      hide:function(){

        setTimeout(() => {
          this.flat = false
        },3000)
     
      }
      
  }
})



var util = {
    created: function () {
      //this.hello()
    },
    methods: {
        manageError: function (error) {
            
            if(!error.response){
              return false;
            }
            var message = Object.values(error.response.data.errors);
            
            for (let index = message.length -1 ; index >=0; index--) {

              notify.show(message[index][0],'danger')
               
                
            }
         },
         notify:function(message,title){
             
         }
    }
  }
  
  // define a component that uses this mixin
  var Component = Vue.extend({
    mixins: [util]
  })
  
  var component = new Component();