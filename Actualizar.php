<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="js/validacioninputs.js"> </script>
  <link rel="stylesheet" href="css/Registro.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <title>Registro de AutoPartes</title>

</head>

<body>
  <!--Comienza la Barra de Navegacion -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <a class="navbar-brand" href="#">AutoPartesEmerich</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link"  href="inicio.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Registrar.php">Registrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Consultar.php">Consultar</a>
        </li>
      </ul>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <?php
    require 'funcionesDB.php'; //IMPORTAMOS  EL ARCHIVO FUNCIONES
    $consId = consultarId($_REQUEST['id']); //EJECUTAMOS LA CONSULTA Y LA GUARDAMOS EN $consId
    $arrAct = mysqli_fetch_array($consId); //convertimos el result set en un arreglo
    ?>
  <h1> Actualizar AutoParte </h1>

  <div class="container-fluid">

      <form action="controlador.php" method="POST" class="contenedorform" onsubmit="return vaciosLogin2();">
        <input type="hidden" placeholder="id" name="txtId" value="<?php echo $_REQUEST['id']; ?>">

            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-4 col-form-label">Nombre del pieza: </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="txtNombre" name="txtNombre" value="<?php echo $arrAct['nombrev']; ?>">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-4 col-form-label">Vehiculo: </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="txtvehiculo" name="txtvehiculo" value="<?php echo $arrAct['vehi']; ?>">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-4 col-form-label">Precio de Adquisicion: </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="txtadquisicion" name="txtadquisicion" value="<?php echo $arrAct['precioa']; ?>">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-4 col-form-label">Precio de Venta: </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="txtventa" name="txtventa" value="<?php echo $arrAct['preciov']; ?>">
              </div>
            </div>

            <div class="d-grid gap-1 col-4 mx-auto">
              <button type="submitt" class="btn btn-dark btn-outline-success btn-lg " name="btnAct">Guardar </button>
            </div>

    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>
