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
        //TIPOS DE DADOS PRIMITIVOS
        //Inteiro: int, integer
        //Real: real, float, double             typecast => coerção 
        //Caractere: string
        //Lógico: true = 1, false = vazio -> lógico é número inteiro
        $n = 4;
        $nome = "Felipe";
        //$no = (int)"10Felipe";
        //$no = (int)"Felipe10";
        $idade = 28;

        echo $nome." tem ".$idade." anos <br> "; //com concatenação
        echo "$nome tem $idade anos <br>"; //tudo dentro de aspas
        echo '$nome tem $idade anos '; //com aspas simples, é mostrada a variável, porque ela não é interpretada
    ?>
</body>
</html>