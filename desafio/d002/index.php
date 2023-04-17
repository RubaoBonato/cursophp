<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php 002</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php
        $min = 0;
        $max = 100;
        $num = mt_rand($min, $max);
        echo "Gerando um número aleatório entre $min e $max...</br>O valor gerado foi <strong>$num</strong>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
    <!--
    $min = 0;
    $max = 100;
    $num = mt_rand($min, $max);
    // rand() 1951 Linear Congretial  Generator
    // mt_rand() 1997 Mersenne Twister
    // a partir php 7.1  afunção rand é uma apontamento para mt_rand
    // random_int() gera numero aleatórios criptograficamente seguros
    echo "o número aleatório entre $min e $max\n";
    echo "número gerado $num";
    -->
</body>
</html>