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
        //Mostra a posicao da string informada da $frase
        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase, "PHP");
        echo "A string PHP foi encontrada na posicao $pos";
        //Valor verdadeiro: impresso como 1
        //Valor falso: impresso como vazio
    ?>
</body>
</html>