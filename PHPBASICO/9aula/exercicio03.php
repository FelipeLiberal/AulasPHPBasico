<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $nt1 = isset($_GET["nt1"])?$_GET["nt1"]:1;
        $nt2 = isset($_GET["nt2"])?$_GET["nt2"]:1;
        $media = ($nt1 + $nt2)/2;
        if ($media < 6) {
            $situacao = "REPROVADO";
            $cor = "red";
        }
        elseif ($media >= 6 && $media < 7) {
            $situacao = "RECUPERAÇÃO";
            $cor = "orange";
        }
        else {
            $situacao = "APROVADO";
            $cor = "blue";
        }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span {
            color: <?php echo $cor;?>;
        }
    </style>
</head>
<body>
    <?php
        echo "A média entre $nt1 e $nt2 é igual a $media";
        echo "<br>Situação do aluno: <span>$situacao</span>";
    ?>
</body>
</html>