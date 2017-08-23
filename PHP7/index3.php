<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Precio promedio de un articulo</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <h1 class="alert alert-success">Precio promedio de un articulo</h1>
      <form class="" action="index3.php" method="post">
        <div class="row justify-content-around">
        <label for="" >precio del articulo </label>
        <input class="" type="number" name="n1" value="" placeholder="Establecimiento N°1">
        <label for="" >precio del articulo </label>
        <input class="" type="number" name="n2" value="" placeholder="Establecimiento N°2">
        <label for="" >precio del articulo </label>
        <input class="" type="number" name="n3" value="" placeholder="Establecimiento N°3">
      </div><br>
        <input  class="btn btn-success rounded-circle "type="submit" name="" value="Evaluar" required>
      </form>
      <br>
      <h4 class="alert alert-info">
        <?php
        function promedioX3($precio1, $precio2, $precio3){
          echo "Precio del articulo en el establecimiento 1: $precio1 <br>";
          echo "Precio del articulo en el establecimiento 2: $precio2 <br>";
          echo "Precio del articulo en el establecimiento 3: $precio3 <br>";
        echo  "Promedio de los articulos= ".$promedio=($precio1+$precio2+$precio3)/3;
        }
        if ($_POST) {
          error_reporting(0);
          promedioX3($_POST['n1'], $_POST['n2'], $_POST['n3']);
        }else {
    echo "No se ha digitado precio";
        }
        ?>
       </h4>
       <a href="index.php" class="btn btn-success">Inicio</a>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
