<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        $v = array("A", "J", "M", "X", "K");
        $tot = count($v); // Conta quantos elementos têm dentro do array
        //echo "O vetor tem " . count($v) . " elementos";
        echo "O vetor tem $tot elementos <br/>";
        print_r($v);
        var_dump($v);
    ?>
    </pre>
</body>
</html>