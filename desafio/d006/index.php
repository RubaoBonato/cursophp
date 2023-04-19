<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 006</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $dividendos = $_GET["d1"] ?? 0;
    $divisor = $_GET["d2"] ?? 1;
    ?>
    <main>
        <H1>Anatomia de uma divisão</H1>
        <form action="" method="get">
            <label for="d1">Dividendos</label>
            <input type="number" name="d1" id="d1" min="0" value="<?=$dividendos?>">
            <label for="d2">Divisor</label>
            <input type="number" name="d2" id="d2" min="1" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da divisão</h2>
        <?php
        //cálculo
        $quociente = intdiv($dividendos, $divisor);
        $resto = $dividendos % $divisor;

       // echo "<ul>";
       // echo "<li>Dividendo: $dividendos</li>";
       // echo "<li>Divisor: $divisor</li>";
       // echo "<li>Quociente: $quociente</li>";
       // echo "<li>Resto: $resto</li>";
       // echo "</ul>";
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendos?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>