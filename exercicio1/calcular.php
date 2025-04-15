<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1 - Gerar um Número Aleatório</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="container">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['numero'])) {
        $randomNumber = rand(0, 99);
        echo "<p>Número gerado: <strong>$randomNumber</strong></p>";
    }
    ?>
    
    <form action="index.php" method="post">
    <button type="submit">Voltar</button>
    </div>

</body>
</html>
