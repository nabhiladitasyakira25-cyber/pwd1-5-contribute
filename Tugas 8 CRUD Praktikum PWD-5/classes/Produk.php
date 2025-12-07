<?php
require_once "Database.php";

class Produk {
    private $db;

    public function __construct() {
        $this->db = new Database();
        $this->db = $this->db->connect();
    }

    public function getAll() {
        return $this->db->query("SELECT * FROM produk");
    }

    public function getById($id) {
        return $this->db->query("SELECT * FROM produk WHERE id=$id")->fetch_assoc();
    }

    public function tambah($nama, $harga, $stok) {
        return $this->db->query("INSERT INTO produk (nama, harga, stok) VALUES ('$nama','$harga','$stok')");
    }

    public function ubah($id, $nama, $harga, $stok) {
        return $this->db->query("UPDATE produk SET nama='$nama', harga='$harga', stok='$stok' WHERE id=$id");
    }

    public function hapus($id) {
        return $this->db->query("DELETE FROM produk WHERE id=$id");
    }
}
?>