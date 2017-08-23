<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cuadrado de un numero</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <h1 class="alert alert-success">Cuadrado de un numero</h1>
      <form class="" action="index2.php" method="post">
        <div class="row ">
        <label for="" >Digite un numero </label>
        <input class="" type="number" name="numero" value="">
      </div><br>
        <input  class="btn btn-success rounded-circle "type="submit" name="" value="Evaluar" required>
      </form>
      <br>
      <h4 class="alert alert-info">
        <?php
        function cuadrado($numero){
          echo pow($numero,2);
        }
        if ($_POST) {
          error_reporting(0);
          cuadrado($_POST['numero']);
        }else {
          echo "Digite un valor";
        }
        ?>
       </h4>
       <a href="index.php" class="btn btn-success">Inicio</a>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
