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
        include "funcoes.php"; //carrega arquivo que não é obrigatório
        //require "funcoes2.php"; //carrega arquivo que é obrigatório
        //include_once "funcoes2.php"; //carrega arquivo que não é obrigatório, uma vez
        //require_once "funcoes2.php"; //carrega arquivo que é obrigatório, uma vez
        echo "<h1>Testando novas funcoes</h1>";
        ola();
        mostraValor(4);
        echo "<h2>Finalizando Programa...</h2>";
    ?>
</body>
</html>

<!--
    include (é incluir) e require (é requerir) códigos externos

    ->Com include, se arquivo externo não é carregado, ele executará normalmente até incluir
    ->Com require, se arquivo externo não é carregado, ele para a execução (porque é obrigatório)

    - include: carrega arquivo não obrigatório, várias vezes
    - include_once: carrega arquivo não obrigatório, uma vez
    - require: carrega arquivo obrigatório, várias vezes
    - require_once: carrega arquivo obrigatório, uma vez

    include_once e require_once carregam arquivo uma vez. Se
    arquivo já estiver carregado, ele carregará novamente
-->