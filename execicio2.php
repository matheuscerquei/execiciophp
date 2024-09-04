<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="autor" content="matheus cerqueira">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 2</title>
</head>
<body>
<form action="" method="post">
    <label for="nota">Nota:</label>
    <input type="number" id="nota" name="nota" min="0" max="10">
    <input type="submit" value="Classificar">

    <?php
    $nota = $_POST["nota"];
    
    if($nota > 0 && $nota < 10){
        
    switch($nota){
        case 10:
            $classificacao ="A";
            break;
        case 9:
            $classificacao = "B";
            break;
        case 8:
        case 7:
            $classificacao ="c"; 
            break;
        case 6:
        case 5:
            $classificacao = "d";
        break;

        default:
        $classificacao = "f";
        break;                    
    }
    echo "nota: $nota - Classificacao";
}else{
    echo "Nota invalida. por favor, insira uma nota entre 0 a 10.";
}
    ?>
</form>
</body>
</html>