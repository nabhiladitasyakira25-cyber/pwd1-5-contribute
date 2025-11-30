<?php

class Barang {

    private $data;

    public function __construct($file) {
        $json = file_get_contents($file);
        $this->data = json_decode($json, true);
    }

    public function tampilkanSemua() {
        return $this->data;
    }
}
?>
