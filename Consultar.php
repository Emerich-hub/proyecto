<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/consulta.css">

    <title>Consulta de AutoPartes</title>

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
    <!--Titulo-->
    <h1><span></span> AutoPartes </h1>

    <div class="contenedorform">

        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">Nombre del pieza</th>
                    <th scope="col">Vehiculo</th>
                    <th scope="col">Precio de Adquisicion</th>
                    <th scope="col">Precio de Venta</th>
                    <th scope="col">Actualizar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>

            <tbody>
              <?php
                      require 'funcionesDB.php';
                      $rsUsu = Consultar();

                      while ($arrUsu = mysqli_fetch_array($rsUsu)) {
                                 echo "<tr>
                       <td>" . $arrUsu['nombrev'] . "</td>
                       <td>" . $arrUsu['vehi'] . "</td>
                       <td>" . $arrUsu['precioa'] . "</td>
                       <td>" . $arrUsu['preciov'] . "</td>

          <td> <a href='actualizar.php?" . "&id=" . $arrUsu['idconsulta'] . "&nom=" . $arrUsu['nombrev'] . "&veh=" . $arrUsu['vehi'] . "&adq=" . $arrUsu['precioa'] . "&ven=" . $arrUsu['preciov'] . "'> <img src=imagenes/AA.png> </a> </td>
          <td> <a href='Eliminar.php?id=" . $arrUsu['idconsulta'] . "&us=" . $arrUsu['nombrev'] . "'> <img src=imagenes/DD.png> </a> </td>
          </tr>";
                }
                ?>

            </tbody>
        </table>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>
