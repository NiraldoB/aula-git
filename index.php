<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa PHP</title>
</head>
<body>
    <h1>HTML5 </h1>
    <?php
        $msg = "Bem-vindo "; 
        $user = "Agata";
        echo $msg.$user;

        echo "<br>";

        $dia = "Terça";
        $temperatura = 20;

        if ($temperatura > 25) {
            $clima = "ensolarado";
        } elseif ($temperatura <= 25 && $temperatura >= 18) {
            $clima = "chuvoso";
        } elseif ($temperatura < 18) {
            $clima = "nevando";
        }
        
        echo " O clima hoje está $clima, a temperatura está $temperatura e o dia hoje é $dia feira.";

        echo "<br>";

        $nomes = array("Agatha", "Niraldo", "Eyshila", "Rhuan");

        echo "<br><hr>";

        $total = 0;
        foreach ($nomes as $nome){
            echo "<br>";
            echo $nome;
            $total++;
        }

        echo "<br>";
        echo "<b> Total de nomes: $total </br>";
    ?>
</body>
</html>