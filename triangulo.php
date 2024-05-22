<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Triangulo</title>
</head>
<body>
    <h1>Triangulo</h1>
    <form>
        <label for="lado1">Primeiro Lado:</label>
        <input type="number" class="form-control" name="lado1" id="lado1"><br>
        <label for="lado2">Segundo Lado:</label>
        <input type="number" class="form-control" name="lado2" id="lado2"><br>
        <label for="lado3">Terceiro Lado:</label>
        <input type="number" class="form-control" name="lado3" id="lado3"><br>
        <input type="submit" class="btn btn-primary" value="Calcular">
    </form>

    <?php
    $lado1 = (int) $_GET['lado1'];
    $lado2 = (int) $_GET['lado2'];
    $lado3 = (int) $_GET['lado3'];
    
    // Verificar se os lados formam um triângulo
    if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
        // Verificar a classificação do triângulo
        if ($lado1 == $lado2 && $lado2 == $lado3) {
            echo "O triângulo é equilátero.";
        } elseif ($lado1 == $lado2 || $lado2 == $lado3 || $lado1 == $lado3) {
            echo "O triângulo é isósceles.";
        } else {
            echo "O triângulo é escaleno.";
        }
    } else {
        echo "Os lados não formam um triângulo.";
    }
    
    ?>

</body>
</html>