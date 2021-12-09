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


    <div id="medida2"> </div>
    <div id="result2"> </div>


    <div id="medida3"> </div>
    <div id="result3"> </div>   

         
    
      <div id="response">
        
        <h1>
          <small class="text-muted"> <strong> 0<?php echo esc_html($cn_precio_base);?>&euro;<strong></small>
            <!--<input type="text" class="form-control" id="precio_final_rotulo" name="precio_final_rotulo" value="0.00" readonly="yes">-->
        </h1>
        
          <div style="font-size: 10px; color: #870D00"> IVA incluido</div>
        
        <div style="font-size: 10px;"> ENVÍO GRATUITO</div>

        <h3 style="font-size: 24px;font-family: 'Open Sans', sans-serif;">Rótulos de Neón Flex Led personalizados.</h3>
        <p style="text-align: justify;">
          Puedes escoger la Tipografía, el tamaño, color, sujeción, corriente y trasera que más se adapte a tus necesidades.
        </p>
        <p style="text-align: justify;">
          Somos Fabricantes, fabricamos en una semana, también frecemos la opción exprés de 72 horas de fabricación.
        </p>
        <p style="text-align: justify;">
          Adicional, contamos con una colección de 150 diseños de neones prediseñados en nuestra tienda online.
        </p>
        <p style="text-align: justify;">
          Puedes pagar a tres plazos con la financiera Klarna, comprando a través de nuestra tienda online.
        </p>
        <p style="text-align: justify;">
          Los rótulos de neón Flexible se entregan con todos los soportes necesarios para su fácil instalación. Todos los neones incluyen un transformador para conectar a la corriente, también, incluyen un dimmer para regular la intensidad de la luz de neón y la forma de iluminación de este con un mando a distancia. 
        </p>

        <p style="text-align: justify;">
          Si tienes alguna duda o quieres ayuda para personalizar tu neón puedes enviarnos un correo a <a href="mailto:consultas@rotulosmetalarte.es">consultas@rotulosmetalarte.es</a> o escribirnos al WhatsApp <a href="https://wa.link/vvyfn2" target="_blank">647002464</a>, con gusto te atenderemos. Si deseas ver nuestros trabajos realizados visita nuestro Instagram  <a href="https://www.instagram.com/rotulosmetalarte/" target="_blank">@rotulosmetalarte</a> También fabricamos logos personalizados. Contáctanos.         
        </p>

        <div class="container">
          <div id="caja" class="row justify-content-md-center">

            <div id="muestra" class="col-md-auto neon_effect signatura_monoline_scriptRg amarillo">
              Rótulos Neón
            </div>

          </div>

          <div class="row">
            <div class="col-md-12">
              
              <label for="customRange1" class="form-label">Acercar/alejar texto (Este control no altera las medidas) Es una referencia del orden de las palabras por línea.</label>
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

      <input type="hidden" class="form-control" id="cn_precio_sietediaslaborales" value="<?php echo esc_html($cn_precio_sietediaslaborales);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_4872" value="<?php echo esc_html($cn_precio_4872);?>" readonly="yes">

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


          <div class="col-sm-10">
            
            <div class="card" style="border: 0;">
              <div class="card-body" style="background-color: #D3D3D3">
                
               <label>Tiempos de entrega</label>
                <div class="cc-selector">
                  <!-- el campo oculto esta en formaContorno-->

                  <figure class="figure">

                    <input onclick="" type="radio" name="opcionesTiempos" id="dias" value="7 días laborables" checked onchange="deshabiltarBotonCart()">
                    <label class="drinkcard-cc sieteDias" for="dias"></label>

                    <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">7 días laborables</figcaption>

                  </figure>

                  <figure class="figure">

                    <input onclick="" type="radio" name="opcionesTiempos" id="horas" value="48 a 72 horas" onchange="deshabiltarBotonCart()">  
                    <label class="drinkcard-cc setentaydosHoras" for="horas"></label>

                    <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 3px;">48 a 72 horas</figcaption>

                  </figure>


                </div>

              </div>
            </div>              

          </div>           
        </div>
      
      </div>
    
    <br/>
