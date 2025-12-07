<?php
require_once "./classes/Produk.php";
$produk = new Produk();

$id = $_GET['id'];
$produk->hapus($id);

header("Location: index.php");
?>