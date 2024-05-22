<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Divisibilidade</title>
</head>
<body>
    <h1>Verificador de Divisibilidade</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['numero'])) {
        $numero = (int)$_GET['numero'];

        if ($numero % 10 == 0) {
            echo "$numero é divisível por 10.";
        } elseif ($numero % 5 == 0) {
            echo "$numero é divisível por 5.";
        } elseif ($numero % 2 == 0) {
            echo "$numero é divisível por 2.";
        } else {
            echo "$numero não é divisível por 10, 5 ou 2.";
        }
    }
    ?>

    <form method="GET" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Verificar Divisibilidade</button>
    </form>
</body>
</html>
