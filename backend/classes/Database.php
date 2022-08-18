<?php 
  class Database {
    protected $pdo;

    protected function __construct(){
      $this->pdo = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USER, DB_PASS);
    }
  }
?>