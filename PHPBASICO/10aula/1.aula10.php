<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="exercicio01.php">
        Numero: <input type="number" name="num"><br>
        <fieldset><legend>Operacao</legend>
            <input type="radio" name="oper" id="dobro" value="1" checked>
            <label for="dobro">Dobro</label>
            <input type="radio" name="oper" id="cubo" value="2">
            <label for="cubo">Cubo</label>
            <input type="radio" name="oper" id="raiz" value="3">
            <label for="raiz">Raiz Quadrada</label>
        </fieldset>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>