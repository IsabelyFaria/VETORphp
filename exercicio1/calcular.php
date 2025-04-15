<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['numero'])) {
        $randomNumber = rand(0, 99);
        echo "<p>Número gerado: <strong>$randomNumber</strong></p>";
    }
    ?>
    <form action="index.php" method="post">
    <button type="submit">Voltar</button>