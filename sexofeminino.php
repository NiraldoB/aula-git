<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação de Candidatura</title>
</head>
<body> 
    <h1>Avaliação de Candidatura</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nome']) && isset($_GET['sexo']) && isset($_GET['idade'])) {
        $nome = $_GET['nome'];
        $sexo = $_GET['sexo'];
        $idade = (int)$_GET['idade'];

        if ($sexo == 'feminino' && $idade < 25) {
            echo "$nome ACEITA.";
        } else {
            echo "$nome NÃO ACEITA.";
        }
    }
    ?>

    <form method="GET" action="">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select><br><br>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required><br><br>

        <button type="submit">Avaliar Candidatura</button>
    </form>
</body>
</html>