<?php
if (isset($_COOKIE[contador])) {
  $con = $_COOKIE[contador] + 1;
  setcookie(contador, $con, time() + 30879000 );
}else {
  $con=0;
  setcookie(contador, $con, time() + 30879000 );
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_zafi.css">
    <meta charset="utf-8">
    <title>Practica 7 Ejercicio 2</title>
  </head>
  <body>
    <nav class="navbar"></nav>
    <div class="jumbotron text-center">
     <?php if($_COOKIE[contador]==0){
       echo "<h1> Bienvenid@ a esta pagina con cookies </h1>";
     }else {
       echo "<h1> Cantidad de veces que visito esta pagina: ". ($_COOKIE[contador] +1) ." </h1>";
     }
      ?>
    </div>
  </body>
</html>
