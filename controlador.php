<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Controlador</title>

</head>
<body>

  <?php

  require 'funcionesDB.php';

  if (isset($_POST['btnEntrar'])) {
    $usu = $_POST['txtusuario'];
    $cont = $_POST['txtpass'];

    $status = validarUsuario($usu, $cont);

    if ($status === 1) {
      session_start();
      $_SESSION['usuarioS'] = $usu;

      echo "<script>alert('Bienvenidos AutoPartesEmerich') </script>";
      echo "<script>window.location='inicio.php' </script>";
    } else {
      echo "<script>alert('Revisa tus credenciales') </script>";
      echo "<script>window.location='index.php' </script>";
    }
  }
  if (isset($_POST['btnGreg'])) {

    $nom = $_POST['txtNombre'];
    $veh = $_POST['txtvehiculo'];
    $adq = $_POST['txtadquisicion'];
    $ven = $_POST['txtventa'];

    $status = guardarregistro($nom, $veh, $adq, $ven);
        if ($status === 1) {
          echo "<script>alert('Pieza guardada en BD'); </script>";
          echo "<script>window.location='Consultar.php'; </script>";
        } else {
          echo "<script>alert('Pieza no guardado'); </script>";
          echo "<script>window.location='Registrar.php'; </script>";
        }
      }

      if (isset($_POST['btnEliminarpieza'])) {
      $id = $_POST['idEliminar'];
      $status = Eliminarpieza($id);

      if ($status == 1) {
        echo "<script>alert('Pieza no eliminada'); </script>";
        echo "<script>window.location='Consultar.php'; </script>";
      } else {
        echo "<script>alert('Pieza eliminada'); </script>";
        echo "<script>window.location='Consultar.php'; </script>";
      }
    }
    if (isset($_POST['btnRegresar'])) {
      echo "<script> window.location='Consultar.php';</script>";
    }

    if (isset($_POST['btnAct'])) {
    //determina si una variable va a estar definida y no es null
    //enviar los datos invisibles al videojuego
    $id = $_POST['txtId'];
    $nom = $_POST['txtNombre'];
    $veh = $_POST['txtvehiculo'];
    $adq = $_POST['txtadquisicion'];
    $ven = $_POST['txtventa'];

    $status = actualizarpieza($nom, $veh, $adq, $ven, $id);
   if ($status == 1) {
     echo "<script>alert('Pieza se actualizo'); </script>";
     echo "<script> window.location='Consultar.php';</script>";
   } else {
     echo "<script>alert('Pieza no se actualizo'); </script>";
     echo "<script> window.location='Consultar.php';</script>";
   }
 }
?>
</body>

</html>
