<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Valores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Conversor de Moedas</h1>
    <main>
    <?php
        //cotação vinda do banco central
        
        $cotacao = 5.17;
        $real = $_REQUEST["din"] ?? 0;
        $dolar = $real / $cotacao;

        //echo "Seus R\$" . number_format($real,2,",",".") . " equivalem a US\$" . number_format($dolar, 2,",",".");
        //biblioteca intl

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD")."</strong></p>";
    ?>
    </main>
    <button onclick="javascript:history.go(-1)">voltar</button>
</body>
</html>

