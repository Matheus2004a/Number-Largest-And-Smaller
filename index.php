<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checando maior e menor número - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="Calc-Maior-Menor.php" method="post">
            <h3>Descubra o maior e menor número</h3>
            <fieldset>
                Digite o 1º número: <input type="number" name="valor1" autofocus>
            </fieldset>
            <fieldset>
                Digite o 2º número: <input type="number" name="valor2">
            </fieldset>
            <fieldset>
                Digite o 3º número: <input type="number" name="valor3">
            </fieldset>
            <fieldset>
                Digite o 4º número: <input type="number" name="valor4">
            </fieldset>
            <fieldset>
                Digite o 5º número: <input type="number" name="valor5">
            </fieldset>
            <fieldset>
                <button type="submit">Enviar</button>
                <button type="reset">Limpar</button>
            </fieldset>
        </form>
    </div>
</body>

</html>