<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
$valorinserido = $_GET["numero"] ?? 0;
?>

<body>
    <main>
        <h1>Informe seu salário - Desafio 07</h1>
        <form action="" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="numero" id="numero" value="<?= $valorinserido ?>" step="0.01">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <?php
        $salariomin = 1380;
       
        $valorinserido_formatado = number_format($valorinserido,'2', ',', '.');
        $qtd_salarios = intdiv($valorinserido,$salariomin);
        $salario_min_formatado = number_format($salariomin,'2', ',', '.');

        $parteinteira = floor($valorinserido);
        $partefrac = $valorinserido-$parteinteira;
        $resto = $valorinserido % $salariomin;
        $sobra = $resto + $partefrac;
        $formatar_sobra = number_format($sobra, '2', ',', '.');
        
        if($valorinserido< $salariomin){
            print "<p> O valor inserido é menor que <strong> 1 salário mínimo  </strong> </p>";
        }else if($valorinserido > $salariomin){
            print "<p> O Salário inserido foi R$ $valorinserido_formatado  </p>";
            print "<p> O Salário inserido equivale a <strong>  $qtd_salarios  salários mínimos  </strong> + R$  $formatar_sobra </p> ";
            print "<p> O salário mínimo é: R$ $salario_min_formatado</p>";
        }else{
            print "<p> O valor inserido equivale a  <strong>  1 salário mínimo  </strong> </p>";
        }
       
        ?>


    </section>
</body>

</html>