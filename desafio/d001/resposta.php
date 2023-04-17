<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 001</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
            $numero= $_REQUEST["num"] ?? 0;
            $antecessor = $numero - 1;
            $sucessor = $numero +1;
            echo "O número escolhido foi <strong>$numero</strong>";
            echo "<br>O seu <em>antecessor</em> é o $antecessor";
            echo "<br>O seu <em>sucessor</em> é o $sucessor";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
        <!-- onclick="javascript:window.location.href='index.html'" -->
    </main>
</body>
</html>