<?php
if(isset($_GET['tocar'])){
  if (isset($_COOKIE['cant_p'])) {
      setcookie('cant_p', $_COOKIE['cant_p']+1, time()+ 30879000);
      setcookie('cod_p'.$_COOKIE['cant_p'], $_GET['tocar'], time()+ 30879000);
      }else {
      setcookie('cant_p', 1, time()+ 30879000);
      setcookie('cod_p0', $_GET['tocar'], time()+ 30879000);
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
      <h1>Su carrito de compras</h1>
    </div>
    <br>
    <div class="container">
    <div class="row">

  <  <?php
    include('sql.php');
    for ($i=0; $i < $_COOKIE['cant_p']; $i++) {
    $vSql = 'SELECT * FROM catalogo WHERE id=' . $_COOKIE['cod_p'.$i];
    $vResultado = mysqli_query($link, $vSql);
    $total_registros = mysqli_num_rows($vResultado);
    if ($total_registros > 0) {
      $fila = mysqli_fetch_array($vResultado);
      ?>

      <div class="col align-self-center">
      <h1><?php echo $fila['nombre']; ?></h1>
      <img src="<?php echo $fila['imgurl'];?>" alt="">
      <h2>$<?php echo $fila['precio'];?></h2>
      </div>
    <?php }} ?>
</div>
</div>
  </body>
</html>
