<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 8</title>
</head>
<body>
    gngngg
    <h2>Relacional</h2>
    <?php
    $a=10;
    $b="10";
    echo "Igualdade = ".($a==$b)."<br>";
    echo "Idêntico = ".($a===$b)."<br>";
    echo "Não igual = ".($a!=$b)."<br>";
    echo "Não Idêntico = ".($a!==$b)."<br>";
    ?>

    <?php
    $a=10;
    $b=10;
    $c=11;
    echo "Menor: ".($a<$b)."<br>";
    echo "Menor ou igual: ".($a<=$b)."<br>";
    echo "Maior: ".($c>$b)."<br>";
    echo "Maior ou igual: ".($c>=$b)."<br>";
    ?>

    <h2>Logico</h2>
    <h3>not</h3>
    <?php
    $a=50;
    $b=120;
    $c= ($a<=$b);
    $d= !($a<=$b);
    var_dump($c);
    echo "<br>";
    var_dump($d);
    ?>
    
    <h3>and</h3>
    <?php
    $a=50;
    $b=120;
    $c=200;
    $d=(($a<=$b) and ($a<=$c));
    $e=(($a<=$b) &&  ($a>=$c));
    var_dump($d);
    echo "<br>";
    var_dump($e);
    ?>

    <h3>or</h3>
    <?php
    $a=50;
    $b=120;
    $c=200;
    $d=(($a>=$b) or ($a>=$c));
    $e=(($a>=$b) || ($a<=$c));
    var_dump($d);
    echo "<br>";
    var_dump($e);
    ?>

    <h3>xor</h3>
    <?php
    $a=50;
    $b=120;
    $c=200;
    $d=(($a<=$b) xor ($c<=$a));
    $e=(($a>=$b) xor ($a>=$c));
    var_dump($d);
    echo "<br>";
    var_dump($e);
    ?>

    <h2>ternario</h2>
    <?php
    $a=50;
    $b=120;
    $c=200;
    $d=($a<=$b) ? "Verdadeiro" : "Falso";
    $e=($a>=$c) ? "Verdadeiro" : "Falso";
    echo "d = $d<br>e = $e";
    ?>
</body>
</html>