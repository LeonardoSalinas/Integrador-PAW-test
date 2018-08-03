function checkFormAltaUsuario(){
  var nombre = document.getElementById("nombre").value;
  var apellido = document.getElementById("apellido").value;
  var dni = document.getElementById("dni").value;
  var telefono = document.getElementById("telefono").value;
  var email = document.getElementById("email").value;
  if(nombre == '' || apellido == '' || dni == '' || telefono == '' || email == ''){
    document.getElementById("rspsubmit").innerHTML = ("Por favor, complete todos los campos");
  }else{
    var rspnombre = document.getElementById("rspnombre").innerHTML;
    var rspapellido = document.getElementById("rspapellido").innerHTML;
    var rspdni = document.getElementById("rspdni").innerHTML;
    var rsptelefono = document.getElementById("rsptelefono").innerHTML;
    var rspemail = document.getElementById("rspemail").innerHTML;
    if(rspnombre != "OK" || rspapellido != "OK" || rspdni != "OK" || rsptelefono != "OK" || rspemail != "OK"){
      document.getElementById("rspsubmit").innerHTML = ("Por favor, corrija los campos erroneos");

    }
    else{
      alert("Usuario Correcto");
      document.getElementById("miform").submit();
    }
  }
}

function validarUsuario(campo, valor){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("rsp" + campo).innerHTML = xhttp.responseText;
    }
  }
xhttp.open("GET", "../model/validacionAltaUsuarios.php?campo=" + campo + "&valor=" + valor, true);
xhttp.send();
}


function checkFormAltaCasa(){
  var direccion = document.getElementById("direccion").value;
  var ciudad = document.getElementById("ciudad").value;
  var transaccion = document.getElementById("transaccion").value;
  var tipo = document.getElementById("tipo").value;
  var metros2 = document.getElementById("metros2").value;
  var ubicacion = document.getElementById("ubicacion").value;
  var precio = document.getElementById("precio").value;
  var estado = document.getElementById("estado").value;
  var ambientes = document.getElementById("ambientes").value;
  var dormitorios = document.getElementById("dormitorios").value;
  var coordenadas = document.getElementById("coordenadas").value;

  if(direccion == '' || ciudad == '' || transaccion == '' || tipo == '' || metros2 == '' || ubicacion == '' || estado == '' || ambientes == '' || dormitorios == ''|| metros2 == ''){
    document.getElementById("rspsubmit").innerHTML = ("Por favor, complete todos los campos");
  }else{
    var rspdireccion = document.getElementById("rspdireccion").innerHTML;
    var rspciudad = document.getElementById("rspciudad").innerHTML;
    var rsptransaccion = document.getElementById("rsptransaccion").innerHTML;
    var rsptipo = document.getElementById("rsptipo").innerHTML;
    var rspmetros2 = document.getElementById("rspmetros2").innerHTML;
    var rspubicacion = document.getElementById("rspubicacion").innerHTML;
    var rspprecio = document.getElementById("rspprecio").innerHTML;
    var rspestado = document.getElementById("rspestado").innerHTML;
    var rspambientes = document.getElementById("rspambientes").innerHTML;
    var rspdormitorios = document.getElementById("rspdormitorios").innerHTML;
    var rspcoordenadas = document.getElementById("rspcoordenadas").innerHTML;

    if(rspdireccion != "OK" || rspciudad != "OK" || rsptransaccion != "OK" || rsptipo != "OK" || rspmetros2 != "OK" || rspubicacion != "OK" || rspprecio != "OK" || rspestado != "OK" || rspambientes != "OK" || rspdormitorios != "OK" || rspcoordenadas != "OK"){
      document.getElementById("rspsubmit").innerHTML = ("Por favor, corrija los campos erroneos");
    }
    else{
      alert("Casa Correcto");
      document.getElementById("miform").submit();
    }
  }
}

function validarCasa(campo, valor){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("rsp" + campo).innerHTML = xhttp.responseText;
    }
  }
xhttp.open("GET", "../model/validacionAltaCasas.php?campo=" + campo + "&valor=" + valor, true);
xhttp.send();
}

function pipe(){
alert("ESOOOOOOOO");
}