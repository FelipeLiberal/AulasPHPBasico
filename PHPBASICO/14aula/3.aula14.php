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
        //Realizar uma soma com múltiplos parâmetros.
        function soma() {
            $p = func_get_args(); 
            /*func_get_args() 
            Pega todos os argumentos (valores passados) 
            e coloca em p. Criará um vetor (variável com índices)
            $p => $p[0], $p[1], $p[2]...*/
            
            $t = func_num_args();
            /*func_num_args()
            Retornará o número de argumentos (valores)
            que foram passados. Se foram passados 5 valores,
            o resultado de $t é igual a 5*/
            $s = 0;
            for($i=0; $i<$t; $i++) {
                $s += $p[$i]; //$s = $s + $p[$i];
            }
            return $s;
        }

        $r = soma(3,5,2, 8, 9, 4);
        echo "A soma dos valores e $r";
    ?>
</body>
</html>