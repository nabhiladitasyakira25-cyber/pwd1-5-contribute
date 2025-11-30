<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 7 Praktikum PWD</title>
    <style>
        body {
            font-family: Arial;
            background: white;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 40px auto;
            background: white;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        }
        th {
            background: lightblue;
        }
        h2 {
            text-align:center;
            color: darkblue;
        }
    </style>
</head>
<body>

<h2>Tabel Data Barang</h2>

<?php
    require "Barang.php";

    $barang = new Barang("barang.json");
    $data = $barang->tampilkanSemua();
?>

<table>
    <tr>
        <th>ID</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Stok</th>
    </tr>

    <?php foreach ($data as $b): ?>
    <tr>
        <td><?= $b['id']; ?></td>
        <td><?= $b['nama']; ?></td>
        <td><?= $b['harga']; ?></td>
        <td><?= $b['stok']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
