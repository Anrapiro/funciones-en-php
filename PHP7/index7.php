<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Validacion de caracter numero</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <h1 class="alert alert-success">Validacion de caracter numero</h1>
      <form class="" action="index7.php" method="post">
        <div class="row ">
        <label for="" >Digite caracter = </label>
        <input class="" type="text" name="numero" value="">
      </div><br>
        <input  class="btn btn-success rounded-circle "type="submit" name="" value="Evaluar" required>
      </form>
      <br>
      <h4 class="alert alert-info">
        <?php
        function validacion($caracter){
          if (is_numeric($caracter)) {
           echo "'$caracter' SI es numérico";
          }else {
        echo "'{$caracter}' NO es numérico";
    }
  }if ($_POST) {
    validacion($_POST['numero']);
  }else {
    echo "No se ha asignado ningun valor";
  }
        ?>
       </h4>
       <a href="index.php" class="btn btn-success">Inicio</a>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
