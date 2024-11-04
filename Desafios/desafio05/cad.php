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
    $numeroinserido = $_GET["numero"];

    $numeroorganizado = number_format($numeroinserido, 3, ",",".");
    
    $parteinteira = floor($numeroinserido);

    $parteinteiraf = number_format($parteinteira, 0, ",", ".");

    $partefrac = number_format($numeroinserido-$parteinteira, 3, ",");
    
    

    echo(" O número informado pelo usuário foi: $numeroorganizado  <br> Parte inteira: $parteinteiraf <br> parte fracionária: $partefrac
    
    ");
?>
    <button onclick="javascript:history.go(-1)">voltar</button>
</main>


<body>

</body>

</html>