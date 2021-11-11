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
        sort($v);     /*=> Ordenando Vetores */
        //rsort($v);  /*=> Ordem Reversa */
        //asort($v);  /*=> Ordenação Associativa */
        //arsort($v); /*=> Ordem Associativa Reversa */
        //ksort($v);  /*=> Ordenando por Chaves */
        //krsort($v); /*=> Ordem Reversa por Chaves */
        print_r($v);
    ?>
    </pre>
</body>
</html>