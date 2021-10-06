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
        $ano = $_GET["an"];
        $idade = 2014 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos";
        $tipo = ($idade>=18 && $idade<65)?"OBRIGATORIO":"NAO OBRIGATORIO";
        echo "<br/>E dessa forma seu voto e $tipo";


        /**
         * && AND
         * V + V = V
         * V + F = F
         * F + V = F
         * F + F = F
         * 
         * || OR
         * V + V = V
         * V + F = V
         * F + V = V
         * F + F = F
         * 
         * !  NOT
         * V = F
         * F = V
         * 
         * XOR (OR Exclusive)
         * V + V = F
         * V + F = V
         * F + V = V
         * F + F = F
         */
    ?>
</body>
</html>