<?php
require_once "Database.php";

class Produk {
    private $db;

    public function __construct() {
        $this->db = new Database();
        $this->db = $this->db->connect();
    }

    public function getAllProduk() {
        $query = "SELECT * FROM produk";
        $result = $this->db->query($query);
        return $result;
    }
}
?>