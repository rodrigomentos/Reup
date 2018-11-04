<!-- template for the modal component -->
<script type="text/x-template" id="modal-template">
  <transition name="modal">
    <div class="modal-mask">
      <div class="modal-wrapper">
        <div class="modal-container">

        

          <div class="modal-body" >
           {{ isset($body)?$body:''}}
          
          </div>

          <div class="modal-footer">
            <slot name="footer">
              
              <button class="modal-default-button btn btn-primary btn-sm" @click="$emit('close')">
                Cancelar
              </button>
            </slot>
          </div>
        </div>
      </div>
    </div>
  </transition>
</script>

