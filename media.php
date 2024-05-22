<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média dos alunos do 3A SESI Moreno</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Média dos alunos do 3A SESI Moreno</h1>

        <?php
        // Verificando se o formulário foi enviado via POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recebendo as notas do formulário
            $nota1 = isset($_POST['nota1']) ? (float)$_POST['nota1'] : 0;
            $nota2 = isset($_POST['nota2']) ? (float)$_POST['nota2'] : 0;
            $nota3 = isset($_POST['nota3']) ? (float)$_POST['nota3'] : 0;

            // Recebendo o nome do formulário
            $nome = isset($_POST['NomeAluno']) ? htmlspecialchars($_POST['NomeAluno']) : '';

            // Calculando a média
            $media = ($nota1 + $nota2 + $nota3) / 3;

            // Arredondando para remover as casas decimais
            $media = number_format($media, 0, '.', '');

            // Verificando se o aluno foi aprovado ou reprovado
            $resultado = ($media >= 7) ? "Aprovado" : "Reprovado";

            // Exibindo a média e o resultado
            echo '<div class="alert alert-info">';
            echo "Nome do aluno: " . $nome . "<br>";
            echo "Sua média é: " . $media . "<br>";
            echo "Você está $resultado.<br>";
            echo '</div>';
        }
        ?>

        <form method="GET" action="" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="NomeAluno">Nome do aluno:</label>
                <input type="text" class="form-control" id="NomeAluno" name="NomeAluno" required>
                <div class="invalid-feedback">
                    Por favor, insira o nome do aluno.
                </div>
            </div>

            <div class="form-group">
                <label for="nota1">Insira sua nota 1:</label>
                <input type="number" class="form-control" id="nota1" name="nota1" min="0" max="10" step="0.1" required>
                <div class="invalid-feedback">
                    Por favor, insira a primeira nota.
                </div>
            </div>

            <div class="form-group">
                <label for="nota2">Insira sua nota 2:</label>
                <input type="number" class="form-control" id="nota2" name="nota2" min="0" max="10" step="0.1" required>
                <div class="invalid-feedback">
                    Por favor, insira a segunda nota.
                </div>
            </div>

            <div class="form-group">
                <label for="nota3">Insira sua nota 3:</label>
                <input type="number" class="form-control" id="nota3" name="nota3" min="0" max="10" step="0.1" required>
                <div class="invalid-feedback">
                    Por favor, insira a terceira nota.
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Form validation script -->
    <script>
        // Exemplo de JavaScript de desabilitação de envio de formulário se houver campos inválidos
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>
</html>
