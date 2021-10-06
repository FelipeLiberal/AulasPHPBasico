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
        /*
            Pré-incremento $a = $a+1 -> ++$a
            Pós-incremento $a = $a+1 -> $a++
            Pré-decremento $a = $a-1 -> --$a
            Pós-decremento $a = $a-1 -> $a--
        */

        /*Esse exercício pretende demonstrar o uso de operadores
        de incremento e decremento */
        $atual = $_GET["aa"]; #Essa parte pega o ano na URL
        //echo "O ano atual e $atual e o ano anterior e " . $atual--; /*Pós-decremento */
        echo "O ano atual e $atual e o ano anterior e " . --$atual; /*Pré-decremento */

        $a = 3;
        $b = $a;
        $b += 5;
        echo "<br/>";
        echo $a;
        echo $b;
        echo "<br/>";

        $c = 3;
        $d = &$c; //$d recebendo valor de $c por referência
        $d += 5;
        echo $c;
        echo $d;
        
    ?>
</body>
</html>