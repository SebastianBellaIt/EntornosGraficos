
<?php
session_start();
if (!isset($_SESSION['user']) && !isset($_SESSION['pass']) ) {
      echo "<h1> sesion no iniciada </h1>";
      die;
}else {
      $user = $_SESSION['user'];
      $pass = $_SESSION['pass'];
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
      <title>Practica 7 Ejercicio 5</title>
    </head>
  <body>
    <nav class="navbar">
      <div class="boton">
      </div>
    </nav>
    <div class="jumbotron text-center">
      <h1> Pagina 2 </h1>
    </div>
    <div class="row">
      <div class="col">
        <h1>Datos de sesion</h1>
        <p>Usuario: <?php echo $user; ?></p>
        <p>Clave: <?php echo $pass ?></p>
      </div>
    </div>


  </body>
</html>
