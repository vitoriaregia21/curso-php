<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>
        <?php
            $name = $_GET["nome"] ?? "Nenhum nome foi informado";
            $sobre = $_GET["sobrenome"] ?? ",nenhum sobrenome foi informado";

            echo " parabéns pela inscrição, $name $sobre";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior </a></p>
    </main>
</body>

</html>