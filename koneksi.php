<?php
class db0bj {
    var $servername = "localhost";
    var $username = "root";
    var $password = "";
    var $dbname =  "db_nyoba"; var $conn;

    function getConnstring () {
        $con = mysqli_connect($this->servername, $this->username,
        $this->password, $this->dbname) or
        die("Koneksi Gagal : ". mysqli_connect_error());
            if (mysqli_connect_errno()) {
                printf("Koneksi Gagal : %s\n", mysqli_connect_error());
                exit();
            }else {
                $this->conn = $con;
            }
            return $this->conn;
    }
}
?>