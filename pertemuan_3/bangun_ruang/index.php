<?php
    require 'Bola.php';

    $bola = new Bola;
    $bola->setRadius(47);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>192410101047</title>

</head>
<body>
    <h3>Muhammad Hasyim Asy'ari</h3>
    <h1>Bangun Ruang : Bola</h1>
    
    <ul>
        <li>Jari-jari : <?= $bola->getRadius(); ?></li>
        <li>Volume : <?= $bola->volume(); ?></li>
        <li>Luas : <?= $bola->luas(); ?></li>
    </ul>
</body>
</html>