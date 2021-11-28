<?php

//Funcion para conectar a la BD
function conectarDB()
{
  $servidor = "ls-d1190f4c0f0c6a96c2cf1e7947f77f2b1d5ced06.cni3gv2facev.us-east-1.rds.amazonaws.com";
  $baseDatos = "bdauto";
  $usuario = "dbmasteruser";
  $contra = "oraculo343";

  $conexion = mysqli_connect($servidor, $usuario, $contra, $baseDatos) or die("No se puede conectar");

  return $conexion;
}

function validarUsuario($usu, $cont)
{
  $conex = conectarDB();
  $consulta = "select pass from tbusuarios where usuario  ='$usu' ";

  try {
    $rsval = mysqli_query($conex, $consulta);
    $numReg = mysqli_num_rows($rsval);
    $regBd = mysqli_fetch_array($rsval);
    mysqli_close($conex);

    if (($numReg == 1) && ($cont === $regBd['pass'])) {
      $status = 1;
    } else {
      $status = 0;
    }
    return $status;
  } catch (Exception $e) {
    die('Expecion capturada:' . $e->getMessage());
  }
}

function guardarregistro($nom, $veh, $adq, $ven)
{
  $conex = conectarDB();
  $insertU = "insert into tbconsulta (nombrev,vehi,precioa,preciov) values (?,?,?,?)";
  try {

    $stmt = $conex->prepare($insertU);
    $stmt->bind_param('ssii',$nom,$veh,$adq,$ven);
    $stmt->execute();
    $stmt->close();

    mysqli_close($conex);
    $status = 1;
    return $status;
  } catch (Exception $e) {
    die('Excepcion capturada: ' . $e->getMessage());
  }
}

function Consultar()
{
  $conex = conectarDB();
  $selectvid = "select * from tbconsulta";

  try {
    $rsvideo = mysqli_query($conex, $selectvid);
    mysqli_close($conex);

    return $rsvideo;
  } catch (Exception $e) {
    die('Excepcion capturada: ' . $e->getMessage());
  }
}
function consultarId($id){
        $conex =conectarDB();
        $consxid="select * from tbconsulta where idconsulta='$id'";
        $rsxid=mysqli_query($conex,$consxid);
        mysqli_close($conex);
        return $rsxid;
    }
    function Eliminarpieza($idconsulta){
      $conex = conectarDB();
      $deletepieza = "delete from tbconsulta where idconsulta= ?";
      try {
        $stmt = $conex->prepare($deletepieza);
        $stmt->bind_param('i', $idconsulta);
        $stmt->execute();
        $stmt->close();
        mysqli_close($conex);

        $status = 1;
        return;
        $status;
      } catch (Exception $e) {
        die('Excepcion capturada: ' . $e->getMessage());
      }
    }
  function actualizarpieza($nom, $veh, $adq, $ven, $id)
{
  $conex = conectarDB();
  $insertU = "UPDATE tbconsulta SET nombrev = ?, vehi=?, precioa=?, preciov=? where idconsulta= ?";
  try {
    $stmt = $conex->prepare($insertU);
    $stmt->bind_param('ssddi', $nom, $veh, $adq, $ven, $id);
    $stmt->execute();
    $stmt->close();

    mysqli_close($conex);
    $status = 1;
    return $status;
  } catch (Exception $e) {
    die('Excepcion capturada: ' . $e->getMessage());
  }
}
