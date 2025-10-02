<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $idade = 18;

    if ($idade >= 18) {
        echo "Você é maior de idade.";
    }
    ?>

    <?php
    
    $hora = 2;

    if ($hora >= 0 && $hora <= 11) {
        echo "Bom dia!";
    } else if ($hora >= 12 && $hora <= 18) {
        echo "Boa tarde!";
    } else if($hora >= 19 && $hora <= 23){
        echo "Boa noite!";
    }else{echo "hora desconhecida"; }

    

    ?>
</body>
</html>