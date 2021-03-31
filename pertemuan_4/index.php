<?php
    require 'Tabung.php';
    // superglobal variable $_GET $_POST\
    // $_GET
    // bisa ditulis melalui url (?key=value)

    // $_POST
    // isset untuk mengecek apakah sudah ditekan
    // if (isset($_POST['submit-btn'])) {
    //     var_dump($_POST);
    // }

    // ternary operator
    //(condition) ? (statement1) : (statement2)

    // Tabung
    // $luas = 0;
    // $volume = 0;
    // if(isset($_POST['submit'])) {
    //     $diameter = $_POST['diameter'];
    //     $tinggi = $_POST['tinggi'];

    //     $radius = $diameter / 2;
    //     $luas = 2 * pi() * $radius * ($radius + $tinggi);
    //     $volume = pi() * $radius * $radius * $tinggi;

    //     echo "Diameter : $diameter <br>";
    //     echo "Tinggi : $tinggi <br>";
    // }
    
    $tabung = new Tabung;
    if(isset($_POST['submit'])) {
        // $tabung = new Tabung($_POST['diameter'], $_POST['tinggi']);

        $tabung->setDiameter($_POST['diameter']);
        $tabung->setHeight($_POST['tinggi']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- form bisa untuk mengirim superglobal variable -->

    <!-- <form action="" method="post">
        <input type="text" name="nama">
        <button name="submit-btn">Submit</button>
    </form> -->

    <ul>
        <li>Diameter : <?= $tabung->getDiameter(); ?></li>
        <li>Radius : <?= $tabung->getRadius(); ?></li>
        <li>Tinggi : <?= $tabung->getHeight(); ?></li>
    </ul>

    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name="submit">Hitung</button>
    </form>

    <hr>
    <ul>
        <li>Luas Permukaan : <?= $tabung->luas(); ?></li>
        <li>Volume : <?= $tabung->volume(); ?></li>
    </ul>
</body>
</html>