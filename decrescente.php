<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem Decrescente</title>
</head>
<body>
<h1>Ordem Decrescente</h1>

<form method="get" action="">
    <label for="num1">Numero 1:</label>
    <input type="number" name="num1" id="num1" placeholder="Insira seu numero 1" required>
    <br>
    <label for="num2">Numero 2:</label>
    <input type="number" name="num2" id="num2" placeholder="Insira seu numero 2" required>
    <br>
    <label for="num3">Numero 3:</label>
    <input type="number" name="num3" id="num3" placeholder="Insira seu numero 3" required>
    <br>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Lendo os números de entrada
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];

    // Função para ordenar os números em ordem decrescente
    function ordenarDecrescente($num1, $num2, $num3) {
        // Colocando os números em um array
        $numeros = array($num1, $num2, $num3);

        // Ordenando o array em ordem decrescente
        rsort($numeros);

        // Retornando o array ordenado
        return $numeros;
    }

    // Chamando a função para ordenar os números
    $numerosOrdenados = ordenarDecrescente($num1, $num2, $num3);

    // Imprimindo os números em ordem decrescente
    echo "Os números em ordem decrescente são: ";
    foreach ($numerosOrdenados as $numero) {
        echo $numero . " ";
    }
}
?>
</body>
</html>
