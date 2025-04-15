<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Gerador de Números Aleatórios</h1>
    </form>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numero = intval($_POST['numero']);
        if ($numero > 0) {
            $aleatorio = rand(0, $numero);
            echo "<p>O número aleatório gerado foi: <strong>$aleatorio</strong></p>";
        } else {
            echo "<p>Por favor, insira um número maior que zero.</p>";
        }
    }
    ?>
    
    <form action="index.php" method="post">
    <button type="submit">Voltar</button>
</div>
</body>
</html>