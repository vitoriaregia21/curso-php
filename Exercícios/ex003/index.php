<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>

<body>
    <h1>Testes de tipos primitivos</h1>
    <?php

    $numero = 300;
    echo "O valor da variável $numero";
    $v = 300;
    var_dump($v);

    $hexa = 0x1A;
    $float  = (int) 3e2;
    echo "O valor em hexa é $hexa";
    echo "O valor em potencia é $float";

    $solteira = true;
    var_dump($solteira);
    print "Você é solteira $solteira";

    $vert = [3,"vitoria",5, 1.1];
    var_dump($vert);

    Class Pessoa {
        private string $nome;
    };

    
    $nova = new Pessoa;
    var_dump($nova);
    ?>
</body>

</html>