<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 09</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
$notaum = $_GET["primeiro_valor"] ?? 0;
$pesoum = $_GET["peso_um"] ?? 1;
$notadois = $_GET["segundo_valor"] ?? 0;
$pesodois = $_GET["peso_dois"] ?? 1;

?>

<body>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valorum">1° valor</label>
            <input type="number" name="primeiro_valor" id="primeiro_valor" step="0.01" value="<?php echo "$notaum" ?>">
            <label for=" pesoum">1° peso</label>
            <input type="number" name="peso_um" id="peso_um" value="<?php echo "$pesoum" ?>">
            <label for="valordois">2° valor</label>
            <input type="number" name="segundo_valor" id="segundo_valor" step="0.01" value="<?php echo "$notadois" ?>">
            <label for="pesodois">2° peso</label>
            <input type="number" name="peso_dois" id="peso_dois" value="<?php echo "$pesodois" ?>">

            <input type="submit" value="Calcular médias">
        </form>
    </main>

    <section>
        <?php
        $media_a = ($notaum + $notadois) / 2;

        $nota_com_peso_um = $notaum * $pesoum;
        $nota_com_peso_dois = $notadois * $pesodois;
        $somapesos = $pesoum + $pesodois;

        $media_p = ($nota_com_peso_um + $nota_com_peso_dois) / $somapesos;

        $media_a_format = number_format($media_a, '2', ',');
        $media_p_format = number_format($media_p, '2', ',');

        print "Analisando os valores $notaum e $notadois <br> <br>";

        echo "A Média Aritmética Simples entre os valores é $media_a_format  <br> <br>";
        echo "A Média Aritmética Ponderada com pesos $pesoum e $pesodois é igual a $media_p_format ";
        ?>
    </section>

</body>

</html>