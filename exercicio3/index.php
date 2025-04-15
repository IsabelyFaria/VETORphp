<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3 - Sorte do Dia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Escolha seu gênero e receba uma sorte!</h1>
    <form action="calcular.php" method="post">
        <label>
            <input type="radio" name="genero" value="homem"> Homem
        </label>
        <label>
            <input type="radio" name="genero" value="mulher"> Mulher
        </label>
        <br><br>
        <button type="submit">Gerar Sorte</button>
        </form>
</div>

</body>
</html>