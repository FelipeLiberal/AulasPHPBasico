<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="02idade.php">
        Nome: <input type="text" name="nome"><br>
        Ano de Nascimento: <input type="number" name="ano"><br>
        <fieldset><legend>Sexo</legend>
            <input type="radio" name="sexo" id="masc" value="homem" checked>
            <label for="masc">Masculino</label><br>
            <input type="radio" name="sexo" id="fem" value="mulher">
            <label for="fem">Feminino</label>
        </fieldset><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>