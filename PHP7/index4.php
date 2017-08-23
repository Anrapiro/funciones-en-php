<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Operaciones matematicas</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <h1 class="alert alert-success">Operaciones matematicas</h1>
      <form class="" action="index4.php" method="post">
        <div class="row ">
        <label for="" >Digite numero 1 :</label>
        <input class="" type="number" name="n1" value="">
        <label for="" >Digite numero 2 :</label>
        <input class="" type="number" name="n2" value="">
        <label for="">Seleccione la operacion: </label>
        <select class="" name="op">
          <option value="">operaciones</option>
          <option value="Suma">Suma</option>
          <option value="Resta">Resta</option>
          <option value="Multiplicar">Multiplicar</option>
          <option value="Dividir">Dividir</option>
          <option value="Potencia">Potencia</option>
          <option value="Raiz">Raiz</option>
        </select>
      </div><br>
        <input  class="btn btn-success rounded-circle "type="submit" name="" value="Evaluar" required>
      </form>
      <br>
      <h4 class="alert alert-info">
        <?php
        function operaciones($numero1,$numero2,$operacion){
          $resultado=0;
          switch ($operacion) {
            case 'Suma':
            echo $numero1.' + '.$numero2;
            $resultado=$numero1+$numero2;
            echo "<br>El resutado de la suma es : ".$resultado;
              break;
              case 'Resta':
                echo $numero1.' - '.$numero2;
                $resultado=$numero1-$numero2;
                echo "<br>El resutado de la resta es : ".$resultado;
                break;
                case 'Multiplicar':
                  echo $numero1.' * '.$numero2;
                  $resultado=$numero1*$numero2;
                  echo "<br>El resutado de la multiplicacion es : ".$resultado;
                  break;
                  case 'Dividir':
                    echo $numero1.' / '.$numero2;
                    $resultado=$numero1/$numero2;
                    echo "<br>El resutado de la divicion es : ".$resultado;
                    break;
                    case 'Potencia':
                      echo '1: '.$numero1.' ^ 2 '.' <br>'.'2: '.$numero2.' ^ 2';
                      $resultado1=pow($numero1,2);
                        $resultado2=pow($numero2,2);
                      echo "<br>El resutado de la Potencia 1 es : ".$resultado1;
                      echo "<br>El resutado de la Potencia 2 es : ".$resultado2;
                      break;
                      case 'Raiz':
                      echo '1: ²√ '.$numero1.' <br>'.' 2: ²√'.$numero2;
                      $resultado1=sqrt($numero1);
                        $resultado2=sqrt($numero2);
                      echo "<br>El resutado de la Potencia 1 es : ".$resultado1;
                      echo "<br>El resutado de la Potencia 2 es : ".$resultado2;
                        break;
                        default:
                          echo "Seleccione una operacion";
                          break;
          } retunt($resultado);
        }
        if ($_POST) {
          error_reporting(0);
          operaciones($_POST['n1'],$_POST['n2'],$_POST['op']);
        }
        ?>
       </h4>
       <a href="index.php" class="btn btn-success">Inicio</a>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
