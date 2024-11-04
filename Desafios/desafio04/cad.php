<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<main>
    <?php

    $inicio = date("m-d-Y", strtotime("-7days"));
    $fim = date("m-d-Y");

    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);

    $cotacaoatual =  $dados["value"][0]["cotacaoCompra"];


    $valorinserido = $_GET["valor"] ?? 0;
    $valorconvertido  = $valorinserido / $cotacaoatual;
    $formate = number_format($valorconvertido, 2, ',', '.');

    echo ("Em R$ é $valorinserido, convertido em US$ é $formate");
    ?>
    <button onclick="javascript:history.go(-1)">voltar</button>


    <body>

    </body>

</html>