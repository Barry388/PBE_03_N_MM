<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula06_02</title>
</head>
<body>
    <?php
    echo "<pre>";print_r($_REQUEST); echo"<pre>";

    $login= $_POST["login"];
    $senha= $_POST["senha"];

    echo "Login: $login<br>";
    echo "Senha: $senha";

    // echo "Login: ";
    // echo $_GET["login"];
    // echo "<br>";
    // echo "Senha: ";
    // echo $_GET["senha"];
    ?>
</body>
</html>