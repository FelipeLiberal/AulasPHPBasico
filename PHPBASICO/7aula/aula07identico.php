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
        $a = 3;
        $b = "3";
        $r1 = ($a == $b)?"SIM":"NAO"; //São iguais
        echo "As variáveis A e B são iguais? $r1";
        $r2 = ($a === $b)?"SIM":"NAO"; //São idênticos
        echo "<br/>As variáveis A e B são iguais e do mesmo tipo? $r2";
    ?>
</body>
</html>