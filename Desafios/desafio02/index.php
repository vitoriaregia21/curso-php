<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Sortear - DESAFIO 02</h1>
        <?php 
        $sorteado = rand(0,100);

        echo "O número gerado é $sorteado";
    ?>
        <button onclick="javascript:document.location.reload()">Gere outro número</button>
    </main>


</body>

</html>