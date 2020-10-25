<?php
if (isset($_POST[email])) {
  include('sql.php');
  $c = "'";
  $vSql = "SELECT * FROM alumnos where mail='" . $_POST[email]  . $c;
  #$vSql = "SELECT * FROM alumnos";
  $vResultado = mysqli_query($link, $vSql);
  $total_registros=mysqli_num_rows($vResultado);
  if ($total_registros == 1) {
    session_start();
    $fila = mysqli_fetch_array($vResultado);
    $_SESSION['cod'] = $fila['codigo'];
    $_SESSION['nombre'] = $fila['nombre'];
    $_SESSION['codigocurso'] = $fila['codigocurso'];
    $_SESSION['mail'] = $fila['mail'];
  }
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <meta name="view" content="">
    <meta charset="utf-8">
    <title>Practica 7 Ejercicio 6</title>
  </head>
  <body>
    <nav class="navbar">
      <div class="boton">
      </div>
    </nav>
    <div class="jumbotron text-center">
      <h1>Listado de alumnos</h1>
    </div>
    <div class="row">
      <div class="col">

        <?php
          if ($total_registros == 1){
            ?>
            <h1>Alumno encontrado</h1>
            <p> ¿Desea ver los datos cargados? </p>
            <br>
            <a class="btn btn-primary" href="page2.php" role="button">Ver datos</a>
              <?php
          }else{
            ?>
            <h1>Alumno no encontrado</h1>
            <?php
          }
        ?>
      </div>
    </div>
  </body>
</html>
