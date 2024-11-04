<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
    $va1 = $_GET["v1"] ?? 0;
    $va2 = $_GET["v2"] ?? 0;
?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1"> Valor 1</label>
            <input type="number" name="v1" id="v1" value="va1">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="va2">
            <input type="submit" value="SOMAR">

        </form>
    </main>

    <section id="resultado">
        <h2 style="color: orange;">RESULTADO</h2>

        <?php 
        $total = $va1 + $va2;
        if($total > 0){
            print "<p> A SOMA ENTRE OS VALORES $va1 e $va2 É  <strong>IGUAL A $total </strong> </p>";
        }else{
            print "OS CAMPOS NÃO FORAM PREECHIDOS";
        }
        ?>

    </section>

</body>

</html>