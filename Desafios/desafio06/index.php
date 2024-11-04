<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $dividendo = $_GET["d1"] ?? 0;
    $divisor = $_GET["d2"] ?? 1;
    ?>
    <main>
        <h2> Anatomia de uma divisão - DESAFIO 06</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
            <label for="dividendo">dividendo</label>
            <input type="number" name="d1" id="d1" value="<?= "dividendo" ?>">
            <label for="divisor">divisor</label>
            <input type="number" name="d2" id="d2" value="<?= "divisor" ?>">
            <input type="submit" value="Analisar">

        </form>

    </main>

    <section>
        <?php 
        print " <p><strong>RESULTADO: </strong></p>";
        $resultado = intdiv($dividendo, $divisor);
        $resto = $dividendo% $divisor;
        print " <p>DIVIDENDO: $dividendo </p>";
        print "<p>DIVISOR: $divisor </p>";
        print "<p>O RESTO: $resto </p>";
        print "<p> RESULTADO DA DIVISÃO: $resultado </p>";
        ?>
    </section>



</body>

</html>