<?php
    class Kubus {
        public $sisi;

        public function volume() {
            $volume = pow($this->sisi, 3);
            return $volume;
        } 

        public function luas() {
            $luas = 6 * pow($this->sisi, 2);
            return $luas;
        }
    }

    $kubus = new Kubus;
    $kubus->sisi = 9;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugass</title>

</head>
<body>
    <h1>Volume : <?= $kubus->volume(); ?></h1>
    <h1>Luas : <?= $kubus->luas(); ?></h1>

</body>
</html>