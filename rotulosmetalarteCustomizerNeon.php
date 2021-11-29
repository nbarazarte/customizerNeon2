<?php
/*
Plugin Name: Rotulos Metalarte Customizer Neon
Plugin URI: https://www.rotulosmetalarte.es
Description: Personalizador de anuncios de Neon
Version: 1.1
Author: Neil Barazarte
Author URI: https://www.ploshshop.com
License: GPLv2
*/

//Archivos css y js propios del plugin:
//include(plugin_dir_url(__FILE__).'funciones.php');

//echo $_SERVER['REQUEST_URI'];
if( $_SERVER['REQUEST_URI'] == '/proyecto/producto/neon-flexible-personalizado-custom-neon-flex/'){
//if( $_SERVER['REQUEST_URI'] == '/producto/neon-flexible-personalizado-custom-neon-flex/'){ 

    add_action( 'wp_enqueue_scripts', 'custom_styles_neon',10 );
    add_action( 'wp_enqueue_scripts', 'custom_scripts_neon' );
    add_action( 'wp_enqueue_scripts', 'browser_scripts');
}

// Register Style
function custom_styles_neon() {

    wp_register_style( 'dv-custom', plugin_dir_url(__FILE__).'css/custom.css', false, '1.0' );
    wp_enqueue_style( 'dv-custom' );
}

// Register Script
function custom_scripts_neon() {

    wp_register_script( 'main', plugin_dir_url(__FILE__).'js/custom.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'main' );
}

function browser_scripts() {

    wp_enqueue_script('browser', plugin_dir_url(__FILE__).'/js/node_modules/text-to-svg/build/test/browser.js', array(), false, true);
    wp_enqueue_script( 'browser' );

}

# Agregar informacion predeterminada al activar el plugin
//Este Script se correra en 3 momentos: Al activar por primera vez, al actualizar, al reactivar
register_activation_hook( __FILE__, 'cn_set_default_options' );

function cn_set_default_options() {

    // Revisar si ya se habia activado antes

    if ( get_option( 'cn_id_producto_personalizado' ) === false ) {
        add_option( 'cn_id_producto_personalizado', '0' );
    }

    if ( get_option( 'cn_pagina' ) === false ) {
        add_option( 'cn_pagina', 'Ninguna' );
    }

    if ( get_option( 'cn_precio_base' ) === false ) {
        add_option( 'cn_precio_base', '23.70' );
    }

    if ( get_option( 'iva' ) === false ) {
        add_option( 'iva', '21' );
    }

    if ( get_option( 'costoTransformador' ) === false ) {
        add_option( 'costoTransformador', '10' );
    }        

    if ( get_option( 'cn_precio_dimmer' ) === false ) {
        add_option( 'cn_precio_dimmer', '5.00' );
    }

    if ( get_option( 'cn_precio_metacrilato' ) === false ) {
        add_option( 'cn_precio_metacrilato', '0.0032' );
    }

    if ( get_option( 'cn_precio_dm' ) === false ) {
        add_option( 'cn_precio_dm', '0.0020' );
    }

    if ( get_option( 'cn_precio_pvc' ) === false ) {
        add_option( 'cn_precio_pvc', '0.0035' );
    }

    if ( get_option( 'cn_precio_contraenchapado' ) === false ) {
        add_option( 'cn_precio_contraenchapado', '0.0052' );
    }

    if ( get_option( 'cn_precio_maderadepino' ) === false ) {
        add_option( 'cn_precio_maderadepino', '0.0052' );
    }

    if ( get_option( 'cn_precio_ancladoalapared' ) === false ) {
        add_option( 'cn_precio_ancladoalapared', '20.00' );
    }

    if ( get_option( 'cn_precio_colgadoaltecho' ) === false ) {
        add_option( 'cn_precio_colgadoaltecho', '20.00' );
    }

    if ( get_option( 'cn_precio_colgadocomouncuadro' ) === false ) {
        add_option( 'cn_precio_colgadocomouncuadro', '20.00' );
    }

    if ( get_option( 'cn_precio_sinsujecion' ) === false ) {
        add_option( 'cn_precio_sinsujecion', '10.00' );
    }

    if ( get_option( 'cn_precio_sietediaslaborales' ) === false ) {
        add_option( 'cn_precio_sietediaslaborales', '00.00' );
    }

    if ( get_option( 'cn_precio_4872' ) === false ) {
        add_option( 'cn_precio_4872', '50.00' );
    }

    if ( get_option( 'cn_precio_metro_neon' ) === false ) {
        add_option( 'cn_precio_metro_neon', '8.00' );
    }

}

#Agregar esta condiguración al menu
function cn_menu_ajustes() {
    add_options_page( 'Customizer Neon', //Título de la página
                      'Customizer Neon', //Nombre del menú
                      'manage_options', //Nivel de acceso, solo usuarios
                      'cn-conf-ga', // slug
                      'cn_genera_pagina' ); //Función que procesará todo
}

add_action( 'admin_menu', 'cn_menu_ajustes' );

//Generar el codigo de la pagina de actualización
function cn_genera_pagina() {

  // Conseguir el valor del Precio base de todos los elementos:
  $cn_id_producto_personalizado   = get_option( 'cn_id_producto_personalizado' ) ;
  $cn_pagina                      = get_option( 'cn_pagina' ) ;
  $cn_precio_base                 = get_option( 'cn_precio_base' ) ;
  $iva                            = get_option( 'iva' ) ;
  $costoTransformador             = get_option( 'costoTransformador' ) ;
  $cn_precio_dimmer               = get_option( 'cn_precio_dimmer' ) ;
  $cn_precio_metacrilato          = get_option( 'cn_precio_metacrilato' ) ;
  $cn_precio_dm                   = get_option( 'cn_precio_dm' ) ;
  $cn_precio_pvc                  = get_option( 'cn_precio_pvc' ) ;
  $cn_precio_contraenchapado      = get_option( 'cn_precio_contraenchapado' ) ;
  $cn_precio_maderadepino         = get_option( 'cn_precio_maderadepino' ) ;
  $cn_precio_ancladoalapared      = get_option( 'cn_precio_ancladoalapared' ) ;
  $cn_precio_colgadoaltecho       = get_option( 'cn_precio_colgadoaltecho' ) ;
  $cn_precio_colgadocomouncuadro  = get_option( 'cn_precio_colgadocomouncuadro' ) ;
  $cn_precio_sinsujecion          = get_option( 'cn_precio_sinsujecion' ) ;
  $cn_precio_sietediaslaborales   = get_option( 'cn_precio_sietediaslaborales' ) ;
  $cn_precio_4872                 = get_option( 'cn_precio_4872' ) ;
  $cn_precio_metro_neon           = get_option( 'cn_precio_metro_neon' ) ;

  require('formularioAdmin/configuracionesForm.php');
}

add_action( 'admin_post_guardar_ga', 'cn_guardar_ga' );

function cn_guardar_ga() {
    // Revisar el permiso de autorización
    if ( !current_user_can( 'manage_options' ) ) {
        wp_die( 'Not allowed' );
    }

    // Revisar el token que creamos antes
    check_admin_referer( 'token_ga' );

    //Limpiar valor, para prevenir problemas de seguridad
    $cn_id_producto_personalizado   = sanitize_text_field( $_POST['cn_id_producto_personalizado'] );
    $cn_pagina                      = sanitize_text_field( $_POST['cn_pagina'] );
    $cn_precio_base                 = sanitize_text_field( $_POST['cn_precio_base'] );
    $iva                            = sanitize_text_field( $_POST['iva'] );
    $costoTransformador             = sanitize_text_field( $_POST['costoTransformador'] );
    $cn_precio_dimmer               = sanitize_text_field( $_POST['cn_precio_dimmer'] );
    $cn_precio_metacrilato          = sanitize_text_field( $_POST['cn_precio_metacrilato'] );
    $cn_precio_dm                   = sanitize_text_field( $_POST['cn_precio_dm'] );
    $cn_precio_pvc                  = sanitize_text_field( $_POST['cn_precio_pvc'] );
    $cn_precio_contraenchapado      = sanitize_text_field( $_POST['cn_precio_contraenchapado'] );
    $cn_precio_maderadepino         = sanitize_text_field( $_POST['cn_precio_maderadepino'] );
    $cn_precio_ancladoalapared      = sanitize_text_field( $_POST['cn_precio_ancladoalapared'] );
    $cn_precio_colgadoaltecho       = sanitize_text_field( $_POST['cn_precio_colgadoaltecho'] );
    $cn_precio_colgadocomouncuadro  = sanitize_text_field( $_POST['cn_precio_colgadocomouncuadro'] );
    $cn_precio_sinsujecion          = sanitize_text_field( $_POST['cn_precio_sinsujecion'] );
    $cn_precio_sietediaslaborales   = sanitize_text_field( $_POST['cn_precio_sietediaslaborales'] );
    $cn_precio_4872                 = sanitize_text_field( $_POST['cn_precio_4872'] );
    $cn_precio_metro_neon           = sanitize_text_field( $_POST['cn_precio_metro_neon'] );

    // Guardar en la base de datos
    update_option( 'cn_id_producto_personalizado', $cn_id_producto_personalizado );
    update_option( 'cn_pagina', $cn_pagina );
    update_option( 'cn_precio_base', $cn_precio_base );
    update_option( 'iva', $iva );
    update_option( 'costoTransformador', $costoTransformador );
    update_option( 'cn_precio_dimmer', $cn_precio_dimmer );
    update_option( 'cn_precio_metacrilato', $cn_precio_metacrilato );
    update_option( 'cn_precio_dm', $cn_precio_dm );
    update_option( 'cn_precio_pvc', $cn_precio_pvc );
    update_option( 'cn_precio_contraenchapado', $cn_precio_contraenchapado );
    update_option( 'cn_precio_maderadepino', $cn_precio_maderadepino );
    update_option( 'cn_precio_ancladoalapared', $cn_precio_ancladoalapared );
    update_option( 'cn_precio_colgadoaltecho', $cn_precio_colgadoaltecho );
    update_option( 'cn_precio_colgadocomouncuadro', $cn_precio_colgadocomouncuadro );
    update_option( 'cn_precio_sinsujecion', $cn_precio_sinsujecion );
    update_option( 'cn_precio_sietediaslaborales', $cn_precio_sietediaslaborales );
    update_option( 'cn_precio_4872', $cn_precio_4872 );
    update_option( 'cn_precio_metro_neon', $cn_precio_metro_neon );

    // Regresamos a la pagina de ajustes
    wp_redirect(

      add_query_arg (
        'page',
        'cn-conf-ga',
        admin_url( 'options-general.php' )
      )
    );
    exit;
}

add_action('wp_ajax_jnjtest', 'jnj_mi_funcion');
add_action('wp_ajax_nopriv_jnjtest', 'jnj_mi_funcion');

// Esta función tiene que devolver los resultados al frontend
// en el formato que queramos..
function jnj_mi_funcion()
{

    $fuente = $_POST['fuenteLetras'];
    $color = $_POST['color'];

    echo '<h1>
      <small class="text-muted"> <strong>'. $_POST['precioFinal']. '&euro;<strong></small>
      
    </h1>
    <div style="font-size: 10px; color: #870D00">IVA incluido</div>
    <div style="font-size: 10px;">ENVÍO GRATUITO</div>
    <h3 style="font-size: 24px;font-family: "Open Sans", sans-serif;">Rótulos de Neón Flex Led personalizados.</h3>
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
        </p>';

 
echo '<div class="container">
          <div id="caja" class="row justify-content-md-center">

            <div id="muestra" class="col-md-auto neon_effect '.$fuente.' '.$color.' ">
             <p>'.$_POST['rotulo'].'</p><br/>
             <p>'.$_POST['rotulo2'].'</p><br/>
             <p>'.$_POST['rotulo3'].'</p>
            </div>

          </div>

          <div class="row">
            <div class="col-md-12">
              
              <label for="customRange1" class="form-label">Acercar/alejar texto (Este control no altera las medidas) Es una referencia del orden de las palabras por línea.</label>
              <input type="range" class="form-range" id="customRange1" min="0" max="15" step="0.1" value="5" onchange="ajustarTamano(this.value)">
            </div>
          </div>
        </div>';

  wp_die();
}


//Aqui se muestra el formulario de personalización del rotulo de neon:
/**
 * Output engraving field.
 */
function iconic_output_engraving_field() {

      global $product;

      $cn_id_producto_personalizado = get_option( 'cn_id_producto_personalizado' ) ;

      //echo $cn_id_producto_personalizado; die();

      if ( $product->get_id() != $cn_id_producto_personalizado ) {
        return;
      }

      // Conseguir el valor del Precio base de todos los elementos:
      $cn_pagina                      = get_option( 'cn_pagina' ) ;
      $cn_precio_base                 = get_option( 'cn_precio_base' ) ;
      $iva                            = get_option( 'iva' ) ;
      $costoTransformador             = get_option( 'costoTransformador' ) ;
      $cn_precio_dimmer               = get_option( 'cn_precio_dimmer' ) ;
      $cn_precio_metacrilato          = get_option( 'cn_precio_metacrilato' ) ;
      $cn_precio_dm                   = get_option( 'cn_precio_dm' ) ;
      $cn_precio_pvc                  = get_option( 'cn_precio_pvc' ) ;
      $cn_precio_contraenchapado      = get_option( 'cn_precio_contraenchapado' ) ;
      $cn_precio_maderadepino         = get_option( 'cn_precio_maderadepino' ) ;
      $cn_precio_ancladoalapared      = get_option( 'cn_precio_ancladoalapared' ) ;
      $cn_precio_colgadoaltecho       = get_option( 'cn_precio_colgadoaltecho' ) ;
      $cn_precio_colgadocomouncuadro  = get_option( 'cn_precio_colgadocomouncuadro' ) ;
      $cn_precio_sinsujecion          = get_option( 'cn_precio_sinsujecion' ) ;
      $cn_precio_sietediaslaborales   = get_option( 'cn_precio_sietediaslaborales' ) ;
      $cn_precio_4872                 = get_option( 'cn_precio_4872' ) ;
      $cn_precio_metro_neon           = get_option( 'cn_precio_metro_neon' ) ;

      require('formularioCustomizer.php');

}

add_action( 'woocommerce_before_single_product', 'iconic_output_engraving_field', 10 );

//woocommerce_single_product_summary
//woocommerce_before_single_product
//add_action( 'woocommerce_before_add_to_cart_button', 'iconic_output_engraving_field', 10 );


//Aqui se muestran ocultos en el formulario del carrito los campos de personalización del rotulo de neon:
/**
 * Output engraving field.
 */
function campos_ocultos_customizerNeon() {

      global $product;

      $cn_id_producto_personalizado = get_option( 'cn_id_producto_personalizado' ) ;

      //echo $cn_id_producto_personalizado; die();

      if ( $product->get_id() != $cn_id_producto_personalizado ) {
        return;
      }

  ?>

  <div class="bsnamespace" style=""> 


      <div class="col-12 text-center">

           <div class="gem-button-container gem-button-position-center thegem-button-61835271a9da17668 lazy-loading  lazy-loading-end-animation">
            <a id="myButton2" title="" class="gem-button gem-button-size-small gem-button-style-flat gem-button-text-weight-normal lazy-loading-item lazy-loading-item-drop-right" data-ll-effect="drop-right-without-wrap" style="text-decoration:none;border-radius: 0px; background-color: rgb(153, 34, 51); color: rgb(255, 255, 255);cursor: pointer;" onmouseleave="this.style.backgroundColor='#992233';this.style.color='#ffffff';" onmouseenter="this.style.backgroundColor='#172b3c';this.style.color='#ffffff';"  >
            <i class="fas fa-magic"></i> APLICAR CAMBIOS
            </a>
          </div>
          <br/>
          <div id="precioOtraVez" style="position: relative; left: 30px;">
           
          </div>
          

        <div id="myDIV">
          <i class="fas fa-hourglass-start"></i> Creando el nuevo diseño...
        </div>        

      </div>

      <input type="hidden" class="form-control" id="precio_final_rotulo" name="precio_final_rotulo" value="" readonly="yes">
      <input type="hidden" id="texto_rotulo" name="texto_rotulo" value="" readonly="yes">
      <input type="hidden" id="texto_rotulo2" name="texto_rotulo2" value="" readonly="yes">
      <input type="hidden" id="texto_rotulo3" name="texto_rotulo3" value="" readonly="yes">
      <input type="hidden" id="fuenteLetrasText" name="fuenteLetrasText" value="" readonly="yes">
      <input type="hidden" id="anchocm" name="anchocm" value="" readonly="yes">
      <input type="hidden" id="alturacm" name="alturacm" value="" readonly="yes">
      <input type="hidden" id="altocm" name="altocm" value="" readonly="yes">
      <input type="hidden" id="tipoTraseraSumario" name="tipoTraseraSumario" value="" readonly="yes">
      <input type="hidden" id="tipoSujecionSumario" name="tipoSujecionSumario" value="" readonly="yes">   
      <input type="hidden" id="tipoDimmerSumario" name="tipoDimmerSumario" value="" readonly="yes">
      <input type="hidden" id="tiempoEntregaSumario" name="tiempoEntregaSumario" value="" readonly="yes">
      <input type="hidden" id="tipoContornoSumario" name="tipoContornoSumario" value="" readonly="yes">
      <input type="hidden" id="tipoConexionSumario" name="tipoConexionSumario" value="" readonly="yes">
      <input type="hidden" id="colorSumario" name="colorSumario" value="" readonly="yes">
      <input type="hidden" id="impuesto" name="impuesto" value="" readonly="yes">
      <input type="hidden" id="subTotalPrecio" name="subTotalPrecio" value="" readonly="yes">
      <input type="hidden" id="pathA" name="pathA" value="" readonly="yes">
      <input type="hidden" id="pathB" name="pathB" value="" readonly="yes">

  </div>
  <?php

}

//add_action( 'woocommerce_before_single_product_summary', 'iconic_output_engraving_field', 10 );
add_action( 'woocommerce_before_add_to_cart_button', 'campos_ocultos_customizerNeon', 10 );


/**
 * Add engraving text to cart item.
 *
 * @param array $cart_item_data
 * @param int   $product_id
 * @param int   $variation_id
 *
 * @return array
 */
function iconic_add_engraving_text_to_cart_item( $cart_item_data, $product_id, $variation_id ) {
  
  $precio_final_rotulo  = filter_input( INPUT_POST, 'precio_final_rotulo' );
  $texto_rotulo         = filter_input( INPUT_POST, 'texto_rotulo' );
  $texto_rotulo2         = filter_input( INPUT_POST, 'texto_rotulo2' );
  $texto_rotulo3         = filter_input( INPUT_POST, 'texto_rotulo3' );
  $fuenteLetrasText     = filter_input( INPUT_POST, 'fuenteLetrasText' );
  $anchocm              = filter_input( INPUT_POST, 'anchocm' );

  $alturacm              = filter_input( INPUT_POST, 'alturacm' );


  $altocm               = filter_input( INPUT_POST, 'altocm' );
  $tipoTraseraSumario   = filter_input( INPUT_POST, 'tipoTraseraSumario' );
  $tipoSujecionSumario  = filter_input( INPUT_POST, 'tipoSujecionSumario' );
  $tipoDimmerSumario    = filter_input( INPUT_POST, 'tipoDimmerSumario' );  
  $tiempoEntregaSumario = filter_input( INPUT_POST, 'tiempoEntregaSumario' ); 
  $tipoContornoSumario  = filter_input( INPUT_POST, 'tipoContornoSumario'  ); 
  $tipoConexionSumario  = filter_input( INPUT_POST, 'tipoConexionSumario'  ); 
  $colorSumario         = filter_input( INPUT_POST, 'colorSumario'         );
  $impuesto             = filter_input( INPUT_POST, 'impuesto'         );
  $subTotalPrecio       = filter_input( INPUT_POST, 'subTotalPrecio'         );
  $pathA                = filter_input( INPUT_POST, 'pathA'         );
  $pathB                = filter_input( INPUT_POST, 'pathB'         );

  if ( empty( $precio_final_rotulo ) ) {
    return $cart_item_data;
  }

  $product = wc_get_product( $product_id );
  $price = $product->get_price();
  // extra pack checkbox
  
     
  //$cart_item_data['new_price'] = $price + $precio_final_rotulo;
  //$cart_item_data['new_price'] = $precio_final_rotulo;
  $cart_item_data['new_price'] = $subTotalPrecio;
  
  /*
  echo "-->".$precio_final_rotulo;

  echo "-->".$cart_item_data['new_price'];

  echo "<br/>";

  echo "-->".$engraving_text; die();

  */

  
  $cart_item_data['texto_rotulo']         = $texto_rotulo;
  $cart_item_data['texto_rotulo2']        = $texto_rotulo2;
  $cart_item_data['texto_rotulo3']        = $texto_rotulo3;
  $cart_item_data['fuenteLetrasText']     = $fuenteLetrasText;
  $cart_item_data['anchocm']              = number_format($_POST['anchocm'],3,",",".");

  $cart_item_data['alturacm']              = number_format($_POST['alturacm'],3,",",".");

  $cart_item_data['altocm']               = $altocm;
  $cart_item_data['tipoTraseraSumario']   = $tipoTraseraSumario;
  $cart_item_data['tipoSujecionSumario']  = $tipoSujecionSumario;
  $cart_item_data['tipoDimmerSumario']    = $tipoDimmerSumario;
  $cart_item_data['tiempoEntregaSumario'] = $tiempoEntregaSumario;
  $cart_item_data['tipoContornoSumario']  = $tipoContornoSumario;
  $cart_item_data['tipoConexionSumario']  = $tipoConexionSumario;
  $cart_item_data['colorSumario']         = $colorSumario;
  $cart_item_data['impuesto']             = $impuesto;
  $cart_item_data['subTotalPrecio']       = $subTotalPrecio;
  $cart_item_data['pathA']                = $pathA;
  $cart_item_data['pathB']                = $pathB;

  return $cart_item_data;
}

add_filter( 'woocommerce_add_cart_item_data', 'iconic_add_engraving_text_to_cart_item', 10, 3 );


/**
 * Display engraving text in the cart.
 *
 * @param array $item_data
 * @param array $cart_item
 *
 * @return array
 */
function iconic_display_engraving_text_cart( $item_data, $cart_item ) {
  if ( empty( $cart_item['texto_rotulo'] ) ) {
    return $item_data;
  }
    //echo "<pre>".var_dump($cart_item)."</pre>";
    //echo $cart_item['product_id'];

    $id_neon = get_option( 'cn_id_producto_personalizado' );

    if($id_neon == $cart_item['product_id']){

      $item_data[] = array(
        'key'     => __( '', 'iconic' ),
        'value'   => '',
        'display' => '<b>Línea 1:</b><br/>'.wc_clean( $cart_item['texto_rotulo']).'<br/>'.
                     '<b>Línea 2:</b><br/>'.wc_clean( $cart_item['texto_rotulo2']).'<br/>'.
                     '<b>Línea 3:</b><br/>'.wc_clean( $cart_item['texto_rotulo3']).'<br/>'.
                     '<b>Fuente:</b><br/>'.wc_clean( $cart_item['fuenteLetrasText']).'<br/>'.
                     '<b>Altura (cm):</b><br/>'.wc_clean( $cart_item['alturacm']).'<br/>'.
                     '<b>Ancho (cm):</b><br/>'.wc_clean( $cart_item['anchocm']).'<br/>'.
                     '<b>Trasera del Neón:</b><br/>'.wc_clean( $cart_item['tipoTraseraSumario']).'<br/>'.
                     '<b>Sujeción del Neón:</b><br/>'.wc_clean( $cart_item['tipoSujecionSumario']).'<br/>'.
                     '<b>Dimmer:</b><br/>'.wc_clean( $cart_item['tipoDimmerSumario']).'<br/>'.
                     '<b>Forma del Contorno:</b><br/>'.wc_clean( $cart_item['tipoContornoSumario']).'<br/>'.  
                     '<b>Conexión de Corriente:</b><br/>'.wc_clean( $cart_item['tipoConexionSumario']).'<br/>'.                     
                     '<b>Color:</b><br/>'.wc_clean( $cart_item['colorSumario']).'<br/>'.
                     '<b>Tiempos de Entrega:</b><br/>'.wc_clean( $cart_item['tiempoEntregaSumario']).'<br/>'.
                     '<b>Sub Total:</b><br/>'.wc_clean( $cart_item['subTotalPrecio'])
      ); 
    }

  return $item_data;
}

add_filter( 'woocommerce_get_item_data', 'iconic_display_engraving_text_cart', 10, 2 );


add_action( 'woocommerce_before_calculate_totals', 'before_calculate_totals', 10, 1 );
 
function before_calculate_totals( $cart_obj ) {

  if ( is_admin() && ! defined( 'DOING_AJAX' ) ) {
    return;
  }

  // Iterate through each cart item
  foreach( $cart_obj->get_cart() as $key=>$value ) {

    if( isset( $value['new_price'] ) ) {
      $price = $value['new_price'];
      $value['data']->set_price( ( $price ) );
    }
  }
}

/**
 * Add custom meta to order
 */
function plugin_republic_checkout_create_order_line_item( $item, $cart_item_key, $values, $order ) {

 $item->add_meta_data(
  __( 'Línea 1', 'iconic' ),
  $values['texto_rotulo'],
  true
 );

  $item->add_meta_data(
  __( 'Línea 2', 'iconic' ),
  $values['texto_rotulo2'],
  true
 );

  $item->add_meta_data(
  __( 'Línea 3', 'iconic' ),
  $values['texto_rotulo3'],
  true
 );

 $item->add_meta_data(
  __( 'Fuente de letras', 'iconic' ),
  $values['fuenteLetrasText'],
  true
 );

 $item->add_meta_data(
  __( 'Altura (cm)', 'iconic' ),
  $values['alturacm'],
  true
 );

 $item->add_meta_data(
  __( 'Ancho (cm)', 'iconic' ),
  $values['anchocm'],
  true
 );

 $item->add_meta_data(
  __( 'Trasera del Neon', 'iconic' ),
  $values['tipoTraseraSumario'],
  true
 );

 $item->add_meta_data(
  __( 'Sujeción del Neon', 'iconic' ),
  $values['tipoSujecionSumario'],
  true
 );

 $item->add_meta_data(
  __( 'Dimmer', 'iconic' ),
  $values['tipoDimmerSumario'],
  true
 );

  $item->add_meta_data(
  __( 'Tiempo de Entrega', 'iconic' ),
  $values['tiempoEntregaSumario'],
  true
 ); 

  $item->add_meta_data(
  __( 'Forma del Contorno', 'iconic' ),
  $values['tipoContornoSumario'],
  true
 ); 

  $item->add_meta_data(
  __( 'Conexión de Corriente', 'iconic' ),
  $values['tipoConexionSumario'],
  true
 );   

  $item->add_meta_data(
  __( 'Color', 'iconic' ),
  $values['colorSumario'],
  true
 ); 
 
  $item->add_meta_data(
  __( 'Sub Total', 'iconic' ),
  $values['subTotalPrecio'],
  true
 ); 

}
add_action( 'woocommerce_checkout_create_order_line_item', 'plugin_republic_checkout_create_order_line_item', 10, 5 );