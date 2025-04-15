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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $team = $_POST['time'];
    $phrases = [
        'Palmeiras' => [
            'Avanti Palestra!',
            'O Verdão nunca desiste!',
            'Palmeiras, o maior campeão do Brasil!'
        ],
        'Corinthians' => [
            'Vai, Corinthians!',
            'Aqui é Corinthians!',
            'O Timão é raça e coração!'
        ],
        'São Paulo' => [
            'Vamos, Tricolor!',
            'O Soberano nunca para!',
            'São Paulo, orgulho da nossa história!'
        ],
        'Santos' => [
            'Vai pra cima deles, Santos!',
            'O Peixe é tradição!',
            'Santos, o time dos meninos da Vila!'
        ]
    ];

    if (array_key_exists($team, $phrases)) {
        $randomPhrase = $phrases[$team][array_rand($phrases[$team])];
        echo "<p>Time escolhido: <strong>$team</strong></p>";
        echo "<p><strong>$randomPhrase</strong></p>";
        }
    } 
?>

<form action="index.php" method="post">
    <button type="submit">Voltar</button>

</div>

</body>
</html>