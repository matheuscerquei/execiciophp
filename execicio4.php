<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="autor" content="matheus cerqueira">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>execicio4</title>
</head>
<body>
   
<form action="verificar_login.php" method="post">
    <label for="nomeUsuario">Nome de usuário:</label>
    <input type="text" id="nomeUsuario" name="nomeUsuario"><br><br>
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha"><br><br>
    <input type="submit" value="Entrar">
</form>

<?php
    $nomeUsuario = $_POST["nomeUsuario"]?? null;
    $senha = $_POST["senha"]?? null;

    if($nomeUsuario == "admin" && $senha == "1234"){
        echo "Login bem-sucedido";
    }else{
        echo"Login ou senha incorretos";
    }
    ?>
    
</body>
</html>