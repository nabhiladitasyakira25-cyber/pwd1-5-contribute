<?php
require_once "./classes/Produk.php";
$produk = new Produk();

$id = $_GET['id'];
$data = $produk->getById($id);

if(isset($_POST['ubah'])) {
    $produk->ubah($id, $_POST['nama'], $_POST['harga'], $_POST['stok']);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Ubah Produk</h2>

<form method="POST">
    <label>Nama Produk</label>
    <input type="text" name="nama" value="<?= $data['nama']; ?>" required>

    <label>Harga</label>
    <input type="number" name="harga" value="<?= $data['harga']; ?>" required>

    <label>Stok</label>
    <input type="number" name="stok" value="<?= $data['stok']; ?>" required>

    <button type="submit" name="ubah" class="btn ubah">Simpan Perubahan</button>
</form>

</body>
</html>