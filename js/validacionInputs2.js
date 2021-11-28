function vaciosLogin2(){
    var pieza= document.getElementById("txtNombre").value;
    var vehiculo= document.getElementById("txtvehiculo").value;
    var adquisicion= document.getElementById("txtadquisicion").value;
    var preciv= document.getElementById("txtventa").value;

    if(pieza===""){
      alert("Escribe un nombre de la pieza");
      return false;
    }
     if(vehiculo===""){
       alert("Escribe un nombre de vehiculo");
       return false;
     }
     if(adquisicion===""){
       alert("Escribe un precio de adquisicion");
       return false;
     }
     if(preciv===""){
       alert("Escribe un precio de venta");
       return false;
     }
   }
