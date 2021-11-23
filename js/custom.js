//IMPORTANTE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!Para deshabiltar por defecto el boton de añadir al carrito
//en la linea 249 de jQueryDoSomethingAJAX() se habilita nuevamente!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
if(document.getElementById('rotulo') !== null){
    document.getElementsByName("add-to-cart")[0].style.visibility = 'hidden';    
}

function deshabiltarBotonCart(){
    //console.log('deshabilita el boton');
    document.getElementsByName("add-to-cart")[0].style.visibility = 'hidden';    
    document.getElementById('precioOtraVez').innerHTML = "";   
}

function jQueryDoSomethingAJAX() {
    // Preparamos los parámetros para la petición..
    //var formulario = document.forms.namedItem("customizerNeon");

    //Línea 1:
    var rotulo  = document.getElementById('rotulo').value
    var alto    = document.getElementById('alto').value; // Es un campo oculto luego de Tamaño de la letra
    var ancho   = document.getElementById('ancho').value;

    //Línea 2:
    var rotulo2  = document.getElementById('rotulo2').value
    var ancho2   = document.getElementById('ancho2').value;

    //Línea 3:
    var rotulo3  = document.getElementById('rotulo3').value
    var ancho3   = document.getElementById('ancho3').value;        

    var x = document.getElementById("letra").selectedIndex;
    var y = document.getElementById("letra").options;
    //alert("Index: " + y[x].index + " is " + y[x].text);
    var fuenteLetrasText = y[x].text;
    var fuenteLetras = y[x].value;

    var x = document.getElementById("tiempos").selectedIndex;
    var y = document.getElementById("tiempos").options;
    //alert("Index: " + y[x].index + " is " + y[x].text);
    var tiemposEntregaText = y[x].text;
    var tiemposEntrega = y[x].value;

    var contornos = document.getElementsByName("contornos");
    var txt = "";
    var i;
    for (i = 0; i < contornos.length; i++) {
        if (contornos[i].checked) {
          txt = contornos[i].value;
        }
    }

    var contorno = txt;

    var conexiones = document.getElementsByName("conexiones");
    var txt = "";
    var i;
    for (i = 0; i < conexiones.length; i++) {
        if (conexiones[i].checked) {
          txt = conexiones[i].value;
        }
    }

    var conexion = txt;    

    var traseraneon = document.getElementsByName("traseraneon");
    var txt = "";
    var i;
    for (i = 0; i < traseraneon.length; i++) {
        if (traseraneon[i].checked) {
          txt = traseraneon[i].value;
        }
    }

    var textoCorrecto;
    switch (document.getElementById("tipoTrasera").value) {
      case 'maderadepino':
        textoCorrecto = "madera de pino";
        break;

        default:
            textoCorrecto = document.getElementById("tipoTrasera").value;
        break;
    }

    var tipoTrasera = textoCorrecto;
    var trasera = txt;

    var sujecion = document.getElementsByName("sujecion");
    var txt = "";
    var i;
    for (i = 0; i < sujecion.length; i++) {
        if (sujecion[i].checked) {
          txt = sujecion[i].value;
        }
    }

    var textoCorrecto;
    switch (document.getElementById("tipoSujecion").value) {
      case 'ancladoalapared':
        textoCorrecto = "anclado a la pared";
        break;

      case 'colgadoaltecho':
        textoCorrecto = "colgado al techo";
        break;

      case 'colgadocomouncuadro':
        textoCorrecto = "colgado como un cuadro";
        break;

      case 'sinsujecion':
        textoCorrecto = "sin sujeción";
        break;                          

        default:
            textoCorrecto = document.getElementById("tipoSujecion").value;
        break;
    }

    var tipoSujecion = textoCorrecto;
    var sujecionNeon = txt;

    var dimmer = document.getElementsByName("dimmer");
    var txt = "";
    var i;
    for (i = 0; i < dimmer.length; i++) {
        if (dimmer[i].checked) {
          txt = dimmer[i].value;
        }
    }

    var textoCorrecto;
    switch (document.getElementById("tipoDimmer").value) {
      case 'condimmer':
        textoCorrecto = "con dimmer";
        break;

      case 'sindimmer':
        textoCorrecto = "sin dimmer";
        break;

        default:
            textoCorrecto = document.getElementById("tipoDimmer").value;
        break;
    }

    var tipoDimmer = textoCorrecto;
    var dimmerNeon = txt;       

    var colores = document.getElementsByName("colores");
    var txt = "";
    var i;
    for (i = 0; i < colores.length; i++) {
        if (colores[i].checked) {
          txt = colores[i].value;
        }
    }

    var color = txt;

    //Línea 1:
    var anchocm     = document.getElementById("ancho").value;//ancho;///72/0.393701;
    var alturacm    = document.getElementById("altura").value;

    //Línea 2:
    var anchocm2    = document.getElementById("ancho2").value;//ancho;///72/0.393701;
    var alturacm2   = document.getElementById("altura2").value;

    //Línea 3:
    var anchocm3    = document.getElementById("ancho3").value;//ancho;///72/0.393701;
    var alturacm3   = document.getElementById("altura3").value;

    //ancho del SVG línea 1:
    var anchoSVG    = document.getElementById('anchoSVG').value;
    //ancho del SVG línea 2:
    var anchoSVG2   = document.getElementById('anchoSVG2').value;
    //ancho del SVG línea 3:
    var anchoSVG3   = document.getElementById('anchoSVG3').value;

    var anchoSVGCorreccion  = anchoSVG * 0.76;
    var anchoSVGCorreccion2 = anchoSVG2 * 0.76;
    var anchoSVGCorreccion3 = anchoSVG3 * 0.76;

    var costoTransformador  = Number(document.getElementById('costoTransformador').value);

    document.getElementById('impuesto').value = document.getElementById('iva').value;
    //Calculo el precio del rótulo y lo envío al campo oculto en el formulario del carrito:

    /*console.log("Ancho SVG Path A en cm: " + anchoSVG);
    console.log("Ancho SVG Path B en cm: " + anchoSVGCorreccion.toFixed(3));
    console.log("Ancho en cm: " + anchocm);
    console.log("Altura en cm: " + alturacm);
    console.log("Tamaño de letra: " + alto);
    //console.log("Alto en px: " + altopx);
    console.log("Trasera Neon: " +trasera);
    console.log("Sujecion Neon: " + sujecionNeon);
    console.log("dimmerNeon: "+ dimmerNeon);
    console.log("Tiempo entrega: "+ tiemposEntrega);
    console.log("Costo Transformador: "+ costoTransformador);*/

    //console.log("-----------------------------------------------");

    var cn_precio_metro_neon    = document.getElementById("cn_precio_metro_neon").value;

    var altoTotal;

    if ( (rotulo != "") && (rotulo2 == "") && (rotulo3 == "")){
        var altoTotal = Number(alturacm);
    }else if ( (rotulo != "") && (rotulo2 != "") && (rotulo3 == "")){
        var altoTotal = Number(alturacm) * 2;
    }else if ( (rotulo != "") && (rotulo2 != "") && (rotulo3 != "")){
        var altoTotal = Number(alturacm) * 3;
    }

    var anchoMayor = 0;

    for (var i = 0; i < 3; i++) {
       
       if ( Number(anchocm) > Number(anchoMayor) ){
        var anchoMayor = anchocm;
       }

       if ( Number(anchocm2) > Number(anchoMayor) ){
        var anchoMayor = anchocm2;
       }

       if ( Number(anchocm3) > Number(anchoMayor) ){
        var anchoMayor = anchocm3;
       }       

    }

    //console.log(anchoMayor);

    traseraNeon     = Number(anchoMayor) * Number(altoTotal) * Number(trasera);
    //traseraNeon     = Number(anchocm) * Number(alto) * Number(trasera);

    sujecionNeon    = Number(sujecionNeon);
    dimmerNeon      = Number(dimmerNeon);
    tiemposEntrega  = Number(tiemposEntrega);

    tipoLetra       = (Number(anchoSVGCorreccion) / 100) * Number(cn_precio_metro_neon);
    tipoLetra2      = (Number(anchoSVGCorreccion2) / 100) * Number(cn_precio_metro_neon);
    tipoLetra3      = (Number(anchoSVGCorreccion3) / 100) * Number(cn_precio_metro_neon);
    
    /*console.log("Total Trasera: " +anchocm +" x "+alto +" x "+ trasera +" = "+ traseraNeon.toFixed(3));
    console.log("Total sujecion Neon: " + sujecionNeon);
    console.log("Total dimmer Neon: " + dimmerNeon);
    console.log("Total tiempos de entrega: " + tiemposEntrega);
    console.log("Tipo de letra: ("+anchoSVGCorreccion +"/100) x 7 = "+ tipoLetra.toFixed(3));*/

    //((Tipo de letra + trasera de neón + sujeción del neón + dimmer ) * 3) + tiempo de entrega

    subTotalprecio     = ((tipoLetra + tipoLetra2 + tipoLetra3 + traseraNeon + sujecionNeon + dimmerNeon + costoTransformador) * 3) + tiemposEntrega ;

    //console.log("Sub total precio: "+ subTotalprecio);
    var iva = Number(document.getElementById('iva').value / 100);

    //precioFinal     = subTotalprecio;//(subTotalprecio * iva) + subTotalprecio;

    precioFinal     = (subTotalprecio * iva) + subTotalprecio;

    //console.log("Precio: (("+tipoLetra.toFixed(3)+" + "+traseraNeon.toFixed(3)+" + "+sujecionNeon+" + "+dimmerNeon+" + "+costoTransformador+") x 3 ) + "+tiemposEntrega+" = "+precioFinal.toFixed(3));


    if(document.getElementById("altura").value == 0){
        precioFinal = 0;
    }

    var data = {
        'action': 'jnjtest',
        'rotulo': rotulo,
        'rotulo2': rotulo2,
        'rotulo3': rotulo3,
        'alto': alto,
        'ancho': ancho,    
        'fuenteLetras': fuenteLetras,
        'tiemposEntrega': tiemposEntrega,
        'contorno': contorno,
        'conexion': conexion,
        'trasera': trasera,
        'tipoTrasera': tipoTrasera,
        'sujecionNeon': sujecionNeon,
        'tipoSujecion': tipoSujecion,
        'dimmerNeon': dimmerNeon,
        'color': color,
        'anchocm': anchocm,
        'fuenteLetrasText': fuenteLetrasText,
        'tiemposEntregaText': tiemposEntregaText,
        'subTotalprecio': subTotalprecio.toFixed(2),
        'precioFinal': precioFinal.toFixed(2),

    };

    var protocolo = window.location.protocol;
    var hostname = window.location.hostname;
    var carpeta = window.location.pathname;
    //console.log(carpeta);
    var str = carpeta;
    var res = str.split("/");
    //console.log(res[1]);

    var url = protocolo +'//'+ hostname;

    if(hostname == 'localhost'){

        var ruta = url + "/"+res[1]+"/wp-admin/admin-ajax.php";

    }else{

        var ruta = url + "/wp-admin/admin-ajax.php";
    }

     //document.getElementById("myDIV").style.display = 'inline';
     document.getElementById("myDIV").style.visibility = 'visible';

     document.getElementById("myButton").style.visibility = 'hidden';

    // Hacemos la petición al endpoint de WordPress..
    jQuery.post(ruta, data, function (response) {

        // Contenido de la función de callback, que se lanza cuando tenemos la respuesta..
        //console.log(response);

        if(response != null){
            //document.getElementById("myDIV").style.display = "none";
            document.getElementById("myDIV").style.visibility = "hidden";
            
            document.getElementById("myButton").style.visibility = "visible";
        }
       
        document.getElementById('response').innerHTML = response;

        document.getElementById('precioOtraVez').innerHTML = precioFinal.toFixed(2) + "&euro; <div style='font-size: 10px; color: #870D00'> IVA incluido</div><span>Envío Gratuito</span>";


        document.getElementById('precio_final_rotulo').value     = precioFinal.toFixed(2);
        document.getElementById('subTotalPrecio').value          = subTotalprecio.toFixed(2);
        document.getElementById('texto_rotulo').value            = rotulo;
        document.getElementById('fuenteLetrasText').value        = fuenteLetrasText;
        document.getElementById('anchocm').value                 = anchocm;
        
        document.getElementById('alturacm').value                 = alturacm;

        document.getElementById('altocm').value                  = alto;
        document.getElementById('tipoTraseraSumario').value      = tipoTrasera;
        document.getElementById('tipoSujecionSumario').value     = tipoSujecion;
        document.getElementById('tipoDimmerSumario').value       = tipoDimmer;
        document.getElementById('tiempoEntregaSumario').value    = tiemposEntregaText;
        document.getElementById('tipoContornoSumario').value     = contorno;
        document.getElementById('tipoConexionSumario').value     = conexion;
        document.getElementById('colorSumario').value            = color;
        document.getElementById('pathA').value                   = anchoSVG;
        document.getElementById('pathB').value                   = anchoSVGCorreccion.toFixed(3);

        document.getElementsByName("add-to-cart")[0].style.visibility = 'visible';
    });

}

/*
window.addEventListener("load", function() {
  //Texto
  var cadena = prompt('Dibuja aquí lo que desees', '');
  var canvas = document.getElementById("myCanvas");
  var ctx = canvas.getContext("2d");
  var posInicial = { x: 10, y: 50 };

  ctx.font = "30px Arial";
  ctx.fillText(cadena, posInicial.x, posInicial.y);

  //Obtenemos el acho:
  var ancho = ctx.measureText(cadena).width;
  console.log('Ancho:', ancho, 'píxeles.');

});
*/

function textoRadio(input,name){

    document.getElementById(input).value = name;
}

function miToolTip(div,valor){

    document.getElementById('toolTip_'+div).style.visibility = "visible";
    document.getElementById('toolTip_'+div).innerHTML = valor;
}

function miToolTipOut(div){

    //document.getElementById('toolTip_'+div).innerHTML = "";
    document.getElementById('toolTip_'+div).style.visibility = "hidden";
}

function ajustarTamano(valor){

    document.getElementById('muestra').style.fontSize = valor+"em";
}