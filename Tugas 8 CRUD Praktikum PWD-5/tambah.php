<?php
require_once "./classes/Produk.php";
$produk = new Produk();

if(isset($_POST['simpan'])) {
    $produk->tambah($_POST['nama'], $_POST['harga'], $_POST['stok']);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Tambah Produk</h2>

<form method="POST">
    <label>Nama Produk</label>
    <input type="text" name="nama" required>

    <label>Harga</label>
    <input type="number" name="harga" required>

    <label>Stok</label>
    <input type="number" name="stok" required>

    <button type="submit" name="simpan" class="btn tambah">Simpan</button>
</form>

</body>
</html>