<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Funcion par o impar</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <h1 class="alert alert-success">Funcion par o impar</h1>
      <form class="" action="index6.php" method="post">
        <div class="row ">
        <label for="" >Digite un numero = </label>
        <input class="" type="number" name="numero" value="">
      </div><br>
        <input  class="btn btn-success rounded-circle "type="submit" name="" value="Evaluar" required>
      </form>
      <br>
      <h4 class="alert alert-info">
        <?php
        function parimpar($numero){
          if ($numero%2==0) {
            echo "El numero es <strong>par</strong>";
          }else {
              echo "El numero es <strong>impar</strong>";
          }
        }if ($_POST) {
          parimpar($_POST['numero']);

        }
        ?>
       </h4>
       <a href="index.php" class="btn btn-success">Inicio</a>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
