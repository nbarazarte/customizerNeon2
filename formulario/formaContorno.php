    <div class="row">



      <div class="col-sm-6">

        <div class="card" style="border: 0;">
          <div class="card-body" style="background-color: #D3D3D3">
          
          <label>Trasera del Neón</label>
            
            <div class="cc-selector">
              <input type="hidden" id="tipoTrasera" name="tipoTrasera" readonly="yes" value="metacrilato">


              <figure class="figure">

                <input onclick="textoRadio('tipoTrasera',this.id)" type="radio" name="traseraneon" id="metacrilato" value="<?php echo esc_html($cn_precio_metacrilato);?>" checked onchange="deshabiltarBotonCart()">   
                <label class="drinkcard-cc metacrilato" for="metacrilato"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">METACRILATO</figcaption>

              </figure>


              <figure class="figure">

                <input onclick="textoRadio('tipoTrasera',this.id)" type="radio" name="traseraneon" id="pvc" value="<?php echo esc_html($cn_precio_pvc);?>" onchange="deshabiltarBotonCart()">
                <label class="drinkcard-cc pvc" for="pvc"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">PVC</figcaption>

              </figure>


              <figure class="figure">

                <input onclick="textoRadio('tipoTrasera',this.id)" type="radio" name="traseraneon" id="dm" value="<?php echo esc_html($cn_precio_dm);?>" onchange="deshabiltarBotonCart()">
                <label class="drinkcard-cc dm" for="dm"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">DM</figcaption>

              </figure>



              <figure class="figure">

                <input onclick="textoRadio('tipoTrasera',this.id)" type="radio" name="traseraneon" id="contrachapado" value="<?php echo esc_html($cn_precio_contraenchapado);?>" onchange="deshabiltarBotonCart()">
                <label class="drinkcard-cc contrachapado" for="contrachapado"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 3px;">CONTRACHAPADO</figcaption>

              </figure>


              <figure class="figure">

                <input onclick="textoRadio('tipoTrasera',this.id)" type="radio" name="traseraneon" id="maderadepino" value="<?php echo esc_html($cn_precio_maderadepino);?>" onchange="deshabiltarBotonCart()"> 
                <label class="drinkcard-cc maderadepino" for="maderadepino"></label> 

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">MADERA DE PINO</figcaption>

              </figure>

            </div>
            
          </div>
        </div>          

      </div> 


      <div class="col-sm-6">
        
        <div class="card" style="border: 0;">
          <div class="card-body" style="background-color: #D3D3D3">
            
           <label>Sujeción del Neón</label>
            <div class="cc-selector">
              <input type="hidden" id="tipoSujecion" name="tipoSujecion" readonly="yes" value="ancladoalapared">


              <figure class="figure">

                <input onclick="textoRadio('tipoSujecion',this.id)" type="radio" name="sujecion" id="ancladoalapared" value="<?php echo esc_html($cn_precio_ancladoalapared);?>" checked onchange="deshabiltarBotonCart()">
                <label class="drinkcard-cc ancladoalapared" for="ancladoalapared"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">ANCLADO</figcaption>

              </figure>


              <figure class="figure">

                <input onclick="textoRadio('tipoSujecion',this.id)" type="radio" name="sujecion" id="colgadoaltecho" value="<?php echo esc_html($cn_precio_colgadoaltecho);?>" onchange="deshabiltarBotonCart()">  
                <label class="drinkcard-cc colgadoaltecho" for="colgadoaltecho"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 3px;">SUJETO AL TECHO</figcaption>

              </figure>


              <figure class="figure">

                <input onclick="textoRadio('tipoSujecion',this.id)" type="radio" name="sujecion" id="sinsujecion" value="<?php echo esc_html($cn_precio_sinsujecion);?>" onchange="deshabiltarBotonCart()">
                <label class="drinkcard-cc sinsujecion" for="sinsujecion"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 3px;">SIN SUJECIÓN</figcaption>

              </figure>


              <figure class="figure">

                <input onclick="textoRadio('tipoSujecion',this.id)" type="radio" name="sujecion" id="colgadocomouncuadro" value="<?php echo esc_html($cn_precio_colgadocomouncuadro);?>" onchange="deshabiltarBotonCart()">   
                <label class="drinkcard-cc colgadocomouncuadro" for="colgadocomouncuadro"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 2px;">SUJETO COMO <br/>UN CUADRO</figcaption>

              </figure>


            </div>

          </div>
        </div>              

      </div>  

      <div class="col-sm-6">

        <div class="card" style="border: 0;">
          <div class="card-body" style="background-color: #D3D3D3">
            
            <label>Forma del Contorno</label>             
            <div class="cc-selector">


              <figure class="figure">

                <input type="radio" name="contornos" id="rectangular" value="rectangular" checked onchange="deshabiltarBotonCart()" > 
                <label class="drinkcard-cc rectangular" for="rectangular"></label> 

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 2px;">RECTANGULAR</figcaption>

              </figure>

              <figure class="figure">

                <input  type="radio" name="contornos" id="redondo" value="redondo" onchange="deshabiltarBotonCart()"> 
                <label class="drinkcard-cc redondo" for="redondo"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">REDONDO</figcaption>

              </figure>

              <figure class="figure">

                <input type="radio" name="contornos" id="personalizado" value="personalizado" onchange="deshabiltarBotonCart()"> 
                <label class="drinkcard-cc personalizado" for="personalizado"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 2px;">PERSONALIZADA</figcaption>

              </figure>

            </div>

          </div>
        </div>

      </div>

      <div class="col-sm-6">
      
        <div class="card" style="border: 0;">
          <div class="card-body" style="background-color: #D3D3D3">
            
            <label>Dimmer (controlador de luz) </label>
            <div class="cc-selector">

              <input type="hidden" id="tipoDimmer" name="tipoDimmer" readonly="yes" value="condimmer">


              <figure class="figure">

                <input onclick="textoRadio('tipoDimmer',this.id)" type="radio" name="dimmer" id="condimmer" value="<?php echo esc_html($cn_precio_dimmer);?>" checked onchange="deshabiltarBotonCart()">            
                <label class="drinkcard-cc condimmer" for="condimmer"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 2px;">CON DIMMER</figcaption>

              </figure>


              <figure class="figure">

                <input onclick="textoRadio('tipoDimmer',this.id)" type="radio" name="dimmer" id="sindimmer" value="0" onchange="deshabiltarBotonCart()">  
                <label class="drinkcard-cc sindimmer" for="sindimmer"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 2px;">SIN DIMMER</figcaption>

              </figure>

            </div>

          </div>
        </div> 

      </div>        

      <div class="col-sm-12">

        <div class="card" style="border: 0;">
          <div class="card-body" style="background-color: #D3D3D3">
            
            <label>Colores</label>

            <div class="cc-selector">
              <center>

              <figure class="figure">

                <input type="radio" name="colores" value="amarillo" id="amarilloColor" checked onchange="deshabiltarBotonCart()"> 
                <label class="drinkcard-cc-colores amarilloColor" for="amarilloColor"></label> 

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">AMARILLO</figcaption>

              </figure>                

              <figure class="figure">

                <input  type="radio" name="colores" value="rojo" id="rojoColor"  onchange="deshabiltarBotonCart()">
                <label class="drinkcard-cc-colores rojoColor" for="rojoColor"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">ROJO</figcaption>

              </figure>

              <figure class="figure">

                <input type="radio" name="colores" value="durazno" id="duraznoColor" onchange="deshabiltarBotonCart()"> 
                <label class="drinkcard-cc-colores duraznoColor" for="duraznoColor"></label> 

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">DURAZNO</figcaption>

              </figure>

              <figure class="figure">

                <input type="radio" name="colores" value="ambar" id="ambarColor" onchange="deshabiltarBotonCart()"> 
                <label class="drinkcard-cc-colores ambarColor" for="ambarColor"></label> 

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">AMBAR</figcaption>

              </figure>              

				      <figure class="figure">

                <input type="radio" name="colores" value="limon" id="limonColor" onchange="deshabiltarBotonCart()"> 
                <label class="drinkcard-cc-colores limonColor" for="limonColor"></label> 

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">LIMÓN</figcaption>

              </figure>
     		  
             <figure class="figure">

                <input  type="radio" name="colores" value="verde" id="verdeColor" onchange="deshabiltarBotonCart()">
                <label class="drinkcard-cc-colores verdeColor" for="verdeColor"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">VERDE</figcaption>

              </figure>

              <figure class="figure">

                <input  type="radio" name="colores" value="azul" id="azulColor" onchange="deshabiltarBotonCart()">
                <label class="drinkcard-cc-colores azulColor" for="azulColor"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">AZUL</figcaption>

              </figure>


              <figure class="figure">

                <input  type="radio" name="colores" value="morado" id="moradoColor" onchange="deshabiltarBotonCart()">
                <label class="drinkcard-cc-colores moradoColor" for="moradoColor"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">MORADO</figcaption>

              </figure>


              <figure class="figure">

                <input  type="radio" name="colores" value="turquesa" id="turquesaColor" onchange="deshabiltarBotonCart()">
                <label class="drinkcard-cc-colores turquesaColor" for="turquesaColor"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">TURQUESA</figcaption>

              </figure>

              <figure class="figure">

                <input  type="radio" name="colores" value="rosa" id="rosaColor" onchange="deshabiltarBotonCart()"> 
                <label class="drinkcard-cc-colores rosaColor" for="rosaColor"></label> 

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">ROSA</figcaption>

              </figure>

			        <figure class="figure">

                <input type="radio" name="colores" value="blanco" id="blancoColor" onchange="deshabiltarBotonCart()"> 
                <label class="drinkcard-cc-colores blancoColor" for="blancoColor"></label> 

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">BLANCO</figcaption>

              </figure>			 
			  
              <figure class="figure">

                <input type="radio" name="colores" value="calido" id="calidoColor" onchange="deshabiltarBotonCart()"> 
                <label class="drinkcard-cc-colores calidoColor" for="calidoColor"></label> 

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">CÁLIDO</figcaption>

              </figure>




              


              




              </center>

            </div>
          </div>
        </div>            

      </div>            

    </div>



   

<br/>

<!--

<div class="card">

  <div class="card-header">
    Forma del Contorno
  </div>

  <div class="card-body">

    <div class="row">

      <div class="col-sm-6">

        <div class="card-group">

          <div class="card">
            <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/contorno/rectangular.png'; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
             
              <div class="row">

                <div class="col-sm-12">
                  <input class="form-check-input" type="radio" name="contornos" id="rectangular" value="rectangular" checked onchange="deshabiltarBotonCart()">        
                </div>

                <div class="col-sm-12">
                  <label class="form-check-label tamanoLetras" for="rectangular">                    
                    Rectangular
                  </label>       
                </div>      

              </div>

            </div>
          </div>

          <div class="card" >
            <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/contorno/redondo.png'; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
              
              <div class="row">

                <div class="col-sm-12">
                  <input class="form-check-input" type="radio" name="contornos" id="redondo" value="redondo" onchange="deshabiltarBotonCart()">     
                </div>

                <div class="col-sm-12">
                  <label class="form-check-label tamanoLetras" for="redondo">                    
                    Redondo
                  </label>       
                </div>      

              </div>

            </div>
          </div>

          <div class="card" >
            <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/contorno/personalizado.png'; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
              
              <div class="row">

                <div class="col-sm-12">
                  <input class="form-check-input" type="radio" name="contornos" id="personalizado" value="personalizado" onchange="deshabiltarBotonCart()">       
                </div>

                <div class="col-sm-12">
                  <label class="form-check-label tamanoLetras" for="personalizado">                    
                    Personalizado con forma
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

-->
