<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Dois Números</title>
</head>
<body>
    <h1>Soma de Dois Números</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = (float)$_GET['num1'];
        $num2 = (float)$_GET['num2'];

        $soma = $num1 + $num2;

        if ($soma > 20) {
            $resultado = $soma + 8;
        } else {
            $resultado = $soma - 5;
        }

        echo "A soma dos números é: $soma<br>";
        echo "O resultado ajustado é: $resultado<br>";
    }
    ?>

    <form method="GET" action="">
        <label for="num1">Insira o primeiro número:</label>
        <input type="number" id="num1" name="num1" required><br><br>
        
        <label for="num2">Insira o segundo número:</label>
        <input type="number" id="num2" name="num2" required><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
6
+