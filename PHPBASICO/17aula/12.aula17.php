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
        //str_replace substitui (troca) uma string por outra informada na função
        $frase = "Gosto de estudar Matemática!!!";
        $novaFrase = str_replace("Matemática", "PHP", $frase); //Para ignorar case sensitive: str_ireplace
        echo "$frase";
        echo "<br>";
        echo "A palavra Matemática foi substituída por PHP, ficando:";
        echo "<br>";
        echo "$novaFrase";
    ?>
</body>
</html>