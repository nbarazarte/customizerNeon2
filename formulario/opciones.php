<div class="row">

  <div class="col-sm-4">

    <label for="alto">Tipo de letra:</label>
    <select form="letras" class="form-select" id="letra" onchange="" style="height: 50px;padding: 3% 0;
  border-radius: 14px;
  border: 3px #ffffff solid; width: 200px">  <!-- browser.js ln 274-->  
      <option style="font-family:'Barcelony'; font-size: 25px"value="Barcelony">Barcelony</option>
      <option style="font-family:'BeonMedium'; font-size: 25px"value="BeonMedium">Beon</option>
      <option style="font-family:'Heartbeat in Christmas'; font-size: 40px"value="HeartbeatinChristmas">Heartbeat in Christmas</option>
      <option style="font-family:'Intro Script';font-size: 25px"value="IntroScript">Intro Script</option>
      <option style="font-family:'lie to me';font-size: 25px"value="lietome">Lie to me</option>
      <option style="font-family:'milasian circa';font-size: 30px"value="milasiancirca" >Milasian Circa</option>
      <option style="font-family:'Neoneon';font-size: 20px"value="Neoneon">Neoneon</option>
      <option style="font-family:'neoncity_scriptregular';font-size: 35px"value="neoncity_scriptregular">Neoncity</option>
      <option style="font-family:'Nickainley';font-size: 25px"value="Nickainley">Nickainley</option>
      <option style="font-family:'optisantitaregular';font-size: 25px"value="optisantitaregular">Opti Santita</option>
      <option style="font-family:'Raleway';font-size: 25px"value="Raleway">Raleway</option>
      <option style="font-family:'Roboto';font-size: 25px"value="Roboto" >Roboto</option>
      <option style="font-family:'saitama';font-size: 40px"value="saitama">Saitama</option>
      <option style="font-family:'signatura_monoline_scriptRg';font-size: 40px"value="signatura_monoline_scriptRg" selected>Signatura Monoline</option>
      <option style="font-family:'Slim Joe';font-size: 25px"value="SlimJoe">Slim Joe</option>
      <option style="font-family:'that i love you';font-size: 25px"value="thatiloveyou">That i love you</option>
    </select>

    <input type="hidden" class="" id="tipoDeFuente" value="cursiva" readonly="yes">
    <input type="hidden" class="" id="minimaAltura" value="50" readonly="yes"> 
  </div>

  <div class="col-sm-4">
    
    <label for="altoAncho">Tamaño de la letra: <i class="fas fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Valor de referencia para calcular el alto y el ancho"></i></label>
    <input type="number" step=".001" class="" id="altoAncho" min="36.755" max="100" value="36.755" style="height: 50px;padding: 3% 0;
  border-radius: 14px;
  border: 3px #ffffff solid; width: 200px;">  
    <input type="hidden" class="form-range" id="alto" value="36.755" readonly="yes"> 

  </div>

  <div class="col-sm-4">
<!--
    <label for="alto">Tiempos de Entrega:</label>
    <select for="tiempos" class="form-select" id="tiempos" onchange="deshabiltarBotonCart()" style="height: 50px;padding: 3% 0;
  border-radius: 14px;
  border: 3px #ffffff solid; width: 200px;">  
      <option value="<?php echo esc_html($cn_precio_sietediaslaborales);?>">7 días (laborales)</option>
      <option value="<?php echo esc_html($cn_precio_4872);?>">48 a 72 horas</option>
    </select>
-->
  </div>

  <div class="col-sm-4">
      <label for="rotulo">Línea 1 (Escríbe tu texto aquí):</label>
      <input type="text" class="" id="rotulo" placeholder="Tu texto" value="Rótulos Neón" onkeyup="deshabiltarBotonCart()" style="height: 50px;padding: 3% 0;
  border-radius: 14px;
  border: 3px #ffffff solid; width: 200px;">  
  </div>

  <div class="col-sm-4">
    
    <label for="altura">Alto: </label> <span id=minimaAltura2 style="font-size: 10px; color: red;">(mín. 50 cm)</span>
    <input type="text" class="" id="altura" placeholder="Alto total texto cm" value="50.000" readonly="yes" style="height: 50px;padding: 3% 0;
  border-radius: 14px;
  border: 3px #ffffff solid; width: 200px;">    
    
  </div>

  <div class="col-sm-4">
      
    <label for="ancho">Ancho: </label> <span style="font-size: 10px; color: red;">(máx. 240 cm)</span>
    <input type="text" class="" id="ancho" placeholder="Ancho total texto cm" value="192.926" readonly="yes" style="height: 50px;padding: 3% 0;
  border-radius: 14px;
  border: 3px #ffffff solid; width: 200px;">
    <input type="hidden" class="form-control" id="anchoSVG" value="0" readonly="yes">

  </div>

  <div class="col-sm-4">
      <label for="rotulo2">Línea 2 (Opcional):</label>
      <input type="text" class="" id="rotulo2" placeholder="Tu texto" value="" onkeyup="deshabiltarBotonCart()" style="height: 50px;padding: 3% 0;
  border-radius: 14px;
  border: 3px #ffffff solid; width: 200px;">  
  </div>

  <div class="col-sm-4">
    
    <label for="altura2">Alto: </label> <span id=minimaAltura3 style="font-size: 10px; color: red;">(mín. 50 cm)</span>
    <input type="text" class="" id="altura2" placeholder="Alto total texto cm" value="0" readonly="yes" style="height: 50px;padding: 3% 0;
  border-radius: 14px;
  border: 3px #ffffff solid; width: 200px;">    
    
  </div>

  <div class="col-sm-4">
      
    <label for="ancho2">Ancho: </label> <span style="font-size: 10px; color: red;">(máx. 240 cm)</span>
    <input type="text" class="" id="ancho2" placeholder="Ancho total texto cm" value="0" readonly="yes" style="height: 50px;padding: 3% 0;
  border-radius: 14px;
  border: 3px #ffffff solid; width: 200px;">
    <input type="hidden" class="form-control" id="anchoSVG2" value="0" readonly="yes">

  </div>

    <div class="col-sm-4">
      <label for="rotulo3">Línea 3 (Opcional):</label>
      <input type="text" class="" id="rotulo3" placeholder="Tu texto" value="" onkeyup="deshabiltarBotonCart()" style="height: 50px;padding: 3% 0;
  border-radius: 14px;
  border: 3px #ffffff solid; width: 200px;">  
  </div>

  <div class="col-sm-4">
    
    <label for="altura3">Alto: </label> <span id=minimaAltura4 style="font-size: 10px; color: red;">(mín. 50 cm)</span>
    <input type="text" class="" id="altura3" placeholder="Alto total texto cm" value="0" readonly="yes" style="height: 50px;padding: 3% 0;
  border-radius: 14px;
  border: 3px #ffffff solid; width: 200px;">    
    
  </div>

  <div class="col-sm-4">
      
    <label for="ancho3">Ancho: </label> <span style="font-size: 10px; color: red;">(máx. 240 cm)</span>
    <input type="text" class="" id="ancho3" placeholder="Ancho total texto cm" value="0" readonly="yes" style="height: 50px;padding: 3% 0;
  border-radius: 14px;
  border: 3px #ffffff solid; width: 200px;">
    <input type="hidden" class="form-control" id="anchoSVG3" value="0" readonly="yes">

  </div>







</div>

<br/>
  <div id="errorAltoAncho" style="color: red; text-align: center;"></div>
  <div id="errorAltoAncho2" style="color: red; text-align: center;"></div>
  <div id="errorAltoAncho3" style="color: red; text-align: center;"></div>

