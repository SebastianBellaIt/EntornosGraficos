<?php

session_start();
if (isset($_SESSION['cod'])) {
  $flag=1;
}else {
  $flag=0;
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
       <h1>Datos de alumnos</h1>
     </div>
     <div class="row">
       <div class="col">

         <?php if($flag==1){  ?>
           <h1>¡Bienvenido <?php echo $_SESSION['nombre'];?>!</h1>
           <br>
         <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Codigo curso</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"><?php echo $_SESSION['cod']; ?></th>
                <td><?php echo $_SESSION['nombre']; ?></td>
                <td><?php echo $_SESSION['codigocurso'];?></td>
                <td><?php echo $_SESSION['mail']; ?></td>
              </tr>
            </tbody>
          </table>
          <?php }else{ ?>
                <h1>No tiene permiso para ver los datos</h1>
          <?php } ?>
       </div>
     </div>
   </body>
 </html>
