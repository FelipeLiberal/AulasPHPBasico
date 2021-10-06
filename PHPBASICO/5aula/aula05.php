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
        $n1 = 3;
        $n2 = 2;
        $s = $n1 + $n2;
        $m = ($n1 + $n2) / 2;

        $nu1 = $_GET['a'];
        $nu2 = $_GET['b'];

        echo "A soma vale $s";
        echo "<br>A subtração vale ". ($n1-$n2);
        echo "<br>A multiplicação vale ". ($n1*$n2);
        echo "<br>A divisão vale ". ($n1/$n2);
        echo "<br>O módulo vale ". ($n1%$n2); //resto da divisão 3/2
        echo "<br>A média vale $m";
        echo "<h2>Valores recebidos: $nu1 e $nu2</h2>";
        echo "O valor absoluto de $nu2 é " . abs($nu2); // -5 = 5
        echo "<br>O valor de $nu1<sup>$nu2</sup> é " . pow($nu1, $nu2);
        echo "<br>A raiz de $nu1 e " . sqrt($nu1);
        echo "<br>O valor de $nu2 arredondado é " . round($nu2); //arredonda, conforme matemática
        echo "<br>O valor de $nu2 arredondado é " . ceil($nu2); //sempre arredonda para cima
        echo "<br>O valor de $nu2 arredondado é " . floor($nu2); //sempre arredonda para baixo
        echo "<br>A parte inteira de $nu2 é" . intval($nu2); //trunca valor. 3.999 = 3
        echo "<br>O valor de $nu1 em moeda é R$ " . number_format($nu1,2);


        /*ORDENS DE PRECEDÊNCIA EM CÁLCULOS - MATEMÁTICA 
            1.Parênteses    = ()
            
            2.Divisão       = /
            2.Multiplicação = *
            2.Módulo        = %

            3.Adição        = +
            3.Subtração     = -
        */
    ?>    
</body>
</html>