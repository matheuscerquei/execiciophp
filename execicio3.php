<!DOCTYPE html>
<html lang="en">
<head>
<meta name="autor" content="matheus cerqueira">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>execicio3</title>
</head>
<body>

<form action="" method="post">
  <label for="num1">Número 1:</label>
  <input type="number" id="num1" name="num1"><br><br>
  <label for="operador">Operador:</label>
  <select id="operador" name="operador">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select><br><br>
  <label for="num2">Número 2:</label>
  <input type="number" id="num2" name="num2"><br><br>
  <input type="submit" value="Calcular">
</form>



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