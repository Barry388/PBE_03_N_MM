<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
$nome =$_POST["nome"];
$data =$_POST["data"];
$av1 =$_POST["AV1"];
$av2 =$_POST["AV2"];

$media = ($av1 + $av2) / 2;


if($media < 5.0){
    echo "Aluno Reprovado!";
}
else if($media >= 6.0 )
{
    echo"Aluno está Aprovado!";

}else{

    echo"nota digitada Inválida!";
}

?>
</body>
</html>