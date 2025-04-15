<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4 - Frases de Incentivo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Escolha seu time de futebol</h1>
    <form action="calcular.php" method="post">
        <label for="time">Selecione um time:</label>
        <select name="time" id="time" required>
            <option value="">-- Selecione --</option>
            <option value="Palmeiras">Palmeiras</option>
            <option value="Corinthians">Corinthians</option>
            <option value="São Paulo">São Paulo</option>
            <option value="Santos">Santos</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
</div>

</body>
</html>