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
    $valorinserido = $_GET["valor"];
    $valorconvertido  = $valorinserido/5.22;
    $formate = number_format($valorconvertido, 2, ',','.' );

    echo("Em R$ é $valorinserido, convertido em US$ é $formate");
?>
</main>

<body>

</body>

</html>