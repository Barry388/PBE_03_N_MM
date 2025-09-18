<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 7</title>
</head>
<body>
    <h2>Aritméticos</h2>
    <?php
    $a=10;
    $b=2;
    echo "Adição:".($a + $b);//12
    echo "<br>Subtração:".($a - $b);//8
    echo "<br>Multiplicação:".($a * $b);//20
    echo "<br>Divisão:".($a / $b);//5
    echo "<br>Módulo:".($a % $b);//0
    echo "<br>Exponenciação:".($a ** $b);//100
    ?>

    <h2>Atribuição</h2>
    <?php
    $a=10;
    $b=2;
    $a+=$b;
    $b-=5;
    echo "a = ".$a;//12
    echo "<br>b = ".$b;//-3
    $c=11;
    $d=6;
    $c%=$d;
    $d+=$a;
    echo "<br>c = ".$c;//5
    echo "<br>d = ".$d;//18
    ?>

    <h2>Operadores de String</h2>
    <?php
    $a = "Maria ";
    echo "$a <br>";//Maria
    $b = "Leopoldina ";
    echo "$b <br>";//Leopoldina
    echo $a . $b;//Maria Leopoldina
    $b .= $a;
    echo "<br>$b";//Leopoldina Maria
    ?>

    <h2>Operadores de Incremento/Decremento</h2>
    <?php
    $x = 100;
    echo "x = ".++$x;
    echo "<br>x final = ".$x;
    ?>
    
</body>
</html>