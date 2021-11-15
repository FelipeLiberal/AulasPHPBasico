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
        //Mostra uma sub string de $site, da primeira a última posicao informada
        $site = "Curso em Vídeo";
        $sub = substr($site, 0, 5);
        //$sub = substr($site, 6);
        //$sub = substr($site, -5);
        //$sub = substr($site, -5, 2);
        echo "$sub";
    ?>
</body>
</html>