<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php 
    $numeroinserido = $_GET['numero']?? 1;
?>

<body>
    <main>
        <h1>Informe um número - Desafio 08</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method=" get">
            <label for="valor">Número</label>
            <input type="number" name="numero" id="numero" value="<?php echo "$numeroinserido"?>">

            <input type="submit" value="Calcular Raízes">
        </form>

    </main>

    <section>
        <?php 
        print "Analisando o número $numeroinserido, temos: <br> <br>";
        $raiz_quadrada = sqrt($numeroinserido);
        $raiz_cubica = $numeroinserido ** (1/3);

        $rq_formatada = number_format($raiz_quadrada, '3',',','.');
        $rc_formatada = number_format($raiz_cubica, '3',',','.');


        echo "A sua raiz quadrada é  $rq_formatada <br> <br> ";
        echo "A sua raiz cúbica de é  $rc_formatada ";
        ?>
    </section>

</body>

</html>