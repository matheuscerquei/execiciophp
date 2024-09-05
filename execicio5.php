<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>execicio5</title>
</head>
<body>
<?php

$balance = 900;


echo "<h1>Tigrinho</h1>";
echo "<form action='' method='post'>";
echo "<label for='option'>Select an option:</label>";
echo "<select id='option' name='option'>";
echo "<option value='1'>1 - Ver Saldo</option>";
echo "<option value='2'>2 - Depositar</option>";
echo "<option value='3'>3 - Sacar</option>";
echo "<option value='4'>4 - Sair</option>";
echo "</select>";
echo "<input type='submit' value='Submit'>";
echo "</form>";


if (isset($_POST['option'])) {
  $option = $_POST['option'];

  switch ($option) {
    case '1':
     
      echo "<p>Seu saldo atual é: R$ $balance</p>";
      break;
    case '2':
      
      echo "<form action='' method='post'>";
      echo "<label for='amount'>Digite o valor a ser depositado:</label>";
      echo "<input type='number' id='amount' name='amount'>";
      echo "<input type='hidden' name='option' value='2'>";
      echo "<input type='submit' value='Depositar'>";
      echo "</form>";
      if (isset($_POST['amount'])) {
        $amount = $_POST['amount'];
        $balance += $amount;
        echo "<p>Valor depositado com sucesso! Seu novo saldo é: R$ $balance</p>";
      }
      break;
    case '3':
    
      echo "<form action='' method='post'>";
      echo "<label for='amount'>Digite o valor a ser sacado:</label>";
      echo "<input type='number' id='amount' name='amount'>";
      echo "<input type='hidden' name='option' value='3'>";
      echo "<input type='submit' value='Sacar'>";
      echo "</form>";
      if (isset($_POST['amount'])) {
        $amount = $_POST['amount'];
        if ($amount <= $balance) {
          $balance -= $amount;
          echo "<p>Valor sacado com sucesso! Seu novo saldo é: R$ $balance</p>";
        } else {
          echo "<p>Saldo insuficiente!</p>";
        }
      }
      break;
    case '4':
     
      echo "<p>Até logo!</p>";
      exit;
      break;
    default:
      echo "<p>Opção inválida!</p>";
  }
}
?>
</body>
</html>