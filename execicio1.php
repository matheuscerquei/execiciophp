<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="autor" content="matheus cerqueira">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 2</title>
</head>

<body>
    <form action="execicio1.php" method="POST">

        <p>Nome * <input type="text" name="nomecompleto" required="true">
            Sexo * <select name="sexo">
<option value="">selecione</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Outros">Outros</option>
             f</select>

        </p>
        <p> 
            Idade <input type="text" name="idade" id="idade" >
    </p>

    <button> cadastrar </button>
    </form>


    <?php


$idade = $_POST["idade"]?? null;

if($idade >= 18 && !is_null($idade)){

echo "Seja bem vindo";

}else if (!is_null($idade)) {
    
    echo "Idade $idade invalida espere ", (18 - $idade), " anos" ;
}

    ?>
</body>

</html>