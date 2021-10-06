<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*isset -> operador ternário: para verificar se recebeu valor */
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
        $ano = isset($_GET["ano"])?$_GET["ano"]:0;
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
        $idade = date("Y") - $ano; //Pega o ano corrente com o date
        //Y = pega o ano com número todo. Ex: 2021
        //y = pega o ano com final do número. Ex: 21 (2021)
        echo "$nome e $sexo e tem $idade anos.";
    ?>
    <a href="2.Aula8.php">Voltar</a>
</body>
</html>