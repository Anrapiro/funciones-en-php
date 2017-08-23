<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>actividad 5</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <h1 class="alert alert-success">Saludo por pantalla</h1>
      <form class="" action="index1.php" method="post">
        <div class="row ">
        <label for="" >Nombre: </label>
        <input class="" type="text" name="nombre" value="">

      </div><br>
        <input  class="btn btn-success rounded-circle "type="submit" name="" value="Enviar" required>
      </form>
      <br>
      <h4 class="alert alert-info">
        <?php
        error_reporting(0);
          function saludo($nombre){
            if (strcasecmp($nombre, 'antony') == 0) {
              echo "Bienvenido señor: ";
              echo $nombre;
            }else {
              echo "Bienvenido";
            }
          }
          saludo($_POST['nombre']);
        ?>
       </h4>
       <a href="index.php" class="btn btn-success">Inicio</a>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
