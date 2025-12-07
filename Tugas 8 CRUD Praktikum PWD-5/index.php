<?php
require_once "./classes/Produk.php";
$produk = new Produk();
$data = $produk->getAll();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<h2>DATA PRODUK</h2>

<a href="tambah.php" class="btn tambah">+ Tambah Data</a>

<table>
    <tr>
        <th>ID</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    <?php while($row = $data->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['harga']; ?></td>
        <td><?= $row['stok']; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row['id']; ?>" class="btn ubah">Ubah</a>
            <a href="#" class="btn hapus" onclick="confirmDelete(<?= $row['id']; ?>)">Hapus</a>
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>