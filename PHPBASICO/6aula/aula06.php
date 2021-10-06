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
        /*Calcular aumento de 10% sobre o preço*/
        $preco = $_GET["p"];
        echo "O preco do produto e R$ " . number_format($preco, 2);
        /*$preco = $preco + ($preco*10/100);
        $preco = $preco + ($preco*0.10);*/
        
        $preco += $preco*10/100;
        echo "<br/> E o novo preco com 10% de aumento sera R$ " . number_format($preco, 2);

        /*$preco -= $preco*10/100;
        echo "<br/> E o novo preco com 10% de desconto sera R$ $preco";*/
    ?>
</body>
</html>