<?php
$link = mysqli_connect("localhost", "entornos", "entornos") or die ("Problemas de conexión a la base de
datos");
  mysqli_select_db($link, "compras");
?>
