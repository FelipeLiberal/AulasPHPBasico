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
        $p = "Leite";
        $pr = 4.5;
        //echo "O $p custa R$ " . number_format($pr,2);
        printf ("O %s está custando R$ %.2f", $p, $pr);

        // %d = valor decimal (positivo ou negativo)
        // %u = valor decimal sem sinal (apenas positivos)
        // %f = valor real
        // %s = string
    ?>
</body>
</html>