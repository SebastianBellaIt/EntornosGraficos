<?php
if (isset($_COOKIE[est_c])) {
  $estilo = $_COOKIE[est_c];
}else
  {
  if (isset($_GET[estilo]))
  {
      $estilo = $_GET[estilo];
      setcookie('est_c', $estilo, time()+84600);
  }else
    {
      header('Location:select_style.php');
    }
}
if (isset($_GET[estilo]))
{
    $estilo = $_GET[estilo];
    setcookie('est_c', $estilo, time()+84600);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style_g.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <?php switch ( $estilo) {
      case 'rubi':
          echo '<link rel="stylesheet" href="css/style_rubi.css">';
        break;
      case 'zafi':
          echo '<link rel="stylesheet" href="css/style_zafi.css">';
          break;
      case 'emerald':
          echo '<link rel="stylesheet" href="css/style_emerald.css">';
      break;
      default:
        // code...
        break;
    } ?>
  <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <nav class="navbar">
      <div class="boton">
        <a href="select_style.php">Cambiar estilos</a>
      </div>
    </nav>
    <div class="jumbotron text-center">
      <h1> Paginas con estilos personalizados </h1>
    </div>
  </body>
</html>
