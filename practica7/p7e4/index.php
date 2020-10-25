<?php
if (isset($_COOKIE[noticia])) {
    switch ($_COOKIE[noticia]) {
        case 'deportes':
          $direccion='noticias/deportes.php';
          $categoria_p = 'Deportes';
        break;
        case 'politica':
          $direccion='noticias/politica.php';
          $categoria_p = 'Politica';
        break;
        case 'economia':
          $direccion='noticias/economia.php';
          $categoria_p = 'Economia';
        break;
        case 'delete':
          setcookie();
        break;
        default:
          $direccion='formulario.php';
          $categoria_p = 'Formulario';
        break;
  }
}
else {
      $direccion='formulario.php';
      $categoria_p = 'Formulario';
}
if (isset($_GET[cooki])) {
  if ($_GET[cooki] != 'delete') {
      setcookie(noticia, $_GET[cooki], time()+ 30879000);
      switch ($_GET[cooki]) {
          case 'deportes':
            $direccion='noticias/deportes.php';
            $categoria_p = 'Deportes';
          break;
          case 'politica':
            $direccion='noticias/politica.php';
            $categoria_p = 'Politica';
          break;
          case 'economia':
            $direccion='noticias/economia.php';
            $categoria_p = 'Economia';
          break;
          default:
            $direccion='formulario.php';
            $categoria_p = 'Formulario';
          break;
    }
  }else {
      $direccion='formulario.php';
      $categoria_p = 'Formulario';
      setcookie(noticia, ' ', time() - 3600);
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
    <title>InfoSeba</title>
  </head>
  <body>
    <?php include('nav.php'); ?>
    <div class="jumbotron">
      <h1>Portal de noticias</h1>
      <p><?php echo $categoria_p; ?></p>
    </div>
        <?php include($direccion);?>
  </body>
</html>
