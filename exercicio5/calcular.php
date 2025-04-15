<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<?php
$colors = [
    "Azul" => "O azul transmite tranquilidade e serenidade.",
    "Vermelho" => "O vermelho simboliza paixão e energia.",
    "Verde" => "O verde representa esperança e natureza.",
    "Amarelo" => "O amarelo é a cor da alegria e otimismo.",
    "Roxo" => "O roxo está associado à criatividade e mistério."
];

$selectedColor = "";
$colorPhrase = "";

if (isset($_POST['gerar_cor'])) {

    $selectedColor = array_rand($colors);
    $colorPhrase = $colors[$selectedColor];
}

if ($selectedColor): ?>
    <h2 style="color: <?= strtolower($selectedColor); ?>;">
        Cor Sorteada: <?= $selectedColor; ?>
    </h2>
    <p><?= $colorPhrase; ?></p>
<?php endif; ?>

<form action="index.php" method="post">
<button type="submit">Voltar</button>

</div>

</body>
</html>
