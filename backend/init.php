<?php 
  session_start();

  spl_autoload_register(function($class){
    require 'classes/'.$class.'.php';
  });

  define("DB_HOST", "localhost");
  define("DB_NAME", "food-blog");
  define("DB_USER", "root");
  define("DB_PASS", "");
  define("BASE_URL", "https://localhost/food-blog/");

?>