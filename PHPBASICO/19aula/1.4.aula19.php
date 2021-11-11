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
        print_r($v);
        array_unshift($v, "O"); //Coloca no início do array
        print_r($v);
    ?>
    </pre>
</body>
</html>