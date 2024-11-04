<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1> Resultado:</h1>
    </header>
    <main>
        <?php 

    $n = $_GET["numero"];
    $ant = $_GET["numero"] - 1;
    $suc = $_GET["numero"] + 1;

    echo "O número digitado é: $n \n";
    echo "O seu antecessor é: $ant \n";
    echo "O seu sucessor é: $suc";
    
?>

    </main>

</body>

</html>