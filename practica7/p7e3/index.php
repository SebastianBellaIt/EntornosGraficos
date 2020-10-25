<?php
if ( isset($_COOKIE[last_u]) ) {
  $last_user = $_COOKIE[last_u];
}
else
{
  if ( isset($_POST[usuario]) ) {
      setcookie(last_u , $_POST[usuario], time() + 30879000 );
  }
  else
  {
    $last_user='Ingrese el nombre de usuario';
  }
}
if ( isset($_POST[usuario]) ) {
    setcookie(last_u , $_POST[usuario], time() + 30879000 );
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylo.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <form class="" action="index.php" method="post">
        <input class="text_camp" type="text" name="usuario" value="<?php  echo $last_user; ?>">
        <input type="submit" name="" value="Confimar">
      </form>
    </div>
  </body>
</html>
