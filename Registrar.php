<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="js/validacioninputs2.js"> </script>
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
 <h1> Registro AutoParte </h1>

  <div class="container-fluid">

      <form action="controlador.php" method="POST" class="contenedorform" onsubmit="return vaciosLogin2();">


            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-4 col-form-label">Nombre del pieza: </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="txtNombre" name="txtNombre">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-4 col-form-label">Vehiculo: </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="txtvehiculo" name="txtvehiculo">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-4 col-form-label">Precio de Adquisicion: </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="txtadquisicion" name="txtadquisicion">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-4 col-form-label">Precio de Venta: </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="txtventa" name="txtventa">
              </div>
            </div>

            <div class="d-grid gap-1 col-4 mx-auto">
              <button type="submitt" class="btn btn-dark btn-outline-success btn-lg " name="btnGreg">Guardar </button>
            </div>

    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>
