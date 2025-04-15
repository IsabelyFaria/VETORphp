<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<?php

$frasesHomem = [
    "A coragem é a primeira das qualidades humanas.",
    "O sucesso é a soma de pequenos esforços repetidos dia após dia.",
    "Parede rebocada evita pedrada."
];

$frasesMulher = [
    "Louça lavada evita paulada.",
    "Seja a mudança que você deseja ver no mundo.",
    "Acredite no seu poder e conquiste o impossível."
];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $genero = $_POST['genero'] ?? '';
    $sorte = '';

    if ($genero === 'homem') {
        $sorte = $frasesHomem[array_rand($frasesHomem)];
    } elseif ($genero === 'mulher') {
        $sorte = $frasesMulher[array_rand($frasesMulher)];
    } else {
        $sorte = "Por favor, escolha um gênero válido.";
    }
}


if (!empty($sorte)): ?>
    <h2>Sua sorte:</h2>
    <p><?= htmlspecialchars($sorte) ?></p>
<?php endif; ?>

    
    <form action="index.php" method="post">
    <button type="submit">Voltar</button>
</div>

</body>
</html>