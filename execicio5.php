<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>execicio5</title>
</head>
<body>
    <h1>Tigrinho</h1>
    <form action="" method="post">
        <label for="option">Selecione a Opção:</label>
        <select id="option" name="option">
            <option value="1">1 - Ver Saldo</option>
            <option value="2">2 - Depositar</option>
            <option value="3">3 - Sacar</option>
            <option value="4">4 - Sair</option>
        </select>
        <input type="submit" value="Submit">
    </form>

    <?php
    $balance = 900;

    if (isset($_POST['option'])) {
        $option = $_POST['option'];

        switch ($option) {
            case '1': ?>
                <p>Seu saldo atual é: R$ <?= $balance ?></p>
                <?php break;
            case '2': ?>
                <form action="" method="post">
                    <label for="amount">Digite o valor a ser depositado:</label>
                    <input type="number" id="amount" name="amount">
                    <input type="hidden" name="option" value="2">
                    <input type="submit" value="Depositar">
                </form>
                <?php
                if (isset($_POST['amount'])) {
                    $amount = $_POST['amount'];
                    $balance += $amount; ?>
                    <p>Valor depositado com sucesso! Seu novo saldo é: R$ <?= $balance ?></p>
                <?php }
                break;
            case '3': ?>
                <form action="" method="post">
                    <label for="amount">Digite o valor a ser sacado:</label>
                    <input type="number" id="amount" name="amount">
                    <input type="hidden" name="option" value="3">
                    <input type="submit" value="Sacar">
                </form>
                <?php
                if (isset($_POST['amount'])) {
                    $amount = $_POST['amount'];
                    if ($amount <= $balance) {
                        $balance -= $amount; ?>
                        <p>Valor sacado com sucesso! Seu novo saldo é: R$ <?= $balance ?></p>
                    <?php } else { ?>
                        <p>Saldo insuficiente!</p>
                    <?php }
                }
                break;
            case '4': ?>
                <p>Até logo!</p>
                <?php exit;
                break;
            default: ?>
                <p>Opção inválida!</p>
        <?php }
    }
    ?>
</body>
</ht