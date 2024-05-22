<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Meses</title>
</head>
<body>
    <h1>Escolha um número para ver o mês correspondente</h1>
    <form method="get">
        <label for="num">Insira um número:</label>
        <input type="number" class="form-control" name="num" min="1" max="12"><br>
        <input type="submit" class="btn btn-primary" value="Enviar">
    </form>
    <?php
    if (isset($_GET['num'])) {
        $num = (int) $_GET['num'];
        if ($num >= 1 && $num <= 12) {
            // Escrever o mês correspondente
            switch ($num) {
                case 1:
                    echo "O mês correspondente é Janeiro.";
                    break;
                case 2:
                    echo "O mês correspondente é Fevereiro.";
                    break;
                case 3:
                    echo "O mês correspondente é Março.";
                    break;
                case 4:
                    echo "O mês correspondente é Abril.";
                    break;
                case 5:
                    echo "O mês correspondente é Maio.";
                    break;
                case 6:
                    echo "O mês correspondente é Junho.";
                    break;
                case 7:
                    echo "O mês correspondente é Julho.";
                    break;
                case 8:
                    echo "O mês correspondente é Agosto.";
                    break;
                case 9:
                    echo "O mês correspondente é Setembro.";
                    break;
                case 10:
                    echo "O mês correspondente é Outubro.";
                    break;
                case 11:
                    echo "O mês correspondente é Novembro.";
                    break;
                case 12:
                    echo "O mês correspondente é Dezembro.";
                    break;
            }
        } else {
            // Informar que não existe mês com este número
            echo "Não existe mês com o número $num.";
        }
    }
    ?>
</body>
</html>