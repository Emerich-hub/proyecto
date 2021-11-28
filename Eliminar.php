<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="css/index.css">
  <title>Confirma Eliminacion</title>

</head>

<body>
  <!--Titulo-->
  <h1 style="color: white;" class="display-4 text-center  mt-5 mb-5"> Seguro que quieres Eliminarlo? </h1>

  <div class="container-fluid mt-5 text-light ">
    <form class="contenedorform" action="controlador.php" method="post">

      <div style="color: blue;" class="display-4 from-group text-center mt-5 mb-5">

        <labeL>AutoParte:</label />
        <label> <?php echo $_REQUEST['us']; ?> <label />
      </div>

      <input type="hidden" name="idEliminar" value="<?php echo $_REQUEST['id']; ?>">
      <div class="from-group text-center mt-5 mb-5">
        <button type="submit" name="btnEliminarpieza" class="btn btn-dark btn-outline-success btn-lg">Si, Eliminarlo..</button>
        <button type="submit" name="btnRegresar" class="btn btn-dark btn-outline-success btn-lg ">No, Regresar</button>

      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>
