<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
  <label for="numero">Digite um número:</label>
  <input type="number" id="numero" name="numero"><br><br>
  <input type="submit" value="Verificar">
</form>

<?php
$numero = $_POST["numero"]?? null;

if($numero % 2 == 0){
echo "esse numero é par";
}else{
    echo"esse numero é impar";
}


?>

</body>
</html>