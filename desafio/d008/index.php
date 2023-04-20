<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $numero = $_GET["num"] ?? 1;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
        $rq = $num ** (1/2);
        $rc = $num ** (1/3);
        echo "<p>Analisando o número <strong>$numero</strong> temos </p>";
        echo "<lu><li>A sua raiz quadrada é ";
        ?>
    </section>
</body>
</html>