<!DOCTYPE html>
<html lang="en">
<head>
<meta name="autor" content="matheus cerqueira">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>execicio3</title>
</head>
<body>


    <?php
    
    $num1 = $_POST["num1"];
  $operador = $_POST["operador"];
  $num2 = $_POST["num2"];

  switch ($operador) {
    case '+':
      $resultado = $num1 + $num2;
      break;
    case '-':
      $resultado = $num1 - $num2;
      break;
    case '*':
      $resultado = $num1 * $num2;
      break;
    case '/':
      if ($num2 != 0) {
        $resultado = $num1 / $num2;
      } else {
        $resultado = "Erro: Divisão por zero!";
      }
      break;
    default:
      $resultado = "Erro: Operador inválido!";
  }

  echo "Resultado: $resultado";


    
    
    ?>
</body>
</html>