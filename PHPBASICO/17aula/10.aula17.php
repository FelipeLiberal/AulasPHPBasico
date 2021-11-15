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
        //str_pad: Caber Guanabara em 30 caracteres, complementando com espacos
        $nome = "Guanabara";
        $novo = str_pad($nome, 30, " ", STR_PAD_RIGHT); //STR_PAD_CENTER ou STR_PAD_LEFT
        print("Meu professor $novo é lindo!");
        /*STR_PAD_RIGHT: complementando a direita
         *STR_PAD_CENTER: complementando aos lados, centralizando $novo
         *STR_PAD_LEFT: complementando a esquerda
         */
    ?>
</body>
</html>