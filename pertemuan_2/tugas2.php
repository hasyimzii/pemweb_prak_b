<?php
    $data = [
        ["kota"=>"Chicago,IL", "populasi" => 2695598],
        ["kota"=>"Dallas, TX", "populasi" => 1197816],
        ["kota"=>"Houston, TX", "populasi" => 2100263],
        ["kota"=>"Los Angeles, CA", "populasi" => 3792621],
        ["kota"=>"New York, NY", "populasi" => 8175133],
        ["kota"=>"Philadelphia,PA", "populasi" => 1526006],
        ["kota"=>"Phoenix, AZ", "populasi" => 1445632],
        ["kota"=>"San Antonio, TX", "populasi" => 1327407],
        ["kota"=>"San Diego, CA", "populasi" => 1307402],
        ["kota"=>"San Jose, CA", "populasi" => 945942]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
    <style> 
        .warna1{
            background-color: #b4aee8;
        }

        .warna2{
            background-color: #ffd384;
        }
    </style>
</head>
<body>
    <h1> Table Data Penduduk </h1>
    <table border="2" cellpadding="5" cellspacing="5" align="center">
        <th class="warna1"> Nama Kota</th>
        <th class="warna1"> Populasi</th>
    <?php foreach ($data as $d): ?>
        <tr>
        <td><?php echo $d["kota"]; ?> </td>
        <td><?php echo number_format($d["populasi"]); ?> </td>
        </tr>
    <?php endforeach; ?>
    </table>

    <br>

    <?php
        function sort_arr($data,$subkey) {
            foreach($data as $k=>$v) {
                $b[$k] = $v[$subkey];
            }
            arsort($b);
            foreach($b as $key=>$val) {
                $c[] = $data[$key];
            }
            return $c;
        }

        $sort = sort_arr($data,'populasi');
    ?>

    <h1> Table Data Penduduk </h1>
    <table border="2" cellpadding="5" cellspacing="5" align="center">
        <th class="warna2"> Nama Kota</th>
        <th class="warna2"> Populasi</th>
   
    <?php foreach ($sort as $d): ?>
        <tr>
        <td><?php echo $d["kota"]; ?> </td>
        <td><?php echo number_format($d["populasi"]); ?> </td>
        </tr>
    <?php endforeach; ?>
    </table>


</body>
</html>