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
        //Atribuir valor em variável por &
        $a = 3;
        $b = &$a; //Quando colocado &, o valor de $a é atribuido no lugar do valor de $b
        $b += 5;
        echo "A variavel A vale $a";
        echo "<br/>A variavel B vale $b <br/>";

        //Variáveis de variáveis
        $site = "cursoemvideo";
        $$site = "cursoPHP";

        echo "Conteúdo da variável site e: $site";
        echo "<br/>Conteúdo da variável 2 e: $cursoemvideo";

        /*A variável $cursoemvideo tem esse nome,
        porque herdou do conteúdo da variável $site,
        com o $$site
        */
    ?>
</body>
</html>