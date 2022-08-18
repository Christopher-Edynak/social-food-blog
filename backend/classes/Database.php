<?php 
  $dsn  = 'mysql:host=localhost; dbname=food-blog';
  $user = 'root';
  $pass = '';

  try{
    $pdo = new PDO($dsn, $user, $pass);
  
  }catch(PDOException $e){
    echo 'connection error!' . $e;
  }
?>