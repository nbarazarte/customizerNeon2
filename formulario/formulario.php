<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/galeria/slide1.jpg'; ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/galeria/slide2.jpg'; ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/galeria/slide3.jpg'; ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/galeria/slide2.jpg'; ?>" class="d-block w-100" alt="...">
    </div>    
  </div>
</div>

    <input id="font-url-input" type="hidden" readonly="yes" value="<?php echo plugin_dir_url( __FILE__ ). '../css/Fonts/signatura_monoline_script/signatura_monoline-webfont.woff'; ?>" />
  
    <div id="medida"> </div>
    <div id="result"> </div>
    
      <div id="response">
        
        <h1>
          <small class="text-muted"> <strong> 0<?php echo esc_html($cn_precio_base);?>&euro;<strong></small>
            <!--<input type="text" class="form-control" id="precio_final_rotulo" name="precio_final_rotulo" value="0.00" readonly="yes">-->
        </h1>
        
          <div style="font-size: 10px; color: #870D00"> IVA incluido</div>
        
        <div style="font-size: 10px;"> ENVÍO GRATUITO</div>

        <h3 style="font-size: 24px;font-family: 'Open Sans', sans-serif;">Letras de Neón Personalizadas</h3>
        <p style="text-align: justify;">
          Neones Flexibles personalizados a tu medida: Nuestras letras de neón flexible vienen acompañadas de una trasera de metacrilato, madera, PVC que funciona como una base para sujetar el neón formando la palabra. Ofrecemos diferentes formas de sujeción colgado del techo fijo, fijado a la pared, o colgado con cable acerado como un cuadro, se puede quitar y poner. Mismo precio para cualquier color.
        </p>

        <div class="container">
          <div id="caja" class="row justify-content-md-center">

            <div id="muestra" class="col-md-auto neon_effect signatura_monoline_scriptRg amarillo">
              Rótulos Metalarte
            </div>

          </div>

          <div class="row">
            <div class="col-md-12">
              
              <label for="customRange1" class="form-label">Acercar/alejar texto</label>
              <input type="range" class="form-range" id="customRange1" min="0" max="15" step="0.1" value="3" onchange="ajustarTamano(this.value)">
            </div>
          </div>
        </div>

      </div>

     
      <div class="col-12 text-center">

      <div class="gem-button-container gem-button-position-center thegem-button-61835271a9da17668 lazy-loading  lazy-loading-end-animation">
        <a id="myButton" title="" class="gem-button gem-button-size-small gem-button-style-flat gem-button-text-weight-normal lazy-loading-item lazy-loading-item-drop-right" data-ll-effect="drop-right-without-wrap" style="text-decoration:none;border-radius: 0px; background-color: rgb(153, 34, 51); color: rgb(255, 255, 255);cursor: pointer;" onmouseleave="this.style.backgroundColor='#992233';this.style.color='#ffffff';" onmouseenter="this.style.backgroundColor='#172b3c';this.style.color='#ffffff';"  >
        <i class="fas fa-magic"></i> APLICAR CAMBIOS
        </a>
      </div>

        <div id="myDIV">
          <i class="fas fa-hourglass-start"></i> Creando el nuevo diseño...
        </div>        

      </div>
      <input type="hidden" class="form-control" id="costoTransformador" value="<?php echo esc_html($costoTransformador);?>" readonly="yes">
      <input type="hidden" class="form-control" id="iva" value="<?php echo esc_html($iva);?>" readonly="yes"> 
      <input type="hidden" class="form-control" id="cn_precio_metro_neon" value="<?php echo esc_html($cn_precio_metro_neon);?>" readonly="yes">

 <div class="card" style="">

        <div class="card-header">
          <center> <i class="fas fa-cogs"></i> Personaliza tu rótulo</center>
        </div>

        <div class="card-body" style="background-color: #D3D3D3">

          <?php

            require 'opciones.php';
		?>
		
		<p style="font-size:12px;"><i>Medida de referencia, esta medida puede sufrir algún cambio a la hora de diseñar el neón flexible final. Sin embargo, esto será consultado antes de fabricar y se enviará un previsualización final del neón y no se fabricara hasta recibir aprobación de vuestra parte</i></p>
<?php
            require 'formaContorno.php';
                      
           /* 
            require 'traseraNeon.php';

            require 'sujecionNeon.php';

            require 'dimmer.php';
          
            require 'colores.php';

          */
          ?>
        </div>
      
      </div>
    
    <br/>
