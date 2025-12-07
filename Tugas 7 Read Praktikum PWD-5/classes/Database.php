<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "db_toko";

    public function connect() {
        return new mysqli($this->host, $this->user, $this->pass, $this->dbname);
    }
}
?>