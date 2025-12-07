<?php
require_once "./classes/Produk.php";
$produk = new Produk();
$data = $produk->getAllProduk();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Data Produk</title>
</head>

<body>
<h2>Daftar Produk</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Stok</th>
    </tr>

    <?php while($row = $data->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['harga']; ?></td>
        <td><?= $row['stok']; ?></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>