<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia " . date("d/M/Y"); 
        echo "A hora atual é " . date("G:i:s");

        $nome = "vitoria";
        $sobrenome = "regia";
        const CIDADE = "Recife";
        $nome = "Carlos";
    
        echo "parabéns, $nome $sobrenome " . CIDADE;
    ?>

</body>

</html>