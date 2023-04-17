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
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y") ;

        //dados abertos do banco central
        //https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/aplicacao#!/recursos/CotacaoDolarPeriodo#eyJmb3JtdWxhcmlvIjp7IiRmb3JtYXQiOiJqc29uIiwiJHRvcCI6MSwiZGF0YUluaWNpYWwiOiIwNC0xMC0yMDIzIiwiZGF0YUZpbmFsQ290YWNhbyI6IjA0LTE3LTIwMjMiLCIkb3JkZXJieSI6IgQyBCBkZXNjIn0sInByb3ByaWVkYWRlcyI6WzAsMl19

        $url='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true); //false objeto - true array
        $cotacao = $dados["value"][0]["cotacaoCompra"];

        $real = $_REQUEST["din"] ?? 0;
        $dolar = $real / $cotacao;

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD")."</strong></p>";
    ?>
    </main>
    <button onclick="javascript:history.go(-1)">voltar</button>
</body>
</html>

