<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Conversion de temperatura</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <h1 class="alert alert-success">Conversion de temperatura</h1>
      <form class="" action="index5.php" method="post">
        <div class="row ">
        <label for="" >Ingrese temperatura en grados celsius =</label>
        <input class="rounded bg-info " type="number" name="numero" value="">
        <label for="">Seleccione el tipo de conversion =</label>
        <select class="bg-primary text-white" name="temp">
          <option value="" >Seleccione conversion</option>
          
        <option value="Fahrenheit" >Fahrenheit</option>
        <option value="Kelvin">Kelvin</option>
        </select>
      </div><br>
        <input  class="btn btn-success rounded-circle "type="submit" name="" value="Evaluar" required>
      </form>
      <br>
      <h4 class="alert alert-info">
        <?php
        function conversion ($C,$temp) {
        switch ($temp) {
          case 'Fahrenheit':
            #°F= ºC x 1.8 + 32
            $F=($C*1.8)+32;
            echo "$F";
            break;
            case 'Kelvin':
              # °K = ºC + 273.15.
              $K=$C+273;
              echo "$K";
              break;
          default:
            echo "Seleccione una conversion";
            break;
        }
        }
        if ($_POST) {
          echo "El equivalente es de: ";
          conversion ($_POST['numero'],$_POST['temp']);
          echo "°". $_POST['temp'];
        }else {
          echo "<strong>No se ha definido ningun valor</strong>";
        }
        ?>
       </h4>
       <a href="index.php" class="btn btn-success">Inicio</a>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
