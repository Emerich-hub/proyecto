function vaciosLogin() {

  var usuario= document.getElementById("txtusuario").value;
  var contra= document.getElementById("txtpass").value;


  if (usuario === "") {
    alert("Escribe un usuario valido");
    return false;
  }

  if( contra === ""){
    alert("Escribe una Contraseña valida");
    return false;
  }
}
