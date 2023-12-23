<?php

session_start();

class Koneksi
{
   private $host = "localhost";
   private $username = "root";
   private $password = "";
   private $db = "db_adatugas";

   protected $conn;

   public function __construct()
   {
      if (!isset($this->conn)) {
         $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);
      }

      if (!$this->conn) {
         echo "koneksi ke database gagal!";
      }
   }
}
