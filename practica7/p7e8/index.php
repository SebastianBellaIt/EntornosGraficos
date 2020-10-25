<?php
if (isset($_POST['busca'])) {
  $start = "%'";
  $end = "%'";
  include('sql.php');
  $vSql = ' SELECT * FROM buscador WHERE cancion LIKE "%'. $_POST['busca'].'%"' ;
  $vResultado = mysqli_query($link, $vSql);
  $total_registros = mysqli_num_rows($vResultado);
  }?>
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
       <h1>Buscador de canciones</h1>
     </div>
     <div class="row">
       <div class="col">
         <form class="" action="index.php" method="post">
           <p>Nombre de la cancion: <input type="text" style="width:200px;" name="busca" value="">
           <input class="btn btn-primary" type="submit" name="" style="margin-left:20" value="Buscar">
          </p>
         </form>
           <br>
         <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Cancion</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($fila = mysqli_fetch_array($vResultado)) {?>
              <tr>  
                <th scope="row"><?php echo $fila['cancion']; ?></th>
              </tr>
              <?php } ?>
            </tbody>
          </table>
       </div>
     </div>
   </body>
 </html>
