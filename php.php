<?php
        $ini_array =  array(
            "Meja"=>array(1, 0.753, 2),
            "Kursi"=>array(0.5, 0.753/2, 4),
            "Aqua"=>array(7.530, 10, 0)
        );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
    }

    th, td {
    text-align: left;
    padding: 16px;
    }

    tr:nth-child(even) {
    background-color: #f2f2f2;
    }
    </style>
</head>
<body>

<table>
  <tr>
    <th>No</th>
    <th>Nama Barang</th>
    <th>Berat (kg)</th>
    <th>Berat (gram)</th>
    <th>Berat (miligram)</th>
    <th>Berat (liter)</th>
    <th>Stok</th>
  </tr>

  <?php 
    $nomor = 1;
    foreach($ini_array as $key => $value):
  ?>
    <tr>
        <td>  <?= $nomor++; ?> </td>
        <td>  <?= $key; ?> </td>
        <td>  <?= $value[0]; ?> </td>
        <td>  <?= $value[0]*1000; ?> </td>
        <td>  <?= $value[0]*1000000; ?> </td>
        <td>  <?= $value[1]; ?> </td>
        <?php 
            if($value[2]!=0){
                echo "<td> $value[2] </td>";
            }
            else{
                $background_color = "style='background-color : red'";
                echo "<td ".$background_color."> <font color = 'white'> Kosong </font> </td>";
            }
        ?>

    </tr> 
    <?php endforeach; ?>
</table>

</body>
</html>