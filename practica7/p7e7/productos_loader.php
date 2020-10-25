<?php
include('sql.php');
$vSql = "SELECT * FROM catalogo";
$vResultado = mysqli_query($link, $vSql);
$total_registros = mysqli_num_rows($vResultado);
$cantColumnas = 4;
$canntFilas = $total_registros / $cantColumnas;
$control =0;
?>


<?php
for ($i=0; $i < $canntFilas ; $i++) {
  ?>

<div class="row">
  <?php
  for ($j=0; $j < $cantColumnas ; $j++) {
    $fila = mysqli_fetch_array($vResultado);
    $control++;
    if ($control > $total_registros ) {
      break;
    }
    ?>

  <div class="col">
    <h1><?php echo $fila['nombre']; ?></h1>
    <img src="<?php echo $fila['imgurl'];?>" alt="">
    <h2>$<?php echo $fila['precio'];?></h2>
    <a class="btn btn-primary" href="carrito.php?tocar=<?php echo $fila['id']; ?>" role="button">Agregar al carrito</a>
  </div>

  <?php  } ?>
</div>
<?php  } ?>
