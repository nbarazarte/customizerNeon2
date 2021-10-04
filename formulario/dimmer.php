<div class="card">

  <div class="card-header">
    Dimmer (controlador de luz)
    <input type="hidden" id="tipoDimmer" name="tipoDimmer" readonly="yes" value="condimmer">
  </div>

  <div class="card-body">

    <div class="row">

      <div class="col-sm-4">

        <div class="card-group">

         <div class="card">
            <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/dimmer/incluir.png'; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
            
              <div class="row">

                <div class="col-sm-12">
                  <input onclick="textoRadio('tipoDimmer',this.id)" class="form-check-input" type="radio" name="dimmer" id="condimmer" value="<?php echo esc_html($cn_precio_dimmer);?>" checked onchange="deshabiltarBotonCart()">      
                </div>

                <div class="col-sm-12">
                  <label class="form-check-label tamanoLetras" for="condimmer">                    
                    Con dimmer
                  </label>       
                </div>      

              </div>

            </div>
          </div>
          
          <div class="card">
            <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/dimmer/noincluir.png'; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
              
              <div class="row">

                <div class="col-sm-12">
                  <input onclick="textoRadio('tipoDimmer',this.id)" class="form-check-input" type="radio" name="dimmer" id="sindimmer" value="0" onchange="deshabiltarBotonCart()">      
                </div>

                <div class="col-sm-12">
                  <label class="form-check-label tamanoLetras" for="sindimmer">                    
                    Sin dimmer
                  </label>       
                </div>      

              </div>

            </div>
          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<br/>